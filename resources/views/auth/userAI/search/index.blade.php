@extends('layouts.userAI.app')
@section('content')

<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
            <div class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4">
                <div class="card-body text-end">

                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link @if(!request()->has('category') || request('category') == 'Prompt') active @endif">
                                <i class="ai-terminal me-2 "> </i>
                                {{ $prompts->count() }}
                            </a>
                        </li>                         
                        {{--   <li class="nav-item">
                            <a class="nav-link @if(request('category') == 'PromptSpaces') active @endif">
                                <i class="ai-folder me-2"></i>
                                {{ $promptspaces->count() }}
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link @if(request('category') == 'PromptEngineering') active @endif">
                                <i class="ai-user-group me-2"></i>
                                {{ $users->count() }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request('category') == 'Tools') active @endif">
                                <i class="ai-tool me-2"></i>
                                {{ $tools->count() }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body text-end">
                    <form action="{{ route('search.index') }}" method="GET" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row g-3 g-sm-4 mt-0 mt-lg-2  justify-content-center">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="search" id="search" placeholder="Digite aqui ...">
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control select  " name="category" id="category" required>
                                    <option value="Prompt" @if(request('category') == 'Prompt') selected @endif>Prompts</option>
                                    {{-- <option value="PromptSpaces" @if(request('category') == 'PromptSpaces') selected @endif>Prompt Spaces</option> --}}
                                    <option value="PromptEngineering" @if(request('category') == 'PromptEngineering') selected @endif>Usuários</option>
                                    <option value="Tools" @if(request('category') == 'Tools') selected @endif>Ferramentas</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <button class="btn btn-secondary bg text-dark me-3 me-sm-4" type="submit"><i class="ai-search ms-n1"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Resultado da busca --}}
            @if (isset($prompts) && (!isset($promptSpace) && !isset($prompt) && !isset($prompt_engineering) && !isset($tool)))
                    @include('auth.userAI.search.prompt')
                   
                @endif

                @if (isset($promptSpace))
                    @include('auth.userAI.search.prompt-space')
                     
                @endif

                @if (isset($prompt_engineering))
                    @include('auth.userAI.search.prompt_engineering')
                    
                @endif

                @if (isset($tool))
                    @include('auth.userAI.search.tool')
                   
                @endif
                            @if (isset($noResults))
                            <p class="text-warning">{{ $noResults }}</p>
                            @endif
                    
               

        </div>
        {{-- component sidebar --}}
        <x-sidebar />

    </div>
</div>

</div>







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
 
 