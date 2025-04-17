@extends('layouts.SAdmin.app')

@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">
            <!-- Sidebar (offcanvas on sreens < 992px)-->
            @include('layouts.SAdmin.sidebar')
            <!-- Page content-->

            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                <form method="post" action="{{ route('users.store') }}" class="mt-6 space-y-6"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')
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
                                    <input class="form-control" name="name" type="text"
                                        id="fn">
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label" for="fn">WhatsApp</label>
                                    <input class="form-control" name="whatsapp" type="text" id="whatsapp">
                                </div>                                                            
                            </div>
                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                <div class="col-sm-6">
                                    <label class="form-label" for="email">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="email">
                                </div>                                  
                                <div class="col-sm-6">
                                    <label class="form-label" for="email">Tipo de usuário</label>
                                    <select class="form-select select" name="usertype" id="usertype">
                                        <option value="userAI">userAI</option>
                                        <option value="SAdmin">SAdmin</option>
                                    </select>
                                </div>    
                                <div class="col-sm-6">
                                    <label class="form-label" for="titulo">Bio</label>
                                    <textarea class="form-control" name="bio" id="bio" cols="30" rows="10" style="height: 50px;"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="password">Senha</label>
                                    <input class="form-control" type="password" id="password" name="password">
                                </div> 
                            </div>  
                           
                            <div class="col-12 d-flex justify-content-end pt-3">
                            <a class="btn btn-secondary bg text-dark   " type="button"
                                    href="{{ route('users.index') }}">
                                    <i class="ai-undo   ms-n1"></i>
                                    
                                </a>
                                <button class="btn btn-sm btn-outline-primary ms-2" type="submit"><i class="ai-check   ms-n1"></i>
                                </button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
    <script>
         $(document).ready(function() {
         $('#whatsapp').mask('(00) 0 0000-0000');
         handleModalFys();
         });
         
    </script>
@endsection
