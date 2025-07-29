<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Artistack' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 ">
    <x-header />

        <main class="container mx-auto p-4 mt-4">
            {{$slot}}
        </main>
        
    <x-footer />
</body>

</html>