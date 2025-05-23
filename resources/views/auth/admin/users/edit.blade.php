@extends('layouts.Admin.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">
            <!-- Sidebar (offcanvas on sreens < 992px)-->

            @include('layouts.Admin.sidebar')
            <!-- Page content-->

            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                

                <form method="post" action="{{ route('users.update', $user->id) }}" class="mt-6 space-y-6"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                    <label class="form-label" for="fn">WhatsApp</label>
                                    <input class="form-control" name="whatsapp" type="text" id="whatsapp" value="{{ $user->whatsapp}}">
                                </div>                                                            
                            </div>
                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                <div class="col-sm-6">
                                    <label class="form-label" for="email">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="email" value="{{ $user->email}}">
                                </div>                                  
                                <div class="col-sm-6">
                                    <label class="form-label" for="email">Tipo de usuário</label>
                                    <select class="form-select select" name="usertype" id="usertype">
                                        <option @if($user->usertype == "userAI") selected @endif value="userAI">userAI</option>
                                        <option @if($user->usertype == "SAdmin") selected @endif value="SAdmin">SAdmin</option>
                                    </select>
                                </div>    
                                <div class="col-sm-6">
                                    <label class="form-label" for="titulo">Data de Criação</label>
                                    <input class="form-control" type="datetime" name="created_at" value="{{ isset($user->created_at) ? $user->created_at->format('d/m/Y') : '' }}" >
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="password">Senha</label>
                                    <input class="form-control" type="password" id="password" name="password" value="{{ $user->password}}" readonly>
                                </div> 
                                <div class="col-sm-12">
                                    <label class="form-label" for="titulo">Bio</label>
                                    <textarea class="form-control" name="bio" id="bio" cols="30" rows="10" style="height: 50px;">{{ $user->bio }}</textarea>
                                </div>
                            </div>  
                            
                            <div class="col-12 d-flex justify-content-end pt-3">
                                <a class="btn btn-secondary bg text-dark" type="button" href="{{ route('users.index') }}">
                                    <i class="ai-undo ms-n1"></i>                                    
                                </a>
                                <button class="btn btn-sm btn-outline-primary ms-2" type="submit"><i class="ai-check ms-n1"></i>
                                </button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
@endsection
