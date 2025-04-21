@extends('layouts.userAI.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
            <div class="d-sm-flex align-items-center mb-4">
            </div>
            <section class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                <div class="card-body">
                    

                    <form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row mb-3">
                            <div class="col-sm-2">
                                <label class="form-label" for="number">Exercício (Ano)</label>
                                <input class="form-control" type="number" name="number" id="number">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="email">Gerência</label>
                                <select class="form-select select" name="management" id="management">
                                    <option value="userAI">aa</option>
                                    <option value="SAdmin">bb</option>
                                    <option value="SAdmin">bb</option>
                                </select>
                            </div>
                            <div class="col-sm-7">
                                <label class="form-label" for="email">Responsável</label>
                                <select class="form-select select" name="management" id="management">
                                    <option value="userAI">aa</option>
                                    <option value="SAdmin">bb</option>
                                    <option value="SAdmin">bb</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-9">
                                <label class="form-label" for="number">Ação</label>
                                <select class="form-select select" name="management" id="management">
                                    <option value="userAI">Selecione</option>
                                    <option value="SAdmin">bb</option>
                                    <option value="SAdmin">DESENVOLVIMENTO DO PROGRAMA DE GOVERNANÇAS E PARCERIAS PELA AGRICULTURA FAMILIAR E O SEMIÁRIDO PARAIBANO</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label" for="email">Orçamento (R$)</label>
                                <input class="form-control" type="text" name="number" id="number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label class="form-label" for="email">Iniciativa</label>
                                <textarea class="form-control" name="bio" id="bio" cols="30" rows="20" style="height: 75px;"> </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label class="form-label" for="email">Meta</label>
                                <textarea class="form-control" name="bio" id="bio" cols="30" rows="20" style="height: 75px;"> </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label class="form-label" for="email">Atividades (Etapas)</label>
                                <textarea class="form-control" name="bio" id="bio" cols="30" rows="20" style="height: 150px;"> </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label" for="email">Descrição da Atividade Realizada</label>
                            <textarea class="form-control" name="bio" id="bio" cols="30" rows="20" style="height: 350px;"> </textarea>
                        </div>
                        </div>
               
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="email">Indicadores Quantitativos</label>
                        <textarea class="form-control" name="bio" id="bio" cols="30" rows="20" style="height: 80px;"> </textarea>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="email">Indicadores Qualitativos</label>
                        <textarea class="form-control" name="bio" id="bio" cols="30" rows="20" style="height: 80px;"> </textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="email">Resultado Alcançado (Quantitativos)</label>
                        <textarea class="form-control" name="bio" id="bio" cols="30" rows="20" style="height: 80px;"> </textarea>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="email">Resultado Alcançado (Qualitativos)</label>
                        <textarea class="form-control" name="bio" id="bio" cols="30" rows="20" style="height: 80px;"> </textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="file-input" class="form-label">Anexar Imagem (Institucional) </label>
                        <input class="form-control" type="file" id="file-input">
                    </div>

                    <div class="col-sm-6">
                        <label for="file-input" class="form-label">Anexar Imagem (Pessoal) </label>
                        <input class="form-control" type="file" id="file-input">
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


                </form>
        </div>
        </section>
    </div>

</div>
</div>

@endsection