@extends('layouts.userAI.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">


        <!-- Page content-->
        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                        <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="{{route('prompt-spaces.index')}}"><i class="ai-undo me-2 ms-n1"></i>Prompt Spaces</a></h2>
                    </div>
                    <div class="d-flex align-items-center">

                    </div>
                    <form action="{{ route('prompt-spaces.update', $promptSpaces->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 container">

                            <br>
                            <div class="col-sm-8">
                            <label class="form-label" for="titulo">Nomea</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ $promptSpaces->name }}" required  required placeholder="Nome do Prompt Space" >
                            </div>

                            <div class="col-sm-2">
                            <label class="form-label" for="description">.</label>
                            <select class="form-control select" name="public" id="public">
                                <option @if($promptSpaces->public == "Público") selected @endif value="Público">Público</option>
                                <option @if($promptSpaces->public == "Privado") selected @endif value="Privado">Privado</option>
                            </select>
                            </div>

                                                                @foreach ($sideTag as $side)
                                                                @if ($side->prompt_spaces_id == $promptSpaces->id)
                                                                @foreach ($tags as $space)
                                                                @if ($side->tag_id == $space->id)
                                                                <a class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2" type="button" href="{{ route('prompt-spaces.show', $side->prompt_spaces_id) }}">
                                                                    <i class="ai-tag me-2 ms-n1"></i>{{ $space->name }}
                                                                </a>
                                                                @endif
                                                                @endforeach
                                                                @endif
                                                                @endforeach

                            <div class="col-12 d-flex justify-content-end pt-3">
                                <button class="btn btn-primary ms-3" type="submit"><i class="ai-check me-2 ms-n1"></i></button>
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