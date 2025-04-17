@extends('layouts.userAI.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
            <div class="d-sm-flex align-items-center mb-4">

            </div>

            <div class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4">
                <div class="card-body">
                    <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                        <div class="h4 mb-0">
                            <a class="btn btn-secondary bg text-dark me-3 me-sm-4" type="button" href="{{ route('prompts.create') }}"><i class="ai-plus  ">
                                </i> </a>
                        </div>
                        <div class=" mb-0">
                            @if (session('error'))
                            <span id="alert" class="badge bg-secondary  fs-sm">{{ session('error') }}! </span>
                            @endif
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-end"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($prompt as $d)
                                <tr>
                                    <td scope="row">
                                        <div class="align-items-center">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5 col-lg-9 mb-4 mb-md-0">
                                                    <div class="fs-sm fw-medium text-dark mb-1"><i class="ai-terminal fs-lg opacity-70 me-2 "></i> <b>{{ $d->title }} </b></div>
                                                    <div class="fs-sm" id="contentToCopy-{{ $d->id }}"> {{ $d->description }}</div>

                                                    <div class="fs-sm">
                                                      
                                                        <button onclick="copyContent('contentToCopy-{{ $d->id }}', 'copyButton-{{ $d->id }}')" class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2" type="button" id="copyButton-{{ $d->id }}">
                                                            <i class="ai-copy me-2 ms-n1"></i>Copiar</button>

                                                        @foreach ($sideTag as $side)
                                                        @if ($side->prompt_id == $d->id)
                                                        @foreach ($tags as $tag)
                                                        @if ($side->tag_id == $tag->id)
                                                        <a class="btn btn-sm btn-outline-secondary  w-100 w-md-auto mt-2" type="button" href="{{ route('tags.show', $side->tag_id) }}">
                                                            <i class="ai-tag me-2 ms-n1"></i>{{ $tag->name }}
                                                        </a>
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                        @endforeach
                                                    </div>

                                                </div>
                                                <div class="col-md-4 col-lg-3 text-end">

                                                    <form action="{{ route('prompts.destroy', $d->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <a href="{{ route('prompts.edit', $d->id) }}" class="badge  text-muted   fs-6  " type="button"> <i class="ai-edit "> </i>
                                                        </a>
                                                        <button type="submit" class="btn btn-secondary  fs-8 me-sm-4 ">
                                                            <i class="ai-trash "> </i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </td>


                                </tr>
                                @empty
                                <p class="text-warning"><b>Nenhum Prompt </b></p>
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


@endsection



<script>
    setTimeout(function() {
        let alert = document.getElementById('alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 5000);
</script>