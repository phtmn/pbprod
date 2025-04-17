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
                                <a class="btn btn-secondary me-3 me-sm-4" type="button"
                                    href="{{ route('prompt-users.create') }}"><i class="ai-square-plus  ">
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
                                    @if(Functions::getUsers() != null)
                                        @foreach (Functions::getUsers() as $d)
                                            <tr>
                                                <td scope="row">
                                                    <div class="d-sm-flex align-items-center p-1 my-1">
                                                        {{-- <div class="order-0 rounded-1 bg-size-cover bg-position-center flex-shrink-0"
                                                        style="width: 80px; height: 80px; background-image: url( @if (isset($d->image)) {{ asset('assets/img/goods-image') }}/{{ $d->image }}@else {{ asset('assets/img/user.png') }} @endif);">
                                        </div> --}}
                                                        <div class="pt-3 pt-sm-0 ps-sm-3 d-flex align-items-center">
                                                            <span id="img"
                                                                class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position flex-shrink-0"
                                                                href="#" data-bs-toggle="dropdown" aria-expanded="false"
                                                                style="width: 50px; height: 50px; background-image: url( @if (isset($user->image)) {{ asset('assets/img/userAI-image') }}/{{ $user->image }}@else {{ asset('assets/img/user.png') }} @endif );">
                                                            </span>
                                                            <div>
                                                                <h3 class="h5 mb-2">
                                                                    <a class="outline-secondary" data-bs-toggle="tooltip"
                                                                        data-bs-placement="right"
                                                                        title="{{ $d->public == 'Público' ? 'Público' : 'Privado' }} ">
                                                                        {{ $d->email }}
                                                                    </a>
                                                                </h3>
                                                                <div>
                                                                    {{ $d->name }}
                                                                    <br>
                                                                    <span class="outline-secondary" data-bs-toggle="tooltip"
                                                                        data-bs-placement="right">
                                                                        @foreach (Functions::getPromptSpaceTag($d->id) as $item)
                                                                            @foreach ($item as $d)
                                                                                {{ $d->name ?? $d->title }}
                                                                            @endforeach
                                                                        @endforeach

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-end">

                                                    <form action="{{ route('prompt-users.destroy', $d->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <a href="{{ route('prompt-users.edit', $d->id) }}"
                                                            class="badge bg-faded-primary text-primary fs-xs btn btn-secondary "
                                                            type="button"> <i class="ai-edit "> </i>
                                                        </a>
                                                        <button type="submit"
                                                            class="badge bg-faded-danger  text-danger  fs-xs btn btn-danger  me-3 me-sm-4">
                                                            <i class="ai-trash "> </i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p class="text-warning">Nenhum Usuário</p>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- component sidebar --}}
            <x-sidebar />
        </div>
    @endsection

    <script>
        setTimeout(function() {
            let alert = document.getElementById('alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 4000);
    </script>
