<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-orange-50/30 to-blue-50/40 py-16 px-4 sm:px-6 relative overflow-hidden">

        {{-- Decorative background shapes --}}
        <div class="absolute top-20 right-0 w-72 h-72 bg-orange-400/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-700/10 rounded-full blur-3xl pointer-events-none"></div>

        {{-- Page header --}}
        <div class="max-w-6xl mx-auto mb-10 relative">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-orange-500 mb-2">Gallery</p>
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900" style="font-family: 'DM Serif Display', serif;">
                My Artworks
            </h1>
            <div class="mt-4 h-1 w-24 rounded-full bg-gradient-to-r from-blue-700 to-orange-400"></div>
        </div>

        {{-- Search & filter bar --}}
        <div class="max-w-6xl mx-auto mb-12 relative">
            <form method="GET" action="{{ route('artworks.index') }}"
                  class="flex flex-col md:flex-row md:items-end gap-4 bg-white/80 backdrop-blur-sm border border-slate-200/80 rounded-2xl p-5 shadow-sm">

                {{-- Search field --}}
                <div class="flex-1 min-w-0">
                    <label for="search" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">
                        Search
                    </label>
                    <div class="relative">
                        <svg class="w-5 h-5 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none"
                             fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 10.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" />
                        </svg>
                        <input type="text"
                               name="search"
                               id="search"
                               value="{{ request('search') }}"
                               placeholder="Search by title or description..."
                               class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 bg-white text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-700/30 focus:border-blue-700 transition-all duration-200">
                    </div>
                </div>

                {{-- Sort field --}}
                <div class="w-full md:w-56">
                    <label for="date_filter" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">
                        Sort
                    </label>
                    <select name="date_filter"
                            id="date_filter"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white text-slate-800 focus:outline-none focus:ring-2 focus:ring-blue-700/30 focus:border-blue-700 transition-all duration-200 cursor-pointer">
                        <option value="">Sort by date</option>
                        <option value="newest" @selected(request('date_filter') === 'newest')>Newest first</option>
                        <option value="oldest" @selected(request('date_filter') === 'oldest')>Oldest first</option>
                    </select>
                </div>

                {{-- Actions --}}
                <div class="flex gap-3">
                    <button type="submit"
                            class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-blue-700 text-white font-semibold rounded-xl hover:bg-orange-400 shadow-md shadow-blue-700/20 transition-all duration-300 text-sm whitespace-nowrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 10.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" />
                        </svg>
                        Search
                    </button>

                    @if(request('search') || request('date_filter'))
                        <a href="{{ route('artworks.index') }}"
                           class="inline-flex items-center justify-center px-6 py-3 bg-slate-100 text-slate-700 font-semibold rounded-xl border border-slate-200 hover:bg-slate-200 transition-all duration-300 text-sm whitespace-nowrap text-center">
                            Clear
                        </a>
                    @endif

                    @auth
                        <a href="{{ request()->fullUrlWithQuery(['my' => !request('my')]) }}"
                           class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-{{ request('my') ? 'blue-700 text-white' : 'slate-100 text-slate-700' }} font-semibold rounded-xl border border-slate-200 hover:bg-{{ request('my') ? 'blue-800' : 'slate-200' }} transition-all duration-300 text-sm whitespace-nowrap">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            {{ request('my') ? 'All Artworks' : 'My Artworks' }}
                        </a>
                    @endauth
                </div>
            </form>
        </div>

        @if($artworks->isEmpty())
            <div class="max-w-md mx-auto text-center py-20 relative">
                <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-orange-100 flex items-center justify-center">
                    <svg class="w-9 h-9 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M18 6h.008v.008H18V6zm2.25 12H3.75A1.5 1.5 0 012.25 16.5v-9A1.5 1.5 0 013.75 6h16.5a1.5 1.5 0 011.5 1.5v9a1.5 1.5 0 01-1.5 1.5z" />
                    </svg>
                </div>
                <p class="text-slate-500 text-lg">No artworks found. Try adjusting your search.</p>
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

        <div class="{{ $grid_classes }} relative">
            @foreach ($artworks as $artwork)
                <div class="group bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                    <a href="{{ route('artworks.show', $artwork) }}" class="block relative overflow-hidden aspect-[4/3] bg-slate-100">
                        <img src="{{ asset('storage/' . $artwork->image_path) }}"
                             alt="{{ $artwork->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-slate-900/0 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <span class="absolute bottom-4 left-4 text-white text-sm font-semibold opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                            View piece →
                        </span>
                    </a>

                    <div class="p-5">
                        <div class="flex items-start justify-between gap-3">
                            <div class="min-w-0">
                                <h2 class="text-lg font-bold text-slate-900 truncate" style="font-family: 'DM Serif Display', serif;">
                                    {{ $artwork->title }}
                                </h2>
                                <p class="text-sm text-slate-500 line-clamp-2 mt-1">{{ $artwork->description }}</p>
                            </div>

                            <div class="flex items-center gap-1 shrink-0">
                                <a href="{{ route('artworks.edit', $artwork) }}"
                                   class="p-2 rounded-lg text-slate-400 hover:text-blue-700 hover:bg-blue-50 transition-colors"
                                   title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                    </svg>
                                </a>

                                <form action="{{ route('artworks.destroy', $artwork) }}" method="POST"
                                      onsubmit="return confirm('Delete this artwork?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                            class="p-2 rounded-lg text-slate-400 hover:text-red-500 hover:bg-red-50 transition-colors"
                                            title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 7.5h12M9.75 7.5V6a1.5 1.5 0 011.5-1.5h1.5A1.5 1.5 0 0114.25 6v1.5M10.5 11.25v5.25M13.5 11.25v5.25M8.25 7.5l.75 12h6l.75-12" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="max-w-6xl mx-auto mt-12 flex justify-center relative">
            <nav class="pagination-artsy" aria-label="Gallery pagination">
                {{ $artworks->links() }}
            </nav>
        </div>
        @endif
    </div>
</x-layout>
