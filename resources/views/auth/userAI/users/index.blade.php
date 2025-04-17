@extends('layouts.userAI.app')
@section('content')



    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">
            <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
                <div class="d-sm-flex align-items-center mb-4">

                </div>


                @foreach($users as $user)



                    <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mt-4">

                        <div class="card-body">
                            <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                                <div class="col-md-4 col-lg-6 offset-lg-1 mb-3 mb-md-0">



                                    <!-- Binded items-->
                                    <div class="binded-content">
                                        <!-- Item-->
                                        <div class="binded-item active" id="author1">
                                            <a id="img"
                                                class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position flex-shrink-0"
                                                href="#" data-bs-toggle="dropdown" aria-expanded="false"
                                                style="width: 100px; height: 100px; background-image: url( @if (isset($user->image)) {{ asset('assets/img/userAI-image') }}/{{ $user->image }}@else {{ asset('assets/img/user.png') }} @endif );">

                                            </a>
                                            <h4 class="mb-0"><a href="{{route('show.index', $user->id)}}">{{ $user->name }}</a></h4>

                                        </div>
                                    </div>
                                </div>




                                <div class="col-md-8 col-lg-4">
                            <div>
                                <!-- Vertical tabs -->
                                <ul class="nav nav-tabs flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link " href="#prompts" data-bs-toggle="tab" role="tab">
                                            <i class="ai-terminal me-2"> </i>
                                            Prompts {{ $user->prompts->count() }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tags" data-bs-toggle="tab" role="tab">
                                            <i class="ai-terminal me-2"></i>
                                            Tags {{ $user->tags->count() }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#promptspaces" data-bs-toggle="tab" role="tab">
                                            <i class="ai-folder me-2"></i>
                                            Prompt Spaces {{ $user->promptspaces->count() }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#feeds" data-bs-toggle="tab" role="tab">
                                            <i class="ai-folder me-2"></i>
                                            Feeds {{ $user->feeds->count() }}
                                        </a>
                                    </li>
                                    <li class="nav-item">




                                    </li>

                                </ul>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- component sidebar --}}
    <x-sidebar />
        </div>
    </div>

    @include('layouts.around.footer')

@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
    let tabLinks = document.querySelectorAll('.tab-link');

    tabLinks.forEach(tabLink => {
        tabLink.addEventListener('click', () => {
            // Remover a classe 'active' de todas as abas
            tabLinks.forEach(link => {
                link.classList.remove('active');
            });

            // Adicionar a classe 'active' à aba clicada
            tabLink.classList.add('active');

            // Ocultar o conteúdo de todas as abas
            let tabContents = document.querySelectorAll('.nav-item > div');
            tabContents.forEach(content => {
                content.classList.add('d-none');
            });

            // Mostrar o conteúdo da aba clicada
            let tabContent = tabLink.nextElementSibling;
            tabContent.classList.remove('d-none');
        });
    });
});

</script>
