<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$title ?? 'Artistack'}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 ">
    <x-header />
        <div class="flex">
        <main class="w-full flex-grow min-h-[80vh]: mx-auto py-8">
            {{$slot}} <!-- main content here -->
        </main>
    </div>

    <x-footer />
</body>

</html>