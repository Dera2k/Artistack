<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-orange-50/30 to-blue-50/40 relative overflow-hidden">

        {{-- Decorative shapes --}}
        <div class="absolute top-10 left-0 w-80 h-80 bg-orange-400/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-0 w-96 h-96 bg-blue-700/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-12">

            {{-- Back link --}}
            <a href="{{ route('artworks.index') }}"
               class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-blue-700 transition-colors mb-8 group">
                <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
                Back to gallery
            </a>

            <div class="bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-200/50 border border-slate-100">
                {{-- Image --}}
                <div class="relative bg-slate-100">
                    <img src="{{ asset('storage/' . $artwork->image_path) }}"
                         alt="{{ $artwork->title }}"
                         class="w-full max-h-[70vh] object-contain">
                </div>

                {{-- Details --}}
                <div class="p-8 md:p-10">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-8 h-1 bg-gradient-to-r from-blue-700 to-orange-400 rounded-full"></div>
                        <span class="text-orange-500 text-sm font-semibold tracking-widest uppercase">Artwork</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4" style="font-family:'DM Serif Display',serif;">
                        {{ $artwork->title }}
                    </h1>
                    <p class="text-slate-500 text-lg leading-relaxed max-w-2xl">
                        {{ $artwork->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
