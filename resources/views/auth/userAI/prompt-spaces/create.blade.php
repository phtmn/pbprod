@extends('layouts.userAI.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
      <div class="d-sm-flex align-items-center mb-4">
      </div>
                <section class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4 ">
                    <div class="card-body ">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0"> <a class="btn btn-secondary bg text-dark me-3 me-sm-4" type="button"
                                    href="{{ route('prompt-spaces.index') }}"><i class="ai-undo me-2 ms-n1"></i>Prompt
                                    Spaces</a></h2>
                        </div>
                        <div class="d-flex align-items-center">

                        </div>
                         <form action="{{ route('prompt-spaces.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-3 container">

                                <br>

                            <div class="col-sm-8">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <label class="form-label" for="fn" >Nome</label>
                                <input class="form-control" type="text" name="name" id="name" required placeholder="Nome do Prompt Space" >
                            </div>

                            <div class="d-flex d-none">
                                <div class="col-sm-2">
                                <label class="form-label" for="description">Privacidade</label>
                                <select class="form-control select" name="public" id="public">
                                    <option value="Público">Público</option>
                                 {{--    <option @if($promptSpaces->public == "Privado") selected @endif value="Privado">Privado</option> --}}
                                </select>
                                </div>
                                {{--  <div class="col-sm-2">
                                <label class="form-label" for="description">Adicionar Usuário</label>
                                <select class="form-control select" name="userId" id="userId">
                                    <option value="">{{ Str::limit($users->name, 15, '') }}</option>
                                    @foreach($users as $users)
                                    <option value="{{ $users->id }}">{{ Str::limit($users->name, 15, '') }}</option>
                                    @endforeach

                                </select>
                                </div> --}}
                            </div>

                            <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-sm btn-outline-primary ms-3" type="submit"><i
                                            class="ai-check"></i></button>
                                </div>
                        </div>
                       
            </div>
            </section>
        </div>
        {{-- component sidebar --}}
        <x-sidebar />
    </div>
    </div>
 
@endsection
