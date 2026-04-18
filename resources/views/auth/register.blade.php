<x-guest-layout>
    <div class="relative">
        <svg class="absolute -top-12 -right-8 w-32 h-32 text-[#1d4ed8]/10 -z-10" viewBox="0 0 100 100" fill="currentColor">
            <circle cx="80" cy="20" r="30"/><circle cx="95" cy="5" r="12"/><circle cx="65" cy="8" r="8"/>
        </svg>

        <div class="inline-flex items-center gap-2 bg-[#fff7ed] border border-[#fed7aa] text-[#f97316] text-xs font-medium px-3 py-1 rounded-full mb-4">
            Start your collection
        </div>
        <h1 class="font-display text-3xl md:text-4xl text-gray-900 mb-6">
            Create your <span class="text-[#1d4ed8]">space</span><span class="text-[#f97316]">.</span>
        </h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full rounded-xl border-gray-200 focus:border-[#1d4ed8] focus:ring-[#1d4ed8]"
                              type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full rounded-xl border-gray-200 focus:border-[#1d4ed8] focus:ring-[#1d4ed8]"
                              type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full rounded-xl border-gray-200 focus:border-[#1d4ed8] focus:ring-[#1d4ed8]"
                              type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-xl border-gray-200 focus:border-[#1d4ed8] focus:ring-[#1d4ed8]"
                              type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-6">
                <a class="text-sm text-gray-500 hover:text-[#1d4ed8] underline-offset-4 hover:underline transition-colors"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button type="submit"
                        class="group inline-flex items-center gap-2 bg-[#1d4ed8] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#1e3a8a] transition-all duration-300 shadow-lg shadow-blue-700/25 hover:shadow-xl hover:-translate-y-0.5">
                    {{ __('Register') }}
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
