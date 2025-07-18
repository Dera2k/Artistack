<x-layout title="Artworks">
    <section class="container mx-auto px-4 pt-2">

        <h1 class="text-2xl font-bold mb-6 text-center text-black">My Artworks</h1>
           <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    {{-- <img src="{{ asset('images/art1.jpg') }}" alt="Artwork 1" class="w-full h-48 object-cover"> --}}
                    <div class="p-4">
                        @forelse ($artworks as $artwork)
                        <h2 class="text-lg font-semibold mb-2">{{$artwork->title}}</h2>
                        <p class="text-gray-600 text-sm">{{$artwork->description}}</p>
                        @empty
                        <p>No art available</p>
                        @endforelse
                    </div>
                </div>
                <!-- Add more cards here if needed -->
            </div>
    </section>
</x-layout>
