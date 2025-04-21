@extends('layouts.SAdmin.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        @include('layouts.SAdmin.sidebar')
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">

            <section class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4 ">
                <div class="card-body ">

                    <div class="d-flex align-items-center"></div>
                    <form action="{{ route('actions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3 container">
                            <br>
                            <div class="row col-sm-12">
                                <div class="col-sm-2">
                                    <label class="form-label" for="fn">Número</label>
                                    <input class="form-control" type="text" name="number" id="number"
                                        placeholder="URL do Site">
                                </div>
                                <div class="col-sm-10">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <label class="form-label" for="fn">Nome</label>
                                    <input class="form-control" type="text" name="title" id="title" required
                                        placeholder="Nome da Ação">
                                </div>
                            </div>



                            <div class="col-12 d-flex justify-content-end pt-3">
                                <a class="btn btn-secondary bg text-dark   " type="button"
                                    href="{{ route('actions.index') }}">
                                    <i class="ai-undo   ms-n1"></i>

                                </a>
                                <button class="btn btn-sm btn-outline-primary ms-2" type="submit"><i class="ai-check ms-n1"></i>
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