@extends('layouts.Admin.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        @include('layouts.Admin.sidebar')
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">

            <section class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4 ">
                <div class="card-body ">

                    <div class="d-flex align-items-center"></div>
                    <form action="{{ route('actions.update', $action->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <div class="col-sm-2">
                                <label class="form-label" for="number">Número</label>
                                <input class="form-control" type="number" name="number" id="number" value="{{ $action->number }}">
                            </div>

                            <div class="col-sm-10">
                                <label class="form-label" for="title">Nome <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="title" id="title" value="{{ $action->title }}" required placeholder="Nome da Ação">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end pt-3">
                            <a href="{{ route('actions.index') }}" class="btn btn-secondary" aria-label="Voltar">
                                <i class="ai-undo " aria-hidden="true"></i>
                            </a>
                            <button type="submit" class="btn btn-primary ms-2" aria-label="Salvar">
                                <i class="ai-check  " aria-hidden="true"></i>
                            </button>
                        </div>
                </div>
                </form>
        </div>
        </section>
    </div>

</div>
</div>
@endsection