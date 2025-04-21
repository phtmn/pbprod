@extends('layouts.SAdmin.app')

@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">
            <!-- Sidebar (offcanvas on sreens < 992px)-->

            @include('layouts.SAdmin.sidebar')
            <!-- Page content-->

            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                

                <form method="post" action="{{ route('profileSA.update') }}" class="mt-6 space-y-6"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <section class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">

                            <div class="d-flex align-items-center">
                             

                                <div class="ps-3">
                                    <h3 class="h6 mb-1"></h3>
                                    <p class="fs-sm text-muted mb-0"> </p>
                                </div>
                            </div>
                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                <div class="col-sm-6">
                                    <label class="form-label" for="fn">Nome</label>
                                    <input class="form-control" name="name" type="text" value="{{ $user->name }}"
                                        id="fn">
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label" for="email">E-mail</label>
                                    <input class="form-control" type="email" value="{{ $user->email }} " id="email"
                                        readonly>
                                </div>                              
                            </div>
                            <div class="col-12 d-flex justify-content-end pt-3">
                                <button class="btn btn-sm btn-outline-primary ms-2" type="submit"><i class="ai-check  ms-n1"></i>
                                </button>
                            </div>
                        </div>
            </div>
            </section>
            </form>


        </div>
    </div>
    </div>



    <script>
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
