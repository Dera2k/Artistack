<x-guest-layout>
    <div class="relative">
        <svg class="absolute -top-12 -right-8 w-32 h-32 text-[#f97316]/15 -z-10" viewBox="0 0 100 100" fill="currentColor">
            <circle cx="80" cy="20" r="30"/><circle cx="95" cy="5" r="12"/><circle cx="65" cy="8" r="8"/>
        </svg>

        <div class="inline-flex items-center gap-2 bg-[#fff7ed] border border-[#fed7aa] text-[#f97316] text-xs font-medium px-3 py-1 rounded-full mb-4">
            Welcome back
        </div>
        <h1 class="font-display text-3xl md:text-4xl text-gray-900 mb-6">
            Log into your <span class="relative inline-block text-[#1d4ed8]">
                gallery
                <svg class="absolute -bottom-1 left-0 w-full h-3 text-[#f97316]/40" viewBox="0 0 200 12" fill="none" preserveAspectRatio="none">
                    <path d="M2 8c30-6 60-2 100-4s70 2 96-2" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </span><span class="text-[#f97316]">.</span>
        </h1>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full rounded-xl border-gray-200 focus:border-[#1d4ed8] focus:ring-[#1d4ed8]"
                              type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full rounded-xl border-gray-200 focus:border-[#1d4ed8] focus:ring-[#1d4ed8]"
                              type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-[#1d4ed8] shadow-sm focus:ring-[#1d4ed8]"
                           name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-500 hover:text-[#1d4ed8] underline-offset-4 hover:underline transition-colors"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit"
                        class="group inline-flex items-center gap-2 bg-[#1d4ed8] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#1e3a8a] transition-all duration-300 shadow-lg shadow-blue-700/25 hover:shadow-xl hover:-translate-y-0.5">
                    {{ __('Log in') }}
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>
            </div>
        </form>

        <div class="mt-6 text-center text-sm text-gray-500">
            {{ __("Don't have an account?") }}
            <a href="{{ route('register') }}"
               class="font-medium text-[#1d4ed8] hover:text-[#1e3a8a] underline-offset-4 hover:underline transition-colors">
                {{ __('Create one') }}
            </a>
        </div>
    </div>
</x-guest-layout>