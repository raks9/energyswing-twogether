<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
    <div class="absolute top-8 left-8 text-gray-800 text-2xl font-bold" style="font-family: 'Poppins';">
            Twogether!
        </div>
        <div class="footer-text" style="position: absolute; bottom: 20px; width: 100%; text-align: center; font-size: 14px; color: #555;">
    © 2024 Energy Swing. All rights reserved.<br>Developed by Twogether!
</div>
<img src="images/lampu.png" alt="Logo" style="position: absolute; top: 0px; right: 350px; width: 200px; height: auto;">
<img src="images/orang.png" alt="Logo" style="position: absolute; top: 350px; right: 320px; width: 300px; height: auto;">
<img src="images/chat.png" alt="Logo" style="position: absolute; top: 320px; right:550px; width: 200px; height: auto;">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" 
     style="background: linear-gradient(280deg, #529277, #ffffff);">
     <div class="w-full sm:max-w-lg px-8 py-10 overflow-hidden sm:rounded-lg" 
     style="background-color: transparent; position: absolute; top: 250px; left: 230px;">
    {{ $slot }}
</div>

        </div>
    </body>
</html>
