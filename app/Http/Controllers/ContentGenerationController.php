<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ContentGenerationController extends Controller
{
    public const OPEN_AI_URL = 'https://api.openai.com/v1';

    public function index()
    {
        return view('main');
    }

    public function generateContent(Request $request)
    {
        $validatedData = $request->validate([
            'keyword'       => 'required',
            'tone'          => 'required',
            'writingStyle'  => 'required',
            'densityRange'  => 'required',
        ]);

        $keyword        = $validatedData['keyword'];
        $tone           = $validatedData['tone'];
        $writingStyle   = $validatedData['writingStyle'];
        $densityRange   = $validatedData['densityRange'];

        $message = $this->createMessage($keyword, $tone, $writingStyle);

        $images = $this->fetchImages($keyword);
        $content = $this->fetchContent($message, $densityRange);

        return response()->json([
            'content' => $content,
            'images' => $images,
        ]);
    }

    private function createMessage($keyword, $tone, $writingStyle)
    {
        return [
            [
                "role" => "user",
                "content" => "Write in a $tone tone and $writingStyle style: $keyword",
            ],
        ];
    }

    private function fetchContent($message, $densityRange)
    {
        try {
            $client = $this->createOpenAiClient();

            $response = $client->post(self::OPEN_AI_URL.'/chat/completions', [
                'json' => [
                    'model' => 'gpt-4',
                    'messages' => $message,
                    'temperature' => (int)$densityRange,
                    'frequency_penalty' => 0,
                    'presence_penalty' => 0,
                ],
            ]);

            $content = json_decode($response->getBody()->getContents(), true)['choices'][0]['message']['content'];
            return $content;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    private function fetchImages($keyword)
    {
        try {
            $client = $this->createOpenAiClient();

            $response = $client->post(self::OPEN_AI_URL.'/images/generations', [
                'json' => [
                    'model' => 'dall-e-2',
                    'prompt' => $keyword,
                    'n' => 2,
                    'size' => '512x512',
                    'quality' => 'standard',
                    'response_format' => 'url',
                ],
            ]);

            $images = json_decode($response->getBody()->getContents(), true)['data'];
            return $images;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    private function createOpenAiClient()
    {
        return new Client([
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer '. env('OPENAI_API_KEY'),
            ],
        ]);
    }
}
