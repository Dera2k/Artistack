<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-orange-50/30 to-blue-50/40 py-16 px-4 sm:px-6 relative overflow-hidden">

        {{-- Decorative background shapes --}}
        <div class="absolute top-20 right-0 w-72 h-72 bg-orange-400/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-700/10 rounded-full blur-3xl pointer-events-none"></div>

        {{-- Page header --}}
        <div class="max-w-6xl mx-auto mb-12 text-center">
            <p class="text-orange-500 font-semibold tracking-widest uppercase text-sm mb-2">Gallery</p>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900" style="font-family:'DM Serif Display',serif;">
                My Artworks
            </h1>
            <div class="w-16 h-1 bg-gradient-to-r from-blue-700 to-orange-400 mx-auto mt-4 rounded-full"></div>
        </div>

        @if($artworks->isEmpty())
            <div class="max-w-md mx-auto text-center py-20">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-orange-100 flex items-center justify-center">
                    <svg class="w-10 h-10 text-orange-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0 0 22.5 18.75V5.25A2.25 2.25 0 0 0 20.25 3H3.75A2.25 2.25 0 0 0 1.5 5.25v13.5A2.25 2.25 0 0 0 3.75 21Z"/>
                    </svg>
                </div>
                <p class="text-slate-500 text-lg">No artworks yet. Start building your collection.</p>
            </div>
        @else

        @php
            $count = $artworks->count();
            $grid_classes = 'grid gap-6 max-w-6xl mx-auto';
            if ($count === 1) {
                $grid_classes .= ' grid-cols-1 max-w-lg';
            } elseif ($count === 2) {
                $grid_classes .= ' grid-cols-1 sm:grid-cols-2 max-w-3xl';
            } else {
                $grid_classes .= ' grid-cols-1 sm:grid-cols-2 md:grid-cols-3';
            }
        @endphp

        <div class="{{ $grid_classes }}">
            @foreach ($artworks as $artwork)
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:shadow-blue-700/10 transition-all duration-500 hover:-translate-y-1 border border-slate-100">

                    {{-- Image container --}}
                    <a href="{{ route('artworks.show', $artwork) }}" class="block relative overflow-hidden aspect-[4/5]">
                        <img src="{{ asset('storage/' . $artwork->image) }}"
                             alt="{{ $artwork->title }}"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        {{-- Hover overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-500">
                            <span class="text-white/80 text-sm font-medium">View piece →</span>
                        </div>
                    </a>

                    {{-- Info bar --}}
                    <div class="p-4">
                        <div class="flex items-start justify-between gap-3">
                            <div class="min-w-0 flex-1">
                                <h3 class="font-bold text-slate-900 truncate" style="font-family:'DM Serif Display',serif;">
                                    {{ $artwork->title }}
                                </h3>
                                <p class="text-slate-400 text-sm mt-0.5 truncate">{{ $artwork->description }}</p>
                            </div>

                            <div class="flex items-center gap-1 shrink-0">
                                <a href="{{ route('artworks.edit', $artwork) }}"
                                   class="p-2 rounded-lg text-slate-400 hover:text-blue-700 hover:bg-blue-50 transition-colors"
                                   title="Edit">
                                    <x-heroicon-o-pencil-square class="w-4 h-4" />
                                </a>
                                <form action="{{ route('artworks.destroy', $artwork) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                            class="p-2 rounded-lg text-slate-400 hover:text-red-500 hover:bg-red-50 transition-colors"
                                            title="Delete">
                                        <x-heroicon-o-trash class="w-4 h-4" />
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</x-layout>
