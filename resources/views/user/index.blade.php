<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-main">
    <div class="mx-auto max-w-screen-3xl">
        <x-user.header.header />

        <div class="h-148 sm:h-108 md:h-166 lg:h-200">
            <video controls
            class="object-cover w-full h-full">
                <!-- High-resolution video for large screens -->
                <source src="{{ asset('videos/main/main-dk.mp4') }}" type="video/mp4" media="(min-width: 768px)">

                <!-- Low-resolution video as a fallback for smaller screens -->
                <source src="{{ asset('videos/main/main-mb.mp4') }}" type="video/mp4">

                <!-- Fallback text if video is not supported -->
                Your browser does not support the video tag.
              </video>
        </div>
    </div>
</body>

</html>
