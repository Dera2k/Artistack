<x-layout title="{{ $artwork -> title }}">
    <section class="max-w-3xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/' .$artwork->image_path) }}" alt="{{ $artwork->title }}"
            class="w-full h-96 object-cover">

            <div class="p-6">
                <h1 class="text-2xl font-bold">{{ $artwork -> title }}</h1>
                <p class="mt-4 text-gray-700">{{ $artwork -> description }}</p>
            </div>
        </div>
    </section>
</x-layout>