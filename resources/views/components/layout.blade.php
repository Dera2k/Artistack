<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Artistack' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200 ">
    <x-header />

        <main class="container mx-auto p-4 mt-4">
            {{$slot}}
        </main>
        
    <x-footer />
</body>

</html>