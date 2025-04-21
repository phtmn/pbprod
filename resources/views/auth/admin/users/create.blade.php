@extends('layouts.Admin.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        @include('layouts.Admin.sidebar')
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
            <section class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                <div class="card-body">
                    <form method="post" action="{{ route('users.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label class="form-label" for="name">Nome Completo</label>
                                <input class="form-control" name="name" type="text" id="name">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="fn">WhatsApp</label>
                                <input class="form-control" name="whatsapp" type="text" id="whatsapp">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="fn">Matrícula</label>
                                <input class="form-control" name="registration" type="text" id="registration">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label class="form-label" for="email">E-mail</label>
                                <input class="form-control" type="email" id="email" name="email">
                            </div>
                            <div class="col-sm-2">
                                <label class="form-label" for="email">Perfil</label>
                                <select class="form-select select" name="profile" id="profile">
                                    <option value="userAI">userAI</option>
                                    <option value="Admin">Administrador</option>
                                    <option value="Colaborador">Colaborador</option>
                                    {{-- <option value="Admin">Gerente</option> --}}
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="email">Gerência</label>
                                <select class="form-select select" name="management" id="management">
                                    <option value="userAI">aa</option>
                                    <option value="SAdmin">bb</option>
                                    <option value="SAdmin">bb</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="password">Senha <span class="text-danger">*</span></label>                                
                                <input class="form-control" type="password" id="password" name="password" requerid>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end pt-3">
                            <a href="{{ route('users.index') }}" class="btn btn-secondary" aria-label="Voltar">
                                <i class="ai-undo " aria-hidden="true"></i>
                            </a>
                            <button type="submit" class="btn btn-primary ms-2" aria-label="Salvar">
                                <i class="ai-check  " aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
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