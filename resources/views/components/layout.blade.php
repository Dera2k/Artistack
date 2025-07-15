<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$title ?? 'Artistack'}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 min-h-screen">
    <x-header />

    <main class="w-full flex-grow min-[80vh]: mx-auto px-4">
        {{$slot}} <!-- main content here -->
    </main>

    <x-footer />
</body>

</html>