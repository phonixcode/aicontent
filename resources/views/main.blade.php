<!DOCTYPE html>
<html lang="en">

<head>
    <title>Media-Rich Content</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="media-rich, content" />
    <meta name="author" content="media-rich" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.css') }}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

    <style>
        #images-container img {
            margin-right: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body class="sidebar-mini">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">

            <!-- begin app-container -->
            <div class="app-container">

                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->

                    <div class="container-fluid">

                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Generate Content</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="javascript::void(0);" method="post" id="generate-content-form">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputAddress">Keyword</label>
                                                <input type="text" class="form-control" id="keyword" name="keyword"
                                                    placeholder="Specific Keyword...">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4">Tone</label>
                                                    <select id="tone" name="tone" class="form-control">
                                                        <option selected disabled>Select Tone</option>
                                                        <option value="Emotional">Emotional</option>
                                                        <option value="Professional">Professional</option>
                                                        <option value="Humorous">Humorous</option>
                                                        <option value="Educational">Educational</option>
                                                        <option value="Persuasive">Persuasive</option>
                                                        <option value="Nostalgic">Nostalgic</option>
                                                        <option value="Satirical">Satirical</option>
                                                        <option value="Descriptive">Descriptive</option>
                                                        <option value="Critical">Critical</option>
                                                        <option value="Ironic">Ironic</option>
                                                        <option value="Sarcastic">Sarcastic</option>
                                                        <option value="Formal">Formal</option>
                                                        <option value="Informative">Informative</option>
                                                        <option value="Friendly">Friendly</option>
                                                        <option value="Casual">Casual</option>
                                                        <option value="Factual">Factual</option>
                                                        <option value="Inquisitive">Inquisitive</option>
                                                        <option value="Matter-of-fact">Matter-of-fact</option>
                                                        <option value="Analytical">Analytical</option>
                                                        <option value="Pensive">Pensive</option>
                                                        <option value="Hopeful">Hopeful</option>
                                                        <option value="Melancholic">Melancholic</option>
                                                        <option value="Ambivalent">Ambivalent</option>
                                                        <option value="Encouraging">Encouraging</option>
                                                        <option value="Enthusiastic">Enthusiastic</option>
                                                        <option value="Skeptical">Skeptical</option>
                                                        <option value="Confused">Confused</option>
                                                        <option value="Explanatory">Explanatory</option>
                                                        <option value="Empathetic">Empathetic</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPassword4">Writing Style</label>
                                                    <select id="writingStyle" name="writingStyle" class="form-control">
                                                        <option selected disabled>Select Writing Style</option>
                                                        <option value="Narrative">Narrative</option>
                                                        <option value="Poetic">Poetic</option>
                                                        <option value="Argumentative">Argumentative</option>
                                                        <option value="Descriptive">Descriptive</option>
                                                        <option value="Journalistic">Journalistic</option>
                                                        <option value="Analytical">Analytical</option>
                                                        <option value="Creative Nonfiction">Creative Nonfiction</option>
                                                        <option value="Technical">Technical</option>
                                                        <option value="Comedic">Comedic</option>
                                                        <option value="Romantic">Romantic</option>
                                                        <option value="Horror">Horror</option>
                                                        <option value="Suspenseful">Suspenseful</option>
                                                        <option value="Dramatic">Dramatic</option>
                                                        <option value="Mystery">Mystery</option>
                                                        <option value="Philosophical">Philosophical</option>
                                                        <option value="Historical">Historical</option>
                                                        <option value="Autobiographical">Autobiographical</option>
                                                        <option value="Satirical">Satirical</option>
                                                        <option value="Scientific">Scientific</option>
                                                        <option value="Fictional">Fictional</option>
                                                        <option value="Biographical">Biographical</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPassword4">Density Range</label>
                                                    <select id="densityRange" name="densityRange"
                                                        class="form-control">
                                                        <option value="0.02">2%</option>
                                                        <option value="0.03">3%</option>
                                                        <option value="0.04">4%</option>
                                                        <option value="0.05">5%</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary"
                                                id="button-text">Generate</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <p id="text-content"></p>
                                        <div id="images-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="{{ asset('assets/js/vendors.js') }}"></script>

    <!-- custom app -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#generate-content-form').on('submit', function(event) {
                event.preventDefault();

                let keyword = $('#keyword').val();
                let tone = $('#tone').val();
                let writingStyle = $('#writingStyle').val();
                let densityRange = $('#densityRange').val();

                if (!keyword || !tone || !writingStyle || !densityRange) {
                    alert('Please fill in all fields');
                    return;
                }

                let url = '{{ route('generate.content') }}';

                let buttonText = $('#button-text');
                let contentText = $('#text-content');
                let imagesContainer = $('#images-container');

                contentText.text("Generating Content ...");
                imagesContainer.empty();
                buttonText.text('Generating Content ...');
                buttonText.attr('disabled', true);

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        keyword: keyword,
                        tone: tone,
                        writingStyle: writingStyle,
                        densityRange: densityRange,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        contentText.text(response.content);

                        // Clear previous images
                        imagesContainer.empty();

                        // Iterate through images and create img tags
                        response.images.forEach(function(image) {
                            let img = $('<img>');
                            img.attr('src', image.url);
                            img.attr('alt', 'Image');
                            // img.attr('width', '250');
                            imagesContainer.append(img);
                        });

                        buttonText.text('Generate');
                        buttonText.attr('disabled', false);
                    },
                    error: function(xhr, status, error) {
                        alert("Error Generating Content");
                        contentText.text("Error Generating Content");
                        imagesContainer.empty();
                        buttonText.text('Generate');
                        buttonText.attr('disabled', false);
                    }

                });
            });

        });
    </script>
</body>


</html>
