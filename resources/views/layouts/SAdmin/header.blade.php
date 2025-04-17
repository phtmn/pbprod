<header class="navbar navbar-expand-lg fixed-top">
    <div class="container"><a class="navbar-brand pe-sm-3" ><span class="text-primary flex-shrink-0 me-1">
                <img class="d-block  mb-2 rounded-circle" src="{{ asset('assets/img/roree-removebg-preview.png') }}" width="75"></span>ROREE Admin</a>

        <div class="form-check form-switch mode-switch order-lg-2 me-2 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode"> </label>
            <label class="form-check-label" for="theme-mode"> </label>
        </div>


        {{-- <div class="dropdown nav d-none d-sm-block order-lg-3">
            <a class="nav-link d-flex align-items-center p-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ai-menu fs-lg opacity-70 me-2 "></i>
            </a>

            <div class="dropdown-menu dropdown-menu-end my-1">
                <a class="dropdown-item {{ (\Request::route()->getName() == 'profile.edit') ? 'nav-link active' : 'nav-link' }}" href="{{ route('profile.edit')}}"> <i class="ai-user fs-lg opacity-70 me-2"></i>{{ __('Perfil') }}</a>
        <a class="dropdown-item {{ (\Request::route()->getName() == 'users.index') ? 'nav-link active' : 'nav-link' }}" href="{{ route('users.index')}}"> <i class="ai-user-group fs-lg opacity-70 me-2"></i>{{ __('Usuários') }}</a>

        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                <i class="ai-logout fs-lg opacity-70 me-2"></i>
                Sair
            </a>
        </form>
    </div>
    </div>

    <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
    <nav class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav navbar-nav-scroll me-auto " style="--ar-scroll-height: 520px;">
            <li class="nav-item"><a href="{{ route('search.index')}}" class="{{ (\Request::route()->getName() == 'search.index') ? 'nav-link active' : 'nav-link' }} ">Pesquisar</a></li>
            <li class="nav-item"><a href="{{ route('prompts.index')}}" class="{{ (\Request::route()->getName() == 'prompts.index') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'prompts.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'prompts.edit') ? 'nav-link active' : 'nav-link' }}">Prompts</a></li>
            <li class="nav-item"><a href="{{ route('tags.index')}}" class="{{ (\Request::route()->getName() == 'tags.index') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'tags.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'tags.edit') ? 'nav-link active' : 'nav-link' }}">Tags</a></li>
            <li class="nav-item"><a href="{{ route('prompt-spaces.index')}}" class="{{ (\Request::route()->getName() == 'prompt-spaces.index') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'prompt-spaces.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'prompt-spaces.edit') ? 'nav-link active' : 'nav-link' }}">Prompt Spaces</a></li>
            <!-- User signed in state. Account dropdown on screens > 576px-->
            <li class="nav-item dropdown d-sm-none border-top mt-2 pt-2">
                <a class="dropdown-item {{ (\Request::route()->getName() == 'profile.edit') ? 'nav-link active' : 'nav-link' }}" href="{{ route('profile.edit')}}"> <i class="ai-user fs-lg opacity-70 me-2"></i>{{ __('Perfil') }}</a>
                <a class="dropdown-item {{ (\Request::route()->getName() == 'users.index') ? 'nav-link active' : 'nav-link' }}" href="{{ route('users.index')}}"> <i class="ai-user-group fs-lg opacity-70 me-2"></i>{{ __('Usuários') }}</a>
            <li class="nav-item dropdown d-sm-none border-top mt-2 pt-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link fw-semibold py-2 px-0" href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="ai-logout fs-lg opacity-70 me-2"></i>Sair
                    </a>
                </form>
            </li>
        </ul>
    </nav>
    --}}
    </div>
</header>