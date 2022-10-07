@if ($paginator->hasPages())
    <nav>
        <ul class="py-12 flex justify-center mx-auto pagination justify-content-center pagination-lg">
            {{-- Previous Page Link --}}@cannot('update', Model::class)

            @endcannot
            @if ($paginator->onFirstPage())
                <li class="page-item disabled rounded border-2 border-solid px-2" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&laquo;</span>
                </li>
            @else
                <li class="page-item rounded border-2 border-solid px-2">
                    <a class="page-link text-success" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active rounded border-2 border-menu_logo_color border-solid text-menu_logo_color px-2" aria-current="page"><span class="page-link bg-success border-success">{{ $page }}</span></li>
                        @else
                            <li class="rounded border-2 border-solid px-2 page-item"><a class="page-link text-success" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item rounded border-2 border-solid px-2">
                    <a class="page-link text-success" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled rounded border-2 border-solid px-2" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
