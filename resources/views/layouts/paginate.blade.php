
@if ($paginator->hasPages()>0)
    <ul class="nav">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled nav-item">
                <a href="#">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        @endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="nav-item disabled"><span class="nav-link">{{ $element }}</span></li>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active nav-item nav-active"><span class="nav-link">{{ $page }}</span></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="nav-item" ><a  href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i></a></li>
        @else
            <li class="disabled">
                <a   href="#" class="disabled">
                    <i class="fa fa-angle-right disabled"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
