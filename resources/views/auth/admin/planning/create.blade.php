@extends('layouts.Admin.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        @include('layouts.Admin.sidebar')
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
            <section class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4 ">
                <div class="card-body">                     
                    <form action="{{ route('planning.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row mb-3">
                            <div class="col-sm-2">
                                <label class="form-label" for="number">Exercício (Ano)</label>
                                <input class="form-control" type="number" name="year" id="year">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="email">Gerência</label>
                                <select class="form-select select" name="management_id" id="management_id">
                                <option value="">-</option>
                                @foreach ($managements as $management)
                                    <option value="{{ $management->id }}">{{ $management->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-sm-7">
                                <label class="form-label" for="email">Responsável</label>
                                <select class="form-select select" name="user_id" id="user_id">
                                <option value="">-</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            </div> 
                            
                            <div class="row mb-3">
                            <div class="col-sm-9">
                                <label class="form-label" for="number">Ação</label>
                                <select class="form-select select" name="action_id" id="action_id">
                                <option value="">-</option>
                                @foreach ($actions as $action)
                                    <option value="{{ $action->id }}">{{ $action->title }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="email">Orçamento (R$)</label>
                                <input class="form-control" type="text" name="budget" id="budget">
                            </div>
                            </div>

                            <div class="row mb-3">
                            <div class="col-sm-12">
                                <label class="form-label" for="email">Iniciativa</label>
                                <textarea class="form-control" name="initiative" id="initiative" cols="30" rows="20" style="height: 75px;"> </textarea>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <div class="col-sm-12">
                                <label class="form-label" for="email">Meta</label>
                                <textarea class="form-control" name="goal" id="goal" cols="30" rows="20" style="height: 75px;"> </textarea>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <div class="col-sm-12">
                                <label class="form-label" for="email">Atividades (Etapas)</label>
                                <textarea class="form-control" name="steps" id="steps" cols="30" rows="20" style="height: 150px;"> </textarea>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <div class="col-sm-6">
                                <label class="form-label" for="email">Indicadores Quantitativos</label>
                                <textarea class="form-control" name="indicator_quantitative" id="indicator_quantitative" cols="30" rows="20" style="height: 80px;"> </textarea>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label" for="email">Indicadores Qualitativos</label>
                                <textarea class="form-control" name="indicator_qualitative" id="indicator_qualitative" cols="30" rows="20" style="height: 80px;"> </textarea>
                            </div>
                            </div>
                                                   
                        </div>
                        <div class="col-12 d-flex justify-content-end pt-3">
                            <a href="{{ route('planning.index') }}" class="btn btn-secondary" aria-label="Voltar">
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