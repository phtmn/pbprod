 <!-- Sidebar (offcanvas on sreens < 992px)-->
 <aside class=" col-lg-3 pe-lg-4 pe-xl-5 mt-n2">
     <div class="position-lg-sticky top-0">
         <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
         <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
         <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none  " type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
 
         <div class="offcanvas-body mt-1">
                 <nav class=" nav flex-column pb-2 pb-lg-4 mb-3">
                    
                 <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
    @forelse($sidebar as $d)
    <div class="accordion accordion-alt" id="accordionAlternative">
        <!-- Item -->
        <div class="accordion-item">
            <div class="accordion-header" id="headingOne">
                <button class="accordion-button drop text-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#{{ $d->id }}" aria-expanded="true" aria-controls="collapseOne">
                    <H6> <i class="ai-tag fs-5 opacity-60 me-2"></i>Tags</H6>
                </button>
            </div>
            <div class="accordion-collapse collapse" id="{{ $d->id }}" aria-labelledby="headingOne"
                data-bs-parent="#accordionAlternative">
                <div class="accordion-body fs-sm">
                    @forelse ($tags as $tag)
                    @if ($tag->id)
                    <a class="nav-link fw-semibold py-2 px-0"
                        href="{{ route('tags.show', $tag->id) }}">
                       
                        {{ $tag->name }}
                    </a>
                    @endif
                    @empty
                    <p class="text-dark"><b>Nenhuma Tag </b> <a class="me-3 me-sm-4 "
                            type="button" href="{{ route('tags.create') }}"><i
                                class="ai-square-plus text-dark "></i> </a></p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @empty
    <a class="{{ \Request::route()->getName() == 'tags.index' ? 'nav-link fw-semibold py-2 px-0 active text-dark' : 'nav-link fw-semibold py-2 px-0' }}"
        href="{{ route('tags.index') }}">
        <i class="ai-tag fs-5 opacity-60 me-2"></i>{{ __('Tags') }}
    </a>
    <p class="text-warning">Nenhuma Tag <a class=" me-3 me-sm-4 " type="button"
            href="{{ route('tags.create') }}"><i
                class="ai-square-plus text-warning "></i> </a></p>
    @endforelse
</nav>

                 
             </div>
         </div>
     </div>
 </aside>
 <script>
     let botao = [...document.querySelectorAll('.drop')];
     window.addEventListener('load', function() {
         botao.map(e => {
             e.addEventListener('click', function() {
                 if (!e.classList.contains('collapsed')) {
                     e.classList.add('collapsed');
                     e.parentNode.parentNode.children[1].classList.add('show');
                 } else {
                     e.classList.remove('collapsed');
                     e.parentNode.parentNode.children[1].classList.remove('show');
                 }
             })
         })
     })
 </script>
