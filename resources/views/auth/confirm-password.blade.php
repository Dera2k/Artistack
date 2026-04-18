<x-guest-layout>
    <div class="relative">
        {{-- Decorative splatter --}}
        <svg class="absolute -top-12 -right-8 w-32 h-32 text-[#f97316]/15 -z-10" viewBox="0 0 100 100" fill="currentColor">
            <circle cx="80" cy="20" r="30"/><circle cx="95" cy="5" r="12"/><circle cx="65" cy="8" r="8"/>
        </svg>

        <h1 class="font-display text-3xl md:text-4xl text-gray-900 mb-2">
            Hold up<span class="text-[#f97316]">.</span>
        </h1>
        <div class="mb-6 text-sm text-gray-500 leading-relaxed">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full rounded-xl border-gray-200 focus:border-[#1d4ed8] focus:ring-[#1d4ed8]"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit"
                        class="group inline-flex items-center gap-2 bg-[#1d4ed8] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#1e3a8a] transition-all duration-300 shadow-lg shadow-blue-700/25 hover:shadow-xl hover:-translate-y-0.5">
                    {{ __('Confirm') }}
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
