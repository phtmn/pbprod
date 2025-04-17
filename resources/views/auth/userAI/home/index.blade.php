@extends('layouts.userAI.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
     

            <div class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4">
                <div class="card-body text-end">
             
                <h3 class="h5 mb-2">{{ $user->name }}  </h3>
   
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#prompts" data-bs-toggle="tab" role="tab">
                                <i class="ai-terminal me-2"> </i>
                                  {{ $prompts->count() }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tags" data-bs-toggle="tab" role="tab">
                                <i class="ai-tag me-2"></i>
                                  {{ $tags->count() }}
                            </a>
                        </li>
                        {{--      <li class="nav-item">
                            <a class="nav-link" href="#promptspaces" data-bs-toggle="tab" role="tab">
                                <i class="ai-folder me-2"></i>
                                  {{ $promptspaces->count() }}
                            </a>
                        </li> --}}

                    </ul>

                </div>
            </div>
            <div class="mt-3">

                <div class="tab-content ">
                    <div class="tab-pane fade show active" id="prompts" role="tabpanel">
                   
                        @foreach ($prompts as $prompt)
                        <div class="card border-3 mt-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $prompt->title }}</h5>
                                <div class="fs-sm" id="contentToCopy-{{ $prompt->id }}"> {{ $prompt->description }}</div>
                                <div class="fs-sm">
                              

                        <form id="favorite-prompt" action="{{ route('favorites.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" id="fav-user-input" value="{{ $user->id }}">
                            <input type="hidden" name="prompt_id" id="fav-prompt-input" value="{{ $prompt->id }}">
                            <button onclick="copyContent('contentToCopy-{{ $prompt->id }}', 'copyButton-{{ $prompt->id }}')" class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2" type="button" id="copyButton-{{ $prompt->id }}">
                                <i class="ai-copy me-2 ms-n1"></i>Copiar</button>
                            <button class="badge btn  btn-secondary mt-2" type="submit" id="prompt-fav-submit">
                                <i class="{{ Auth::user()->favPrompt->contains('prompt_id', $prompt->id) ? 'ai-star-filled' : 'ai-star' }} text-warning" id="star"></i> </button>
                         
                        </form>
                    </div>
                            </div>



                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="tags" role="tabpanel">
                        @foreach ($tags as $tag)
                        <div class="card border-3 mt-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $tag->name }}</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="promptspaces" role="tabpanel">
                        @foreach ($sidebar as $prompt_space)
                        <div class="card border-3 mt-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $prompt_space->name }}</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    {{-- <div class="tab-pane fade" id="favorites" role="tabpanel">
                    <p>favorites</p>
                </div> --}}

                </div>




            </div>

        </div>
        {{-- component sidebar --}}
        <x-sidebar />

    </div>
</div>

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

<script>
    setTimeout(function() {
        let alert = document.getElementById('alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 5000);
</script>
 



 