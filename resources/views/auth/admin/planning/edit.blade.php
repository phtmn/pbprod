@extends('layouts.Admin.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        @include('layouts.Admin.sidebar')
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
            <section class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4 ">
                <div class="card-body">
                    <form method="POST" action="{{ route('planning.update', $planning->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-sm-2">
                                <label for="year" class="form-label">Exercício (Ano)</label>
                                <input type="number" name="year" class="form-control" value="{{ old('year', $planning->year) }}" required>
                            </div>
                            <div class="col-sm-3">
                                <label for="management_id" class="form-label">Gerência</label>
                                <select name="management_id" class="form-select" required>
                                    <option value="">Selecione...</option>
                                    @foreach ($managements as $management)
                                    <option value="{{ $management->id }}" {{ $planning->management_id == $management->id ? 'selected' : '' }}>
                                        {{ $management->acronym }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-7">
                                <label for="user_id" class="form-label">Responsável</label>
                                <select name="user_id" class="form-select" required>
                                    <option value="">Selecione...</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $planning->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-9">
                                <label for="action_id" class="form-label">Ação</label>
                                <select name="action_id" class="form-select" required>
                                    <option value="">Selecione...</option>
                                    @foreach ($actions as $action)
                                    <option value="{{ $action->id }}" {{ $planning->action_id == $action->id ? 'selected' : '' }}>
                                        {{ $action->title }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <label for="budget" class="form-label">Orçamento (R$)</label>
                                <input type="text" name="budget" class="form-control" value="{{ old('budget', $planning->budget) }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="initiative" class="form-label">Iniciativa</label>
                                <textarea name="initiative" class="form-control" cols="30" rows="20" style="height: 75px;">{{ old('initiative', $planning->initiative) }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="goal" class="form-label">Meta</label>
                                <textarea name="goal" class="form-control" cols="30" rows="20" style="height: 75px;">{{ old('goal', $planning->goal) }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="steps" class="form-label">Atividades (Etapas)</label>
                                <textarea name="steps" class="form-control" cols="30" rows="20" style="height: 150px;">{{ old('steps', $planning->steps) }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="indicator_quantitative" class="form-label">Indicadores Quantitativos</label>
                                <input type="text" name="indicator_quantitative" class="form-control" value="{{ old('indicator_quantitative', $planning->indicator_quantitative) }}" cols="30" rows="20" style="height: 80px;">
                            </div>

                            <div class="col-sm-6">
                                <label for="indicator_qualitative" class="form-label">Indicadores Qualitativos</label>
                                <input type="text" name="indicator_qualitative" class="form-control" value="{{ old('indicator_qualitative', $planning->indicator_qualitative) }}" cols="30" rows="20" style="height: 80px;">
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end pt-3">
                            <a href="{{ route('planning.index') }}" class="btn text-dark aria-label">
                                <i class="ai-undo " aria-hidden="true"></i>
                            </a>
                            <button type="submit" class="btn text-dark ms-2" aria-label="Salvar">
                                <i class="ai-check  " aria-hidden="true"></i>
                            </button>

                    </form>
                </div>
        </div>
        </section>
    </div>
</div>
</div>
@endsection