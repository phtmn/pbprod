@extends('layouts.userAI.app')

@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0"> 

    <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
      <div class="d-sm-flex align-items-center mb-4">
      </div>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <section class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                          {{--  <div class="dropdown">
                                <a id="img" class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position flex-shrink-0" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100px; height: 100px; background-image: url( @if (isset($user->image)) {{ asset('assets/img/userAI-image') }}/{{ $user->image }}@else {{ asset('assets/img/user.png') }} @endif );">
                                    <span class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)">
                                        <i class="ai-camera"></i></span>
                                </a>
                                <div class="dropdown-menu my-1">
                                    <a class="dropdown-item fw-normal" href="#">
                                        <input onchange="previewImagem()" type="file" id="image" name="image" value="{{ asset('assets/img/userAI-image') }}/{{ $user->image }}">
                                      
                                    </a>                                   
                                </div>
                            </div>--}}

                            <div class="ps-3">
                                <div class="text-muted fw-medium d-flex flex-wrap flex-sm-nowrap align-iteems-center">
                                    <div class="d-flex align-items-center me-3"><i class="ai-mail me-1"></i>{{ $user->email }} </div>
                                    {{-- <div class="d-flex align-items-center text-nowrap"><i class="ai-map-pin me-1"></i>USA, $</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                            <div class="col-sm-6">
                                <label class="form-label" for="fn">Nome</label>
                                <input class="form-control" name="name" type="text" value="{{ $user->name }}" id="fn">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="fn">WhatsApp</label>
                                <input class="form-control" name="whatsapp" type="text" value="{{ $user->whatsapp }}" id="whatsapp">
                            </div>

                            <div class="col-sm-3">
                                <label class="form-label" for="fn">Data de Criação</label>
                                <input class="form-control" name="datatime" type="text"value="{{ isset($user->created_at) ? $user->created_at->format('d/m/Y') : '' }}"  readonly>
                            </div>

                            <div class="col-sm-12">
                                <label class="form-label" for="titulo">Bio</label>
                                <textarea class="form-control" name="bio" id="bio" cols="30" rows="10" style="height: 50px;">{{ $user->bio }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end pt-3">
                            <button class="btn btn-sm btn-outline-primary ms-3" type="submit"><i class="ai-check  ms-n1"></i>
                            </button>
                        </div>
                    </div>
                </section>
            </form>
        </div>
 
    </div>
</div>

 


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

<script>
    $(document).ready(function () {
        $('#whatsapp').inputmask('(99) 99999-9999'); // Define a máscara
    });

    function previewImagem() {
        let imagem = document.getElementById('image').files[0];
        let preview = document.getElementById('img');

        let reader = new FileReader();

        reader.onloadend = function() {
            preview.style.backgroundImage = `url(${reader.result})`;
        }

        if (imagem) {
            reader.readAsDataURL(imagem);
        } else {
            preview.src = "";
        }
    }
</script>
@endsection