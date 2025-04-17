@extends('layouts.around.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">



            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                <div class="d-sm-flex align-items-center mb-4">

                </div>
                <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <div class="h4 mb-0">
                                <a class="btn btn-secondary bg text-dark me-3 me-sm-4" type="button" href="{{ route('feeds.create') }}"><i
                                        class="ai-plus  ">
                                    </i> </a>
                            </div>
                            <div class=" mb-0">

                                @if (session('error'))
                                    <span id="alert" class="badge bg-info fs-sm">{{ session('error') }} <i
                                            class="ai-triangle-alert  ">
                                        </i> </span>
                                @endif

                            </div>
                        </div>



                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-end"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($feeds as $d)
                                        <tr>


                                            <td scope="row">
                                                <div class="align-items-center">

                                                    <div class="pt-3 pt-sm-0 ps-sm-3">


                                                        <div class="bg-secondary rounded-1 p-4 my-2">
                                                            <div class="row">

                                                                <div class="col-sm-12 col-md-5 col-lg-9 mb-4 mb-md-0">
                                                                    @foreach ($users as $user)
                                                                        @if ($user->id == $d->user_id)
                                                                            <img class="border rounded-circle"
                                                                                src="@if (isset($user->image)) {{ asset('assets/img/userAI-image') }}/{{ $user->image }}@else {{ asset('assets/img/user.png') }} @endif"
                                                                                width="48">
                                                                            <div class="fs-sm">{{ $user->name }} </div>
                                                                            <div class="fs-sm ">
                                                                                Prompt Space - {!! SearchHelpers::getSpacesCount($d->id) !!}
                                                                                Tags - {!! SearchHelpers::getTagsCount($d->id) !!}
                                                                                Prompt - {!! SearchHelpers::getPromptCount($d->id) !!}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                    <br>
                                                                    <div class="fs-sm fw-medium text-dark mb-1"><i
                                                                            class="ai-terminal fs-lg opacity-70 me-2 "></i>{{ $d->title }}
                                                                    </div>
                                                                    <div class="fs-sm"
                                                                        id="contentToCopy-{{ $d->id }}">
                                                                        {{ $d->description }} </div>
                                                                    <div class="fs-sm"><a
                                                                            href="{{ $d->link }}">Link</a></div>
                                                                            <div class="fs-sm fw-medium text-dark mb-1"><i
                                                                                class="ai-tool fs-lg opacity-70 me-2 "></i>Ferramentas
                                                                        </div>
                                                                            @foreach($d->hasTool as $tool)
                                                                            <div class="fs-sm">
                                                                                <p>{{$tool->name}}</p>
                                                                            </div>
                                                                            @endforeach
                                                                    <div class="fs-sm">
                                                                        <form action="{{route('feeds-favorite.store')}}" method="POST" id="favorite-feed-form">
                                                                            @csrf
                                                                            <input type="hidden" name="feed_id" value="{{$d->id}}">
                                                                            <button href="#" id="feed-favorite-submit" class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2">
                                                                                <i class="ai-star "></i>
                                                                            </button>
                                                                        </form>
                                                                        <button
                                                                            onclick="copyContent('contentToCopy-{{ $d->id }}', 'copyButton-{{ $d->id }}')"
                                                                            class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2"
                                                                            type="button"
                                                                            id="copyButton-{{ $d->id }}">
                                                                            <i
                                                                                class="ai-copy me-2 ms-n1"></i>Copiar</button>
                                                                    </div>

                                                                </div>
                                                                @if($d->user_id == $user->id)
                                                                    <div class="col-md-4 col-lg-3 text-md-end">

                                                                        <form action="{{ route('feeds.destroy', $d->id) }}"
                                                                            method="post">
                                                                            {{ csrf_field() }}
                                                                            {{ method_field('DELETE') }}
                                                                            <a href="{{ route('feeds.edit', $d->id) }}"
                                                                                class="badge bg-faded-primary text-primary fs-xs btn btn-secondary "
                                                                                type="button"> <i class="ai-edit "> </i>
                                                                            </a>
                                                                            <button type="submit"
                                                                                class="badge bg-faded-danger  text-danger  fs-xs btn btn-danger  me-3 me-sm-4 ">
                                                                                <i class="ai-trash "> </i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>


                                        </tr>
                                    @empty
                                        <p class="text-warning">Nenhum Feed</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            {{-- component sidebar --}}
            <x-sidebar />
        </div>
    </div>
    @include('layouts.around.footer')
@endsection

<script>
    function copyContent(divId, buttonId) {
        // Obtém o conteúdo da div
        const content = document.getElementById(divId).innerText;

        // Cria um elemento textarea temporário para realizar a cópia
        const tempElement = document.createElement('textarea');
        document.body.appendChild(tempElement);
        tempElement.value = content;
        tempElement.select();
        document.execCommand('copy');
        document.body.removeChild(tempElement);

        const copyButton = document.getElementById(buttonId);
        copyButton.innerText = 'Copiando';
        setTimeout(() => {
            copyButton.innerHTML = '<i class="ai-copy me-2 ms-n1"></i>Copiar';
        }, 250); // Muda o texto de volta após 2 segundos
    }
</script>

<script>
    setTimeout(function() {
        let alert = document.getElementById('alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 4000);
</script>
