<x-layout title="Artworks">

    <section class="mx-auto px-4 pt-2">
        <h1 class="text-2xl font-bold mb-6 text-center text-black">My Artworks</h1>

        @if($artworks->isEmpty())
            <p class="text-center ">No artworks available</p>
        @else

        @php
            $count = $artworks->count();
            $grid_classes = 'grid gap-8 max-w-5xl mx-auto';
            if ($count ===1)
            {
                $grid_classes .= ' grid-cols-1 place-content-center'; 
            }
            elseif ($count ===2)
            {
                $grid_classes .= ' grid-cols-1 sm:grid-cols-2 place-content-center';
            }
            else
            {
                $grid_classes .= ' grid-cols-1 sm:grid-cols-2 md:grid-cols-3 place-content-center'; 
            }
        @endphp
        <div class="{{ $grid_classes }}">
            @foreach ($artworks as $artwork)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/'.$artwork->image_path)}}" alt="{{ $artwork->title }}" 
                    class="w-full h-72 mx-auto object-cover">
                    <div class="p-4">
                        <h2>{{ $artwork->title}}</h2>
                        <p>{{ $artwork->description}}</p>
                    </div>
                </div>
            @endforeach    
        </div>
        @endif
    </section>
</x-layout>
