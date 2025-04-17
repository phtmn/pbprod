@extends('layouts.around.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">


            <!-- Page content-->
            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4 ">
                    <div class="card-body ">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button"
                                    href="{{ route('prompt-users.index') }}"><i class="ai-undo me-2 ms-n1"></i>Prompt
                                    Users</a></h2>
                        </div>
                        <div class="d-flex align-items-center">

                        </div>
                        <form action="{{ route('prompt-users.update', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 container">

                                <br>
                                {{-- Por questão de segurança acho melhor deixar o email inalterável, já que não
                                    tem o perigo de errar o email, por que é checável no banco --}}
                                <div class="col-sm-8">
                                    <label class="form-label" for="fn">E-mail</label>
                                    <input readonly class="form-control" type="text" name="email" id="email" required
                                        placeholder="E-mail do usuário" value="{{ $user->email }}">
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-2">
                                        <label class="form-label" for="description">Permissão</label>
                                        <select class="form-control select" name="permission" id="permission">
                                            <option @foreach($promptSpacesUser as $space) @if($space->permission == "Admin") selected @endif @endforeach value="Admin">Admin</option>
                                            <option @foreach($promptSpacesUser as $space) @if($space->permission == "Editor") selected @endif @endforeach value="Editor">Editor</option>
                                            {{--    <option @if ($promptSpaces->public == 'Privado') selected @endif value="Privado">Privado</option> --}}
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        {{--     <label class="form-label" for="description">Adicionar Usuário</label>
                                <select class="form-control select" name="userId" id="userId">
                                    <option value="">{{ Str::limit($users->name, 15, '') }}</option>
                                    @foreach ($users as $users)
                                    <option value="{{ $users->id }}">{{ Str::limit($users->name, 15, '') }}</option>
                                    @endforeach
                                 {{--    <option @if ($promptSpaces->public == 'Privado') selected @endif value="Privado">Privado</option> 
                                </select> --}}
                                    </div>
                                </div>
                                <div class="d-flex mt-3">
                                    <div class="col-sm-2">
                                        @foreach ($promptSpaces as $promptSpace)
                                            <input @foreach($promptSpacesUser as $space) @if($space->prompt_space_id == $promptSpace->id) checked @endif @endforeach type="checkbox" name="prompt_space_id[]" id="prompt_space_id"
                                                value="{{ $promptSpace->id }}"><label class="form-label"
                                                for="description">{{ $promptSpace->name }}</label><br>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-flex mt-3">
                                    <div class="col-sm-2">
                                        @foreach ($tags as $tag)
                                            <input @foreach($tagsUser as $tagUser) @if($tagUser->tag_id == $tag->id) checked @endif @endforeach type="checkbox" name="tag_id[]" id="tag_id"
                                                value="{{ $tag->id }}"><label class="form-label"
                                                for="description">{{ $tag->name }}</label><br>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-flex mt-3">
                                    <div class="col-sm-2">
                                        @foreach ($prompts as $prompt)
                                            <input @foreach($promptsUser as $promptUser) @if($promptUser->prompt_id == $prompt->id) checked @endif @endforeach type="checkbox" name="prompt_id[]" id="prompt_id"
                                                value="{{ $prompt->id }}"><label class="form-label"
                                                for="description">{{ $prompt->title }}</label><br>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-primary ms-3" type="submit"><i
                                            class="ai-check me-2 ms-n1"></i></button>
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
