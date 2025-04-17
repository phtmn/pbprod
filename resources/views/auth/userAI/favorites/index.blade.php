@extends('layouts.userAI.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
            <div class="d-sm-flex align-items-center mb-4">
            </div>
            <div class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4">

                <div class="card-body">
                    
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active " href="#prompt" data-bs-toggle="tab" role="tab">
                                <i class="ai-terminal   "> </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#users" data-bs-toggle="tab" role="tab">
                                <i class="ai-user-group  "></i>
                            </a>
                        </li>
                    </ul>


                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td scope="row">
                                        <div class="align-items-center">
                                            <div class="pt-3 pt-sm-0 ps-sm-3">
                                                <div class=" rounded-1 p-2 my-2">
                                                    <div class="row">
                                                        <!-- Tabs content -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="prompt" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-end"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @if (isset($user->favPrompt) && count($user->favPrompt) > 0)
                                                                            @foreach ($user->favPrompt as $favPrompt)
                                                                            @foreach($prompt as $d)
                                                                            @if ($d->id == $favPrompt->prompt_id)


                                                                            @include('auth.userAI.favorites.prompt')

                                                                            @endif
                                                                            @endforeach
                                                                            @endforeach
                                                                            @else
                                                                            <p class="text-warning"><b>Nenhum prompt </b></p>
                                                                            @endif
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="users" role="tabpanel">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-end"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            @if (isset($user->hasFavorite) && count($user->hasFavorite) > 0)
                                                                            @foreach ($user->hasFavorite as $favUser)
                                                                            @foreach ($users as $user)
                                                                            @if ($user->id == $favUser->fav_id)
                                                                            @include('auth.userAI.favorites.user')


                                                                            @endif
                                                                            @endforeach
                                                                            @endforeach
                                                                            @else
                                                                            <p class="text-warning"><b>Nenhum usuário </p>
                                                                            @endif

                                                                        </tbody>
                                                                    </table>
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
            </div>
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

<script>
    setTimeout(function() {
        let alert = document.getElementById('alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 4000);
</script>