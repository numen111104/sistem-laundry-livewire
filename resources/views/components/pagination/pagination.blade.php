@php
$linksOnEachSlide     = 5; // Angka Harus Ganjil
$halfLinksOnEachSlide = ($linksOnEachSlide - 1) / 2;
$startPage            = max($paginator->currentPage() - $halfLinksOnEachSlide, 1);
$endPage              = min($paginator->currentPage() + $halfLinksOnEachSlide, $paginator->lastPage());

if ($endPage - $startPage + 1 < $linksOnEachSlide) {
    $endPage = min($startPage + $linksOnEachSlide - 1, $paginator->lastPage());
    $startPage = max($endPage - $linksOnEachSlide + 1, 1);
}

$items = [];
if ($startPage > 1) {
    $items[] = [1];
    if ($startPage > 2) {
        $items[] = "...";
    }
}
$items[] = range($startPage, $endPage);
if ($endPage < $paginator->lastPage() - 1) {
    $items[] = "...";
}
if ($endPage < $paginator->lastPage()) {
    $items[] = [$paginator->lastPage()];
}
@endphp

<div>
    @if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- START : Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <button type="button" class="page-link" rel="prev" aria-label="@lang('pagination.previous')"
                        wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled"
                        dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" 
                    >
                        &lsaquo;
                    </button>
                </li>
            @endif
            {{-- END : Previous Page Link --}}

            {{-- START : Pagination Items --}}
            @foreach ($items as $item)
                {{-- START : "Three Dots" Separator  --}}
                @if (is_string($item))
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">{{ $item }}</span>
                    </li>
                @endif
                {{-- END : "Three Dots" Separator  --}}

                {{-- START : Array of Links --}}
                @if (is_array($item))
                    @foreach ($item as $page)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}">
                                <span class="page-link" >{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item" wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}">
                                <button type="button" class="page-link" wire:loading.attr="disabled"
                                    wire:click="gotoPage('{{ $page }}', '{{ $paginator->getPageName() }}')"
                                >
                                    {{ $page }}
                                </button>
                            </li>
                        @endif
                    @endforeach
                @endif
                {{-- END : Array of Links --}}
            @endforeach
            {{-- END : Pagination Items --}}

            {{-- START : Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <button type="button" class="page-link" rel="next" aria-label="@lang('pagination.next')"
                        wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" 
                        dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                    >
                        &rsaquo;
                    </button>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
            {{-- END : Next Page Link --}}
        </ul>
    </nav>
    @endif
</div>