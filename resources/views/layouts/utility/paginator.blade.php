<div>
    @if ($paginator->hasPages())
        <div class="text-center w-full flex justify-between items-center" role="navigation" aria-label="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="inline-block text-grey hover:text-gray p-3" disabled>@lang('pagination.previous')</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="inline-block hover:bg-gradient-br-dark-grey hover:text-white p-3">
                    @lang('pagination.previous')
                </a>
            @endif

            <ul class="list-reset p-3 flex">
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li><span class="inline-block pagination-ellipsis">&hellip;</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li>
                                    <a class="inline-block bg-gradient-br-brand py-3 px-4 m-1 text-white hover:text-white shadow-sm"
                                       aria-label="Page {{ $page }}" aria-current="page">
                                        {{ $page }}
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a class="inline-block hover:bg-gradient-br-dark-grey hover:text-white py-3 px-4 m-1"
                                       href="{{ $url }}"
                                       aria-label="Goto page {{ $page }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>


            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="inline-block hover:bg-gradient-br-dark-grey hover:text-white p-3">
                    @lang('pagination.next')
                </a>
            @else
                <span class="inline-block text-grey hover:text-gray p-3" disabled>
                    @lang('pagination.next')
                </span>
            @endif
        </div>
    @endif
</div>
