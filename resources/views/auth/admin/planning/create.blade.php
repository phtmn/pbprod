@extends('layouts.Admin.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        @include('layouts.Admin.sidebar')
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">

            <section class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4 ">
                <div class="card-body ">

                    <div class="d-flex align-items-center"></div>
                    <form action="{{ route('tools.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3 container">
                            <br>
                            <div class="row col-sm-12">
                                <div class="col-sm-6">
                                    <label class="form-label" for="exercicio">Exercício (Ano)</label>
                                    <input class="form-control" type="number" name="exercicio" id="exercicio" required placeholder="Ano">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="gerencia">Gerência</label>
                                    <input class="form-control" type="text" name="gerencia" id="gerencia" required placeholder="Nome da Gerência">
                                </div>
                            </div>

                            <div class="row col-sm-12">
                                <div class="col-sm-6">
                                    <label class="form-label" for="responsavel">Responsável</label>
                                    <input class="form-control" type="text" name="responsavel" id="responsavel" required placeholder="Nome do Responsável">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="acao">Ação</label>
                                    <input class="form-control" type="text" name="acao" id="acao" required placeholder="Nome da Ação">
                                </div>
                            </div>

                            <div class="row col-sm-12">
                                <div class="col-sm-6">
                                    <label class="form-label" for="iniciativa">Iniciativa</label>
                                    <input class="form-control" type="text" name="iniciativa" id="iniciativa" placeholder="Iniciativa Relacionada">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="meta">Meta</label>
                                    <input class="form-control" type="text" name="meta" id="meta" placeholder="Meta da Ação">
                                </div>
                            </div>

                            <div class="row col-sm-12">
                                <div class="col-sm-6">
                                    <label class="form-label" for="indicador_quant">Indicadores Quantitativos</label>
                                    <textarea class="form-control" name="indicador_quant" id="indicador_quant" rows="3" placeholder="Ex: % de execução, quantidade entregue..."></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="indicador_qual">Indicadores Qualitativos</label>
                                    <textarea class="form-control" name="indicador_qual" id="indicador_qual" rows="3" placeholder="Ex: grau de satisfação, impacto percebido..."></textarea>
                                </div>
                            </div>

                            <div class="row col-sm-12">
                                <div class="col-sm-6">
                                    <label class="form-label" for="orcamento">Orçamento (R$)</label>
                                    <input class="form-control" type="number" step="0.01" name="orcamento" id="orcamento" placeholder="Valor estimado">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="atividade">Atividade (Etapas)</label>
                                    <textarea class="form-control" name="atividade" id="atividade" rows="3" placeholder="Descreva as etapas da atividade"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="col-12 d-flex justify-content-end pt-3">

                                    <button class="btn btn-sm btn-outline-primary ms-2" type="submit">
                                        <i class="ai-check ms-n1"></i> Salvar
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
        </div>
        </section>
    </div>

</div>
</div>
@endsection