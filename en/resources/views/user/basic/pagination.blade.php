@if ($paginator->hasPages())
    <div class="page">
        @if (!$paginator->onFirstPage())
            @php
                $prevPage = $paginator->currentPage() - 1;
                $prevPageUrlParam = [];
                if (isset($q) && $q !== '') {
                    $prevPageUrlParam['q'] = $q;
                }
                if ($prevPage !== 1) {
                    $prevPageUrlParam['page'] = $prevPage;
                }
            @endphp
            <a href="{{ route($routeName, $prevPageUrlParam) }}" class="navi-paging left"><img src="{{ asset('assets/img/arrowleft.png') }}"></a>
        @endif

        <p class="pagenumber">{{ $paginator->currentPage() }}</p>

        @if ($paginator->hasMorePages())
                @php
                    $nextPage = $paginator->currentPage() + 1;
                    $nextPageUrlParam = [];
                    if (isset($q) && $q !== '') {
                        $nextPageUrlParam['q'] = $q;
                    }
                    if ($nextPage !== 1) {
                        $nextPageUrlParam['page'] = $nextPage;
                    }
                @endphp
            <a href="{{ route($routeName, $nextPageUrlParam) }}" class="navi-paging right"><img src="{{ asset('assets/img/arrowright.png') }}"></a>
        @endif
    </div>
@endif
