# AIContent Project Setup Guide

This guide will walk you through the process of cloning and setting up a AIContent project on your local development environment.

## Prerequisites

Before you begin, make sure you have the following prerequisites installed on your computer:

- PHP
- Composer
- Git

## Step 1: Clone the AIContent Project

1. Open your terminal/command prompt.
2. Navigate to the directory where you want to create your Laravel project.

    ```shell
    cd /path/to/your/directory

3. Run the following command to clone a Recycling project from a Git repository (replace `project-name` with your desired project name):  

   ```shell
    git clone https://github.com/phonixcode/aicontent.git

## Step 2: Install Dependencies

1. Change your working directory to the project folder:

    ```shell
    cd project-name

2. Run Composer to install Laravel's dependencies:

    ```shell
    composer install

## Step 3: Configure Environment Variables

1. Duplicate the `.env.example` file and rename it to `.env`:

    ```shell
    cp .env.example .env`

2. Open the `.env` file and enter your `OPENAI_API_KEY`.

## Step 4: Generate an Application Key

Run the following command to generate a unique application key:

     php artisan key:generate

## Step 5: Start the Development Server

    php artisan serve

This will start the server at <http://localhost:8000> by default.

## Step 6: Access Your AIContent Application

- Open a web browser and navigate to <http://localhost:8000> (or the URL shown in your terminal).
- You should see the default AIContent page, indicating that your project is set up successfully.

## Additional Configuration (Optional)

You can configure additional settings, such as setting up a virtual host, configuring your web server (e.g., Apache or Nginx), or adding more Laravel packages, as needed for your project.

That's it! You've successfully cloned and set up a Recycling project on your local development environment. You can now start building and working Recycling application.

### Troubleshooting

If you encounter any issues during the setup process, you can refer to the <a href="https://laravel.com/docs/">Laravel documentation</a> for more information and troubleshooting tips.
