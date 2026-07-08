<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-orange-50/30 to-blue-50/40 py-16 px-4 relative overflow-hidden">
        {{-- Decorative shapes --}}
        <div class="absolute top-20 right-0 w-72 h-72 bg-orange-400/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-700/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-2xl mx-auto relative z-10">
            {{-- Back link --}}
            <a href="{{ route('profile.show') }}" class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-blue-700 transition-colors mb-8 group">
                <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
                Back to profile
            </a>

            {{-- Password form --}}
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-1 bg-gradient-to-r from-blue-700 to-orange-400 rounded-full"></div>
                    <span class="text-orange-500 text-sm font-semibold tracking-widest uppercase">Security</span>
                </div>

                <h1 class="text-3xl font-bold text-slate-900 mb-8" style="font-family:'DM Serif Display',serif;">
                    Change Password
                </h1>

                {{-- Validation errors --}}
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                        <p class="text-red-700 font-semibold text-sm mb-2">Errors:</p>
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-600 text-sm">• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('profile.update-password') }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    {{-- Current password --}}
                    <div>
                        <label for="current_password" class="block text-sm font-semibold text-slate-700 mb-2">Current Password</label>
                        <input
                            type="password"
                            name="current_password"
                            id="current_password"
                            required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-700 focus:ring-2 focus:ring-blue-700/20 focus:outline-none transition-all duration-300"
                        >
                        @error('current_password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- New password --}}
                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">New Password</label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-700 focus:ring-2 focus:ring-blue-700/20 focus:outline-none transition-all duration-300"
                        >
                        <p class="text-slate-500 text-xs mt-1">
                            At least 8 characters, with uppercase, lowercase, number, and special character
                        </p>
                        @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Confirm password --}}
                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-slate-700 mb-2">Confirm Password</label>
                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-700 focus:ring-2 focus:ring-blue-700/20 focus:outline-none transition-all duration-300"
                        >
                    </div>

                    {{-- Buttons --}}
                    <div class="flex gap-4 pt-6">
                        <button type="submit" class="flex-1 bg-blue-700 text-white font-semibold px-6 py-3 rounded-full hover:bg-blue-800 transition-all duration-300 shadow-lg shadow-blue-700/25 hover:shadow-xl hover:-translate-y-0.5">
                            Update Password
                        </button>

                        <a href="{{ route('profile.show') }}" class="flex-1 text-center bg-slate-200 text-slate-700 font-semibold px-6 py-3 rounded-full hover:bg-slate-300 transition-all duration-300">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>