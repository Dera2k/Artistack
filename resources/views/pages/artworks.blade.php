<x-layout title="Artworks">

    <section class="mx-auto px-4 pt-2">
        <h1 class="text-2xl font-bold mb-6 text-center text-black">My Artworks</h1>

        @if($artworks->isEmpty())
            <p class="text-center ">No artworks available</p>
        @else

        @php
            $count = $artworks->count();
            $grid_classes = 'grid gap-8 max-w-5xl mx-auto';
            if ($count === 1) {
                $grid_classes .= ' grid-cols-1 place-content-center';
            } elseif ($count === 2) {
                $grid_classes .= ' grid-cols-1 sm:grid-cols-2 place-content-center';
            } else {
                $grid_classes .= ' grid-cols-1 sm:grid-cols-2 md:grid-cols-3 place-content-center'; 
            }
        @endphp

        <div class="{{ $grid_classes }}">
            @foreach ($artworks as $artwork)
                <div class="block hover:shadow-xl transition">
                    <a href="{{ route('artworks.show', $artwork->id) }}">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/'.$artwork->image_path) }}" 
                                 alt="{{ $artwork->title }}" 
                                 class="w-full h-72 mx-auto object-cover">
                        </div>
                    </a>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h2>{{ $artwork->title }}</h2>
                                <p>{{ $artwork->description }}</p>
                            </div>

                            <div class="flex items-center">
                                <a href="{{ route('artworks.edit', $artwork->id) }}"
                                   class="text-blue-500 hover:text-blue-700 ml-3" 
                                   title="Edit">
                                    <x-heroicon-o-pencil class="w-5 h-5" />
                                </a>
                            </div>

                            <form action="{{ route('artworks.destroy', $artwork->id) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Are you sure you want to delete this artwork?');">
                                @csrf
                                @method('delete')
                                <button type="submit" 
                                        class="text-red-500 hover:text-red-700" 
                                        title="Delete">
                                    <x-heroicon-o-trash class="w-5 h-5" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach            
        </div>
        @endif
    </section>
</x-layout>
