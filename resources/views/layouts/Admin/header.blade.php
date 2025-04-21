<header class="navbar navbar-expand-lg fixed-top">
    <div class="container"><a class="navbar-brand pe-sm-3"><span class="text-primary flex-shrink-0 me-1">
                <img class="d-block  mb-2 " src="{{ asset('assets/img/SEAFDS.png') }}" width="325"></span> </a>

        <div class="dropdown nav d-none d-sm-block order-lg-3">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link d-flex align-items-center p-0" href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    <i class="ai-logout fs-lg opacity-70 me-2 "></i>
            </form>
            </a>
        </div>
        
    </div>
</header>
<img class="d-block  mb-2" src="https://ceasapb.ctlc.org.br/assets/img/aa.png" width="100%"> </span>  </a>