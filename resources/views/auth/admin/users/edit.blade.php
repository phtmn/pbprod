@extends('layouts.Admin.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        @include('layouts.Admin.sidebar')
        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <section class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                <div class="card-body">
                    <form method="post" action="{{ route('users.update', $user->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label class="form-label" for="name">Nome Completo</label>
                                <input class="form-control" name="name" type="text" value="{{ $user->name }}" id="name">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="fn">WhatsApp</label>
                                <input class="form-control" name="whatsapp" type="text" value="{{ $user->whatsapp }}" id="whatsapp">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="fn">Matrícula</label>
                                <input class="form-control" name="registration" type="text" value="{{ $user->registration }}" id="registration">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label class="form-label" for="email">E-mail</label>
                                <input class="form-control" type="email" id="email" value="{{ $user->email }}" name="email">
                            </div>
                            <div class="col-sm-2">
                                <label class="form-label" for="email">Perfil</label>
                                <select class="form-select select" name="usertype" id="usertype">
                                    <option value="">-</option>
                                    <option value="SAdmin" {{ $user->usertype == 'SAdmin' ? 'selected' : '' }}>Administrador</option>
                                    <option value="Colaborador" {{ $user->usertype == 'Colaborador' ? 'selected' : '' }}>Colaborador</option>
                                    <option value="Gerente" {{ $user->usertype == 'Gerente' ? 'selected' : '' }}>Gerente</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="email">Gerência</label>
                                <select class="form-select select" name="management" id="management">
                                    <option value="">-</option>
                                    @foreach ($managements as $management)
                                    <option value="{{ $management->id }}"
                                        {{ $user->management_id == $management->id ? 'selected' : '' }}>
                                        {{ $management->acronym }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="password">Senha <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" id="password" name="password" value="SEADF@123" required readonly>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end pt-3">
                            <a href="{{ route('users.index') }}" class="btn text-dark " aria-label="Voltar">
                                <i class="ai-undo " aria-hidden="true"></i>
                            </a>
                            <button class="btn text-dark ms-2" type="submit"><i class="ai-check ms-n1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection