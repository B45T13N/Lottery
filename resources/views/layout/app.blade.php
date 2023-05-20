<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lotterie</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="flex items-center justify-center h-screen">
            <div class="max-w-md w-full bg-white shadow-lg rounded-lg px-6 py-4">
                <h1 class="text-3xl font-bold mb-4">La super lotterie</h1>
                @yield('content')
            </div>
        </div>
    </body>
</html>
