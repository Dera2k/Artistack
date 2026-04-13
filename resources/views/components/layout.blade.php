<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Artistack — Your Art Collection, Organized</title>
        <meta name="description" content="Upload, organize, and showcase your artwork in one place.">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Serif+Display&display=swap" rel="stylesheet">
        <style>
            :root {
                --blue: #1d4ed8;
                --blue-dark: #1e3a8a;
                --orange: #f97316;
                --orange-light: #fed7aa;
                --orange-pale: #fff7ed;
            }
            body { font-family: 'DM Sans', sans-serif; }
            .font-display { font-family: 'DM Serif Display', serif; }

            @keyframes fade-in {
                0% { opacity: 0; transform: translateY(16px); }
                100% { opacity: 1; transform: translateY(0); }
            }
        </style>
    </head>
    <body class="min-h-screen flex flex-col bg-white text-gray-900">
        <x-header />
        <main class="flex-1">
            {{ $slot }}
        </main>
        <x-footer />
    </body>
</html>
