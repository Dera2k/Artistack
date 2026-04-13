<x-layout>

    {{-- Hero Section --}}
    <section class="relative overflow-hidden min-h-[85vh] flex items-center">
        {{-- Paint splatter decorations --}}
        <div class="absolute inset-0 -z-10 overflow-hidden">
            {{-- Large orange splatter top-right --}}
            <svg class="absolute -top-16 -right-16 w-[420px] h-[420px] text-[#f97316]/15 animate-[spin_60s_linear_infinite]" viewBox="0 0 400 400" fill="currentColor">
                <path d="M200 0c30 80 120 60 180 120s-20 140-60 180-130 10-180 60S60 400 20 340s40-120 0-180S120 40 200 0z"/>
            </svg>
            {{-- Blue ink blob bottom-left --}}
            <svg class="absolute -bottom-20 -left-20 w-[500px] h-[500px] text-[#1d4ed8]/8 animate-[spin_90s_linear_infinite_reverse]" viewBox="0 0 400 400" fill="currentColor">
                <path d="M180 10c60 20 50 100 110 140s30 120-20 160-120 10-180 40S10 370 10 300s60-80 40-140S100-10 180 10z"/>
            </svg>
            {{-- Small orange dot cluster --}}
            <div class="absolute top-1/3 right-1/4 w-4 h-4 rounded-full bg-[#f97316]/20 animate-pulse"></div>
            <div class="absolute top-1/3 right-[22%] w-2 h-2 rounded-full bg-[#f97316]/30 animate-pulse [animation-delay:0.5s]"></div>
            <div class="absolute top-[38%] right-[26%] w-3 h-3 rounded-full bg-[#1d4ed8]/15 animate-pulse [animation-delay:1s]"></div>
            {{-- Blurred glow spots --}}
            <div class="absolute top-20 left-1/4 w-72 h-72 bg-[#f97316]/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-1/4 w-96 h-96 bg-[#1d4ed8]/8 rounded-full blur-3xl"></div>
        </div>

        {{-- Paint drip SVG left edge --}}
        <svg class="absolute top-0 left-8 w-6 h-40 text-[#1d4ed8]/10" viewBox="0 0 24 160" fill="currentColor">
            <path d="M12 0v120c0 22-12 30-12 40s12 0 12 0 12 10 12 0-12-18-12-40V0z"/>
        </svg>
        {{-- Paint drip right edge --}}
        <svg class="absolute top-0 right-12 w-5 h-28 text-[#f97316]/10" viewBox="0 0 20 112" fill="currentColor">
            <path d="M10 0v80c0 18-10 24-10 32s10 0 10 0 10 8 10 0-10-14-10-32V0z"/>
        </svg>

        <div class="max-w-6xl mx-auto px-6 py-24 md:py-36 text-center relative">
            {{-- Tagline chip --}}
            <div class="inline-flex items-center gap-2 bg-[#fff7ed] border border-[#fed7aa] text-[#f97316] text-sm font-medium px-4 py-1.5 rounded-full mb-8 opacity-0 animate-[fade-in_0.6s_ease-out_0.2s_forwards]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>
                </svg>
                Built for artists
            </div>

            <h1 class="font-display text-5xl md:text-7xl lg:text-8xl text-gray-900 leading-tight mb-6 opacity-0 animate-[fade-in_0.8s_ease-out_0.4s_forwards]">
                Your art collection,<br>
                <span class="relative inline-block text-[#1d4ed8]">
                    organized
                    {{-- Brush stroke underline --}}
                    <svg class="absolute -bottom-2 left-0 w-full h-4 text-[#f97316]/40" viewBox="0 0 200 12" fill="none" preserveAspectRatio="none">
                        <path d="M2 8c30-6 60-2 100-4s70 2 96-2" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </span><span class="text-[#f97316] text-8xl md:text-9xl leading-none">.</span>
            </h1>

            <p class="text-lg md:text-xl text-gray-500 max-w-xl mx-auto mb-10 leading-relaxed opacity-0 animate-[fade-in_0.8s_ease-out_0.6s_forwards]">
                Upload your artwork, keep it cataloged, and browse your personal gallery — all in one simple place.
            </p>

            <div class="opacity-0 animate-[fade-in_0.8s_ease-out_0.8s_forwards]">
                <a href="{{ route('artworks.index') }}"
                   class="group inline-flex items-center gap-2 bg-[#1d4ed8] text-white text-lg font-semibold px-8 py-4 rounded-full hover:bg-[#1e3a8a] transition-all duration-300 shadow-lg shadow-blue-700/25 hover:shadow-xl hover:shadow-blue-700/30 hover:-translate-y-1 hover:scale-105">
                    View My Artworks
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="relative bg-gray-50 border-t border-gray-100 overflow-hidden">
        {{-- Background paint texture --}}
        <svg class="absolute top-0 left-0 w-full h-2 text-[#f97316]/20" viewBox="0 0 1200 8" fill="none" preserveAspectRatio="none">
            <path d="M0 4c100-4 200 4 400 2s300-6 400-2 200 4 400 2" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
        </svg>

        <div class="max-w-6xl mx-auto px-6 py-20">
            <div class="text-center mb-14">
                <h2 class="font-display text-3xl md:text-4xl text-gray-900 mb-3">Simple by design</h2>
                <p class="text-gray-500">Three steps. That's it.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Upload --}}
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:border-[#f97316]/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-xl hover:shadow-orange-500/10 relative overflow-hidden">
                    {{-- Corner splatter --}}
                    <svg class="absolute -top-4 -right-4 w-24 h-24 text-[#f97316]/5 transition-all duration-500 group-hover:text-[#f97316]/15 group-hover:scale-125" viewBox="0 0 100 100" fill="currentColor">
                        <circle cx="80" cy="20" r="30"/><circle cx="95" cy="5" r="12"/><circle cx="65" cy="8" r="8"/>
                    </svg>
                    <div class="w-12 h-12 rounded-xl bg-[#fff7ed] flex items-center justify-center mb-5 group-hover:bg-[#f97316] transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                        <svg class="w-6 h-6 text-[#f97316] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Upload</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Drag and drop your digital artwork or scanned pieces. Any format, any size.</p>
                </div>

                {{-- Organize --}}
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:border-[#1d4ed8]/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/10 relative overflow-hidden">
                    <svg class="absolute -top-4 -right-4 w-24 h-24 text-[#1d4ed8]/5 transition-all duration-500 group-hover:text-[#1d4ed8]/15 group-hover:scale-125" viewBox="0 0 100 100" fill="currentColor">
                        <circle cx="80" cy="20" r="30"/><circle cx="95" cy="5" r="12"/><circle cx="65" cy="8" r="8"/>
                    </svg>
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-5 group-hover:bg-[#1d4ed8] transition-all duration-300 group-hover:scale-110 group-hover:-rotate-3">
                        <svg class="w-6 h-6 text-[#1d4ed8] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Organize</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Tag, title, and catalog every piece. Build your personal art archive effortlessly.</p>
                </div>

                {{-- View --}}
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:border-[#f97316]/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-xl hover:shadow-orange-500/10 relative overflow-hidden">
                    <svg class="absolute -top-4 -right-4 w-24 h-24 text-[#f97316]/5 transition-all duration-500 group-hover:text-[#f97316]/15 group-hover:scale-125" viewBox="0 0 100 100" fill="currentColor">
                        <circle cx="80" cy="20" r="30"/><circle cx="95" cy="5" r="12"/><circle cx="65" cy="8" r="8"/>
                    </svg>
                    <div class="w-12 h-12 rounded-xl bg-[#fff7ed] flex items-center justify-center mb-5 group-hover:bg-[#f97316] transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                        <svg class="w-6 h-6 text-[#f97316] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">View</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Browse your collection in a beautiful gallery. Your work deserves to be seen.</p>
                </div>
            </div>
        </div>
    </section>

</x-layout>
