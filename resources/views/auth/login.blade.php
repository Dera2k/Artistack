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

            {{-- Demo account button --}}
            <div class="mt-8">
                <form method="POST" action="{{ route('demo.login') }}">
                    @csrf
                    <button type="submit"
                            class="w-full group relative inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#f97316] via-[#1d4ed8] to-[#f97316] text-white font-semibold px-6 py-3 rounded-full hover:scale-105 hover:shadow-xl hover:shadow-orange-400/30 transition-all duration-300 border-2 border-transparent hover:border-[#fff7ed]/50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2 12c0-4.714 2.796-8.798 6.858-9.992C10.364 1.539 11.864 1 12 1s1.636.539 2.142 1.008c4.061 1.194 6.858 5.277 6.858 9.992C22 17.552 19.552 20 17 20s-5-2.448-5-5.001C7 15.448 4.552 18 2 18s-5-2.448-5-5zM12 2a10 10 0 00-4.782 11.495c-.478-.28-1-.32-1.218-.09a10 10 0 00-3.992 2.162c-.475.274-.541.82-.153 1.247c.388.427 1.153.429 1.539 0c.19-.21.237-.772.153-1.247a10 10 0 003.992-2.162c.219-.23.74-.19 1.218.09A10 10 0 0012 2z"/>
                        </svg>
                        Try Demo Account
                    </button>
                </form>
                <p class="mt-2 text-xs text-gray-400 text-center">
                    Email: <span class="font-medium text-gray-600">demo@artistack.com</span> &bull; Password: <span class="font-medium text-gray-600">password</span>
                </p>
            </div>
        </div>
</x-guest-layout>