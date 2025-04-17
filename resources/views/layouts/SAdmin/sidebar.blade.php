 <!-- Sidebar (offcanvas on sreens < 992px)-->
 <aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
   <div class="position-lg-sticky top-0">
     <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
     <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
       <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
       <div class="offcanvas-body">

         <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
         <a class="{{ (\Request::route()->getName() == 'profileSA.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('profileSA.edit')}}">
             <i class="ai-user fs-5 opacity-60 me-2"></i>{{ __('Perfil') }}
           </a>

           <a class="{{ (\Request::route()->getName() == 'users.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                  {{ (\Request::route()->getName() == 'users.create') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                  {{ (\Request::route()->getName() == 'users.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('users.index') }}">
             <i class="ai-user-group fs-5 opacity-60 me-2"></i>{{ __('Gerências') }}
           </a>

           
           <a class="{{ (\Request::route()->getName() == 'users.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                  {{ (\Request::route()->getName() == 'users.create') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                  {{ (\Request::route()->getName() == 'users.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('users.index') }}">
             <i class="ai-user-group fs-5 opacity-60 me-2"></i>{{ __('Usuários') }}
           </a>

           <a class="{{ (\Request::route()->getName() == 'users.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                  {{ (\Request::route()->getName() == 'users.create') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                  {{ (\Request::route()->getName() == 'users.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('users.index') }}">
             <i class="ai-user-group fs-5 opacity-60 me-2"></i>{{ __('Ações') }}
           </a>

          
          
           
           <a class="{{ (\Request::route()->getName() == 'tools.index') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                  {{ (\Request::route()->getName() == 'tools.create') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}
                  {{ (\Request::route()->getName() == 'tools.edit') ? 'nav-link fw-semibold py-2 px-0 active' : 'nav-link fw-semibold py-2 px-0' }}" href="{{ route('tools.index') }}">
             <i class="ai-tool fs-5 opacity-60 me-2"></i>{{ __('Ferramentas') }}
           </a>

           <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link fw-semibold py-2 px-0" href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="ai-logout fs-lg opacity-70 me-2"></i>Sair
                    </a>
           </form>
         </nav>
       </div>
     </div>
   </div>
 </aside>
