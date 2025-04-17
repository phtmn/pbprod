 <!-- Sidebar (offcanvas on sreens < 992px)-->
 <aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
    <div class="position-lg-sticky top-0">
      <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
      <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
        <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
        <div class="offcanvas-body">
 
          <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
            <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">
              <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
                <input class="form-check-input" type="checkbox" id="theme-mode">
                <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
                <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
              </div>
            </h4>
            <hr>
 
            <a class="{{ (\Request::route()->getName() == 'dashboard.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('dashboard.index')}}">
              <i class="ai-dashboard fs-5 opacity-60 me-2"></i>{{ __('Dashboard') }}
            </a>
            <a class="{{ (\Request::route()->getName() == 'offerSA.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('offerSA.index')}}">
              <i class="ai-dollar fs-5 opacity-60 me-2"></i>{{ __('Ofertas') }}
            </a>
           <a class="{{ (\Request::route()->getName() == 'profile.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('userAI.profile.edit')}}">
              <i class="ai-user fs-5 opacity-60 me-2"></i>{{ __('Perfil') }}
            </a>
            
            {{--   <a class=" {{ (\Request::route()->getName() == 'members.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                   {{ (\Request::route()->getName() == 'members.create') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                   {{ (\Request::route()->getName() == 'members.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('members.index') }}">
              <i class="ai-user-plus fs-5 opacity-60 me-2"></i>Indicações
            </a>
            <a class="nav-link fw-semibold py-2 px-0 " href="#">
              <i class="ai-messages  fs-5 opacity-60 me-2"></i>Chat
            </a>
            <a class="nav-link fw-semibold py-2 px-0 " href="#">
              <i class="ai-star fs-5 opacity-60 me-2"></i>Favoritos
            </a>
            <a class="nav-link fw-semibold py-2 px-0 " href="#">
              <i class="ai-wallet fs-5 opacity-60 me-2"></i>Trock in
            </a> 
            <a class=" {{ (\Request::route()->getName() == 'goods.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                   {{ (\Request::route()->getName() == 'goods.create') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                   {{ (\Request::route()->getName() == 'goods.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('goods.index') }}">
              <i class="ai-dollar fs-5 opacity-60 me-2"></i>Bens
            </a>
            <a class=" {{ (\Request::route()->getName() == 'services.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                   {{ (\Request::route()->getName() == 'services.create') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                   {{ (\Request::route()->getName() == 'services.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('services.index') }}">
              <i class="ai-gift fs-5 opacity-60 me-2"></i>Ofertas
            </a>
          
            <a class=" {{ (\Request::route()->getName() == 'favorite.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('favorite.index') }}">
              <i class="ai-star fs-5 opacity-60 me-2"></i>Favoritos
            </a>
          <a class="nav-link fw-semibold py-2 px-0 " href="#">
              <i class="ai-map-pin fs-5 opacity-60 me-2"></i>PEVs & Coletores
            </a>--}}
 
          </nav>
        </div>
      </div>
    </div>
  </aside>