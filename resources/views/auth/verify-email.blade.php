<x-guest-layout>
    <div class="relative">
        <svg class="absolute -top-12 -right-8 w-32 h-32 text-[#1d4ed8]/10 -z-10" viewBox="0 0 100 100" fill="currentColor">
            <circle cx="80" cy="20" r="30"/><circle cx="95" cy="5" r="12"/><circle cx="65" cy="8" r="8"/>
        </svg>

        <h1 class="font-display text-3xl md:text-4xl text-gray-900 mb-2">
            One more thing<span class="text-[#f97316]">.</span>
        </h1>
        <div class="mb-4 text-sm text-gray-500 leading-relaxed">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-[#1d4ed8] bg-blue-50 border border-blue-100 rounded-xl px-4 py-3">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-6 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit"
                        class="group inline-flex items-center gap-2 bg-[#1d4ed8] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#1e3a8a] transition-all duration-300 shadow-lg shadow-blue-700/25 hover:shadow-xl hover:-translate-y-0.5">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-gray-500 hover:text-[#1d4ed8] underline-offset-4 hover:underline transition-colors">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
