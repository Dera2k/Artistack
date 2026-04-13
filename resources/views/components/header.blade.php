<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-sm border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2 group">
            <div class="w-9 h-9 rounded-lg bg-[#1d4ed8] flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <span class="text-xl font-bold text-[#1d4ed8] font-display">Artistack</span>
        </a>

        <nav class="flex items-center gap-6">
            <a href="{{ route('home') }}"
               class="text-sm font-medium {{ Route::currentRouteName() === 'home' ? 'text-[#1d4ed8]' : 'text-gray-500 hover:text-gray-900' }} transition-colors">
                Home
            </a>
            <a href="{{ route('artworks.index') }}"
               class="text-sm font-medium {{ Route::currentRouteName() === 'artworks.index' ? 'text-[#1d4ed8]' : 'text-gray-500 hover:text-gray-900' }} transition-colors">
                Artworks
            </a>

            @if(Route::currentRouteName() === 'artworks.index')
                <a href="{{ route('artworks.create') }}"
                   class="inline-flex items-center gap-1 bg-[#f97316] text-white text-sm font-semibold px-4 py-2 rounded-full hover:bg-[#ea580c] transition-colors shadow-sm">
                    Add art
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                </a>
            @endif
        </nav>
    </div>
</header>
