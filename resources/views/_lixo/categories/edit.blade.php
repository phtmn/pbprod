@extends('layouts.around.app')
@section('content')

<!-- Page wrapper-->



<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

        @include('layouts.around.SAdmin.sidebar')
        <!-- Page content-->
        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">


                <!-- Basic info-->
                <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="{{route('offerSA.index')}}"><i class="ai-undo me-2 ms-n1"></i>Ofertas</a></h2>
                        </div>
                        <div class="d-flex align-items-center">

                        </div>
                        <form action="{{ route('offerSA.update', $offer->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="mb-3 container">
                                <label class="form-label" for="Imagem">Imagem</label>
                                <input onchange="previewImagem()" class="form-control" type="file" name="image" id="image" value="{{$offer->image}}">
                                <img style="width:100px; height:100px" id="img" src="{{ asset('assets/img/offer-image')}}/{{$offer->image}}">
                                <br>


                                <label class="form-label" for="titulo">Título</label>
                                <input class="form-control" type="text" name="title" id="title" value="{{ $offer->title }}">

                                <label class="form-label" for="description">Descrição</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>{{ $offer->description }}</textarea>
                                
                                <label class="form-label" for="description">Links</label>
                                <textarea class="form-control" name="links" id="links" cols="30" rows="10" required>{{ $offer->links }}</textarea>
                                
                                <label class="form-label" for="rules">Regulamento</label>
                                <textarea class="form-control" name="rules" id="rules" cols="30" rows="10" required>{{ $offer->rules }}</textarea>
                                
                                <label class="form-label" for="comission">Comissão</label>
                                <input class="form-control" type="text" name="comission" id="comission" value="{{ $offer->comission }}" required>

                                <label class="form-label" for="titulo">Cashback</label>
                                <input class="form-control" type="text" name="cashback" id="cashback" value="{{ $offer->cashback }}" required>
                                
                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-primary ms-3" type="submit"><i class="ai-check me-2 ms-n1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>


<script>
    function previewImagem() {
        let imagem = document.getElementById('image').files[0];
        let preview = document.getElementById('img');

        let reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (imagem) {
            reader.readAsDataURL(imagem);
        } else {
            preview.src = "";
        }
    }
</script>

@endsection