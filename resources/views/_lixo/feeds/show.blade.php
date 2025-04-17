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
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item">
                                        @php
                                            $encontrado = false;
                                        @endphp
                                        <a name="promptSpace_id" id="feeds" value="feeds">
                                            <i class="ai-folder fs-base me-2"></i>
                                            Feeds
                                        </a>
                                        @php
                                            $encontrado = true;
                                        @endphp
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <i class="ai-tag fs-base me-2"></i>
                                        {{ $feeds->title }}
                                    </li>

                                </ol>
                            </nav>
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
                                            <tr>
                                                <td scope="row">
                                                    <div class="align-items-center">
                                                        <div class="pt-3 pt-sm-0 ps-sm-3">
                                                            <div class="bg-secondary rounded-1 p-4 my-2">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-5 col-lg-9 mb-4 mb-md-0">
                                                                        <div class="fs-sm fw-medium text-dark mb-1">
                                                                            <i
                                                                                class="ai-terminal fs-lg opacity-70 me-2 "></i>{{ $feeds->title }}
                                                                        </div>
                                                                        <div class="fs-sm"
                                                                            id="contentToCopy-{{ $feeds->id }}">
                                                                            {{ $feeds->description }} </div>
                                                                        <button
                                                                            onclick="copyContent('contentToCopy-{{ $feeds->id }}', 'copyButton-{{ $feeds->id }}')"
                                                                            class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2"
                                                                            type="button"
                                                                            id="copyButton-{{ $feeds->id }}">
                                                                            <i class="ai-copy me-2 ms-n1"></i>Copiar
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                </tbody>

                            </table>
                        </div>


                    </div>
                </section>
            </div>
            {{-- component sidebar --}}
            <x-sidebar />
        </div>
    </div>
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
