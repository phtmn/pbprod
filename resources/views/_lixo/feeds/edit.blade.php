@extends('layouts.around.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">


            <!-- Page content-->
            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button"
                                    href="{{ route('feeds.index') }}"><i class="ai-undo me-2 ms-n1"></i>Feeds</a></h2>
                        </div>

                        <form action="{{ route('feeds.update', $feed->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 container">

                                <br>
                                <div class="col-sm-8">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <label class="form-label" for="title">Título</label>
                                <input class="form-control" type="text" name="title" id="title" placeholder="Título do Feed" value="{{$feed->title}}">
                                </div>
                                <div class="dropdown">
                                    <a id="img"
                                        class="d-flex flex-column justify-content-end position-relative overflow-hidden border-0 rounded-1  bg-size-cover bg-position-center flex-shrink-0"
                                        href="#" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="width: 100px; height: 100px; background-image: url( @if (isset($feed->image)) {{ asset('assets/img/feeds-image') }}/{{ $feed->image }}@else {{ asset('assets/img/user.png') }} @endif );">
                                        <span class="d-block text-light text-center lh-1 pb-1"
                                            style="background-color: rgba(0,0,0,.5)">
                                            <i class="ai-camera"></i></span>
                                    </a>
                                    <div class="dropdown-menu my-1">
                                        <a class="dropdown-item fw-normal" href="#">
                                            <input onchange="previewImagem()" class="form-control" type="file" accept="image/*" name="image" id="image" value="{{ asset('assets/img/feeds-image')}}/{{$feed->image}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 mt-3">
                                    <h3 class="mt-3"> <i class="ai-tool fs-5 opacity-60 me-2"></i>Ferramentas</h3>
                                    @forelse ($tools as $tool)
                                    <div class="d-flex">
                                        <input @isset($tool) @foreach($feed->hasTool as $hasTool) @if($tool->id == $hasTool->id) checked @endif @endforeach @endisset class="form-check" type="checkbox" name="tools[]" id="tools" value="{{ $tool->id }}"><label class="form-label" for="{{ $tool->name }}">{{ $tool->name }}</label>
                                    </div>
                                    @empty
                                        <p class="text-warning">Nenhuma ferramenta</p>
                                    @endforelse
                                    </div>
                                <div class="col-sm-8 mt-3">
                                    <h3 class="mt-3"> <i class="ai-tag fs-5 opacity-60 me-2"></i>Tags</h3>
                                    @forelse ($tags as $tag)
                                    <div class="d-flex">
                                        <input @isset($tag) @foreach($feed->hasTag as $hasTag) @if($tag->id == $hasTag->id) checked @endif @endforeach @endisset class="form-check" type="checkbox" name="tags[]" id="tags" value="{{ $tag->id }}"><label class="form-label" for="{{ $tag->name }}">{{ $tag->name }}</label>
                                    </div>
                                    @empty
                                        <p class="text-warning">Nenhuma ferramenta</p>
                                    @endforelse
                                    </div>
                                <label class="form-label" for="description">Descrição</label> <br>
                                <textarea maxlength="500" class="form-control" name="description" id="description" cols="30" rows="10" style="height: 150px;" placeholder="Para tornar certas partes do feed editáveis, basta colocá-las entre colchetes [ text ]" required>{{$feed->description}}</textarea>
                                <label class="form-label" for="link">Link</label>
                                <input class="form-control" type="text" name="link" id="link" required placeholder="Link do Feed" value="{{$feed->link}}">

                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-primary ms-3" type="submit"><i
                                            class="ai-check me-2 ms-n1"></i></button>
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
    <script>
        function previewImagem() {
            let imagem = document.getElementById('image').files[0];
            let preview = document.getElementById('img');

            let reader = new FileReader();

            reader.onloadend = function() {
                preview.style.backgroundImage = `url('${reader.result}')`;
            }

            if (imagem) {
                reader.readAsDataURL(imagem);
            } else {
                preview.style.backgroundImage = "";
            }
        }
    </script>
@endsection
