<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-sky-200">
        
    <div class="flex font-sans text-400">
        <div class="mx-auto max-w-xl mt-20 ">
            <div class="border-2 border-black">
                <div>
                    {{$post->user->name}}
                </div>
                <div>
                    {{$post->description}}
                </div>
                <img class="" src="{{ $post->img_url }}">
            </div>
        </div>
    </div>

    </body>
</html>
