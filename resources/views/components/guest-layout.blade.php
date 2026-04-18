<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Artistack — Your Art Collection, Organized</title>
        <meta name="description" content="Upload, organize, and showcase your artwork in one place.">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Serif+Display&display=swap" rel="stylesheet">
        <style>
            :root {
                --blue: #1d4ed8;
                --blue-dark: #1e3a8a;
                --orange: #f97316;
                --orange-light: #fed7aa;
                --orange-pale: #fff7ed;
            }
            body { font-family: 'DM Sans', sans-serif; }
            .font-display { font-family: 'DM Serif Display', serif; }

            @keyframes fade-in {
                0% { opacity: 0; transform: translateY(16px); }
                100% { opacity: 1; transform: translateY(0); }
            }
            @keyframes spin-slow {
                from { transform: rotate(0deg); } to { transform: rotate(360deg); }
            }
        </style>
    </head>
    <body class="min-h-screen bg-white text-gray-900 antialiased">
        <div class="relative min-h-screen flex flex-col items-center justify-center px-6 py-12 overflow-hidden">

            {{-- Decorative paint splatters --}}
            <div class="absolute inset-0 -z-10 overflow-hidden">
                {{-- Orange splatter top-left --}}
                <svg class="absolute -top-20 -left-20 w-[380px] h-[380px] text-[#f97316]/15" style="animation: spin-slow 60s linear infinite;" viewBox="0 0 400 400" fill="currentColor">
                    <circle cx="200" cy="200" r="120"/>
                    <circle cx="320" cy="120" r="40"/>
                    <circle cx="100" cy="300" r="55"/>
                    <circle cx="350" cy="280" r="25"/>
                    <circle cx="60" cy="100" r="30"/>
                </svg>

                {{-- Blue splatter bottom-right --}}
                <svg class="absolute -bottom-24 -right-24 w-[420px] h-[420px] text-[#1d4ed8]/10" style="animation: spin-slow 80s linear infinite reverse;" viewBox="0 0 400 400" fill="currentColor">
                    <circle cx="200" cy="200" r="140"/>
                    <circle cx="80" cy="80" r="45"/>
                    <circle cx="340" cy="320" r="35"/>
                    <circle cx="60" cy="280" r="22"/>
                </svg>

                {{-- Tiny orange dots --}}
                <div class="absolute top-1/4 right-1/4 w-3 h-3 rounded-full bg-[#f97316]/40"></div>
                <div class="absolute top-2/3 left-1/3 w-2 h-2 rounded-full bg-[#1d4ed8]/40"></div>
                <div class="absolute top-1/3 left-1/5 w-1.5 h-1.5 rounded-full bg-[#f97316]/60"></div>
            </div>

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-2 mb-8 group">
                <div class="w-10 h-10 rounded-xl bg-[#1d4ed8] flex items-center justify-center shadow-lg shadow-blue-700/25 group-hover:rotate-6 transition-transform">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M4 6h16a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z"/>
                    </svg>
                </div>
                <span class="font-display text-2xl text-gray-900">Artistack</span>
            </a>

            {{-- Card --}}
            <div class="w-full sm:max-w-md bg-white rounded-2xl shadow-xl shadow-gray-200/60 border border-gray-100 overflow-hidden" style="animation: fade-in 0.6s ease-out;">
                {{-- Brush stroke top accent --}}
                <div class="h-1.5 bg-gradient-to-r from-[#1d4ed8] via-[#f97316] to-[#1d4ed8]"></div>

                <div class="px-8 py-10">
                    {{ $slot }}
                </div>
            </div>

            {{-- Footer note --}}
            <p class="mt-6 text-xs text-gray-400">
                &copy; {{ date('Y') }} Artistack. Your personal art collection.
            </p>
        </div>
    </body>
</html>
