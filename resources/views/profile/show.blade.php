<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-orange-50/30 to-blue-50/40 py-16 px-4 relative overflow-hidden">
        {{-- Decorative shapes --}}
        <div class="absolute top-20 right-0 w-72 h-72 bg-orange-400/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-700/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-2xl mx-auto relative z-10">
            {{-- Back link --}}
            <a href="{{ route('artworks.index') }}" class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-blue-700 transition-colors mb-8 group">
                <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
                Back to gallery
            </a>

            {{-- Flash messages --}}
            @if (session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm font-medium">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Profile card --}}
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-1 bg-gradient-to-r from-blue-700 to-orange-400 rounded-full"></div>
                    <span class="text-orange-500 text-sm font-semibold tracking-widest uppercase">Profile</span>
                </div>

                <h1 class="text-3xl font-bold text-slate-900 mb-8" style="font-family:'DM Serif Display',serif;">
                    My Account
                </h1>

                {{-- Info sections --}}
                <div class="space-y-6">

                    {{-- Name --}}
                    <div class="pb-6 border-b border-slate-200">
                        <p class="text-slate-500 text-sm font-semibold uppercase tracking-wide mb-2">Name</p>
                        <p class="text-lg text-slate-900 font-medium">{{ $user->name }}</p>
                    </div>

                    {{-- Email --}}
                    <div class="pb-6 border-b border-slate-200">
                        <p class="text-slate-500 text-sm font-semibold uppercase tracking-wide mb-2">Email</p>
                        <p class="text-lg text-slate-900 font-medium">{{ $user->email }}</p>

                        @if ($user->email_verified_at)
                            <p class="text-sm text-green-600 mt-1">✓ Verified</p>
                        @else
                            <p class="text-sm text-orange-600 mt-1">⚠ Unverified</p>
                        @endif
                    </div>

                    {{-- Member since --}}
                    <div>
                        <p class="text-slate-500 text-sm font-semibold uppercase tracking-wide mb-2">Member Since</p>
                        <p class="text-lg text-slate-900 font-medium">{{ $user->created_at->format('M d, Y') }}</p>
                    </div>
                </div>

                {{-- Action buttons --}}
                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('profile.edit') }}" class="flex-1 inline-flex items-center justify-center gap-2 bg-blue-700 text-white font-semibold px-6 py-3 rounded-full hover:bg-blue-800 transition-all duration-300 shadow-lg shadow-blue-700/25 hover:shadow-xl hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Edit Profile
                    </a>

                    <a href="{{ route('profile.edit-password') }}" class="flex-1 inline-flex items-center justify-center gap-2 bg-slate-200 text-slate-700 font-semibold px-6 py-3 rounded-full hover:bg-slate-300 transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.97 5.933M15 7a2 2 0 00-2-2m4 0a6 6 0 00-7.97 5.933m7.97-3.933a4 4 0 11-8 0m8 0H7m4 0a4 4 0 01-4 4m0-8a2 2 0 10-4 0 2 2 0 004 0z"/>
                        </svg>
                        Change Password
                    </a>
                </div>

                {{-- Delete account button --}}
                <div class="mt-8 pt-8 border-t border-slate-200">
                    <form action="{{ route('profile.destroy') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This cannot be undone.');">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="w-full px-6 py-3 bg-red-50 text-red-600 font-semibold rounded-full hover:bg-red-100 transition-all duration-300 border border-red-200">
                            Delete Account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>