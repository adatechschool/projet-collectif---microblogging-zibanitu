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

    <body class="bg-dark-blue sans">
        <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline">
            <img src="{{ asset('images/logo-miccroblogging.png')}}" alt="Logo">
        </a>
            
        <div class="flex font-sans text-400">
            <div class="mx-auto max-w-xl mt-20 ">
                <div class="border-2 border-sky-50/75 p-4 rounded-lg bg-indigo-50">
                    <div>
                        {{$user->name}}
                    </div>
                    <div>
                        {{$user->biography}}
                    </div>
                    <div>
                        {{$user->email}}
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>