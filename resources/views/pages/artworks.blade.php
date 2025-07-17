<x-layout title="Artworks">
    <h1>Available artworks</h1>
    @forelse($artworks as $artwork)
    <p>{{$artwork->title}} - {{$artwork->description}}</p>
    @empty
        <p>No art available</p>
    @endforelse

    <section class="container mx-auto px-4 pt-20">

        <h1 class="text-2xl font-bold mb-6 text-center text-black">My Artworks</h1>
           <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    {{-- <img src="{{ asset('images/art1.jpg') }}" alt="Artwork 1" class="w-full h-48 object-cover"> --}}
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">Sunset Canvas</h2>
                        <p class="text-gray-600 text-sm">A calming blend of warm colors inspired by the evening sky.</p>
                    </div>
                </div>
                <!-- Add more cards here if needed -->
            </div>
    </section>
</x-layout>
