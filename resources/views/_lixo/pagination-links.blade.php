@if($paginator->hasPages())
    <ul class="pagination pagination-rounded justify-content-center mt-4">
       {{-- previous page --}}
        @if($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link">Voltar</a>
            </li>
        @else
            <li class="page-item">
                <a href="javascript:;" wire:click="previousPage" class="page-link">Voltar</a>
            </li>
        @endif

        {{-- Pagination element --}}
        @foreach ($elements as $element)
            @if(is_string($element))
                <li class="page-item disabled">
                    <a class="page-link"><span>{{ $element }}</span></a>
                </li>
            @endif

            @if(is_array($element))
                @foreach($element as $page=>$url)
                    @if($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                            <a href="javascript:;" class="page-link" wire:click="gotoPage({{$page}})">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item">
                            <a href="javascript:;" class="page-link" wire:click="gotoPage({{$page}})">{{$page}}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Nex Page --}}
        @if($paginator->hasMorePages())
            <li class="page-item">
                <a href="javascript:;" class="page-link" wire:click="nextPage">Avançar</a>
            </li>
        @else 
            <li class="page-item disabled">
                <a href="javascript:;" class="page-link">Avançar</a>
            </li>
        @endif
    </ul>
@endif