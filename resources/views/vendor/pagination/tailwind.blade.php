@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center mt-16 mb-8">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 w-full">
            
            {{-- Mobile: Previous/Next only --}}
            <div class="flex justify-between gap-3 sm:hidden w-full px-4">
                @if ($paginator->onFirstPage())
                    <span class="px-4 py-2 text-sm font-medium text-slate-300 bg-slate-100 rounded-full cursor-default">
                        ← Previous
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 rounded-full hover:border-blue-700 hover:bg-blue-50 transition-all duration-300">
                        ← Previous
                    </a>
                @endif

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 rounded-full hover:border-blue-700 hover:bg-blue-50 transition-all duration-300">
                        Next →
                    </a>
                @else
                    <span class="px-4 py-2 text-sm font-medium text-slate-300 bg-slate-100 rounded-full cursor-default">
                        Next →
                    </span>
                @endif
            </div>

            {{-- Desktop: Full pagination --}}
            <div class="hidden sm:flex items-center justify-center gap-3">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="px-3 py-2 text-slate-300 bg-slate-100 rounded-full cursor-default" aria-disabled="true">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-3 py-2 text-slate-600 bg-white border border-slate-200 rounded-full hover:border-slate-300 hover:bg-slate-50 transition-all duration-300" aria-label="{{ __('pagination.previous') }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                @endif

                {{-- Page Numbers --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="px-2 py-2 text-slate-400 text-sm">{{ $element }}</span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page" class="px-4 py-2 text-white bg-blue-700 rounded-full font-semibold shadow-md shadow-blue-700/20 cursor-default text-sm">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" class="px-4 py-2 text-slate-600 bg-white border border-slate-200 rounded-full hover:border-blue-400 hover:text-blue-700 hover:bg-blue-50 transition-all duration-300 font-medium text-sm" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-3 py-2 text-slate-600 bg-white border border-slate-200 rounded-full hover:border-slate-300 hover:bg-slate-50 transition-all duration-300" aria-label="{{ __('pagination.next') }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <span class="px-3 py-2 text-slate-300 bg-slate-100 rounded-full cursor-default" aria-disabled="true">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                @endif
            </div>
        </div>
    </nav>
@endif