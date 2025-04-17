@extends('layouts.userAI.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
      <div class="d-sm-flex align-items-center mb-4">
      </div>
                <section class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0"> <a class="btn btn-secondary bg text-dark me-3 me-sm-4" type="button"
                                    href="{{ route('prompts.index') }}"><i class="ai-undo me-2 ms-n1"></i>Prompts</a></h2>
                        </div>
                        <div class="d-flex align-items-center">

                        </div>
                        <form action="{{ route('prompts.update', $prompt->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 container">

                                <br>
                                <div class="col-sm-12 d-flex justify-content-between">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <div class="col-md-6">
                                        <label class="form-label" for="title">Título</label>
                                        <input class="form-control" type="text" name="title" id="title" required placeholder="Título do Prompt" value="{{ $prompt->title }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" for="description">Privacidade</label>
                                        <select class="form-control select" name="public" id="public">
                                            <option @if($prompt->public == "Público") selected @endif value="Público">Público</option>
                                        </select>
                                    </div>
                                </div>
                                <label class="form-label" for="description">Descrição</label> <br>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" style="height: 150px;"
                                    placeholder="Para tornar certas partes do prompt editáveis, basta colocá-las entre colchetes [ text ]">{{ $prompt->description }}</textarea>


                                <h3 class="mt-3"> <i class="ai-tag fs-5 opacity-60 me-2"></i> Tags</h3>

                                @forelse ($tag as $tag)
                                    <input
                                        @foreach ($prompt_tag as $id)
                                            @if ($tag->id == $id->tag_id)
                                                checked
                                            @endif
                                        @endforeach
                                        type="radio" name="tag_id" class="check" id="{{ $tag->id }}"
                                        value="{{ $tag->id }}" required>

                                    <label class="form-label" for="{{ $tag->name }}">{{ $tag->name }}</label>

                                    @empty
                                    <p class="text-warning">Nenhuma Tag <a class=" me-3 me-sm-4 " type="button" href="{{ route('tags.create') }}"><i class="ai-square-plus text-warning ">
                                </i> </a></p>
                                @endforelse



                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-sm btn-outline-primary ms-3" type="submit"><i
                                            class="ai-check "></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            {{-- component sidebar --}}
            <x-sidebar />
        </div>
    </div>
 
@endsection
