@extends('layouts.around.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

            {{-- component sidebar --}}
            <x-sidebar />

            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                <div class="d-sm-flex align-items-center mb-4">
                    <h1 class="h2 mb-4 mb-sm-0 me-4">{{ __('UserAI Dashboard') }}</h1>
                    <div class="d-flex ms-auto">
                    Usuários afiliados e suas ofertas  - Nome, Foto e E-mail
                    </div>
                </div>          
            </div>
        </div>
    </div>
@endsection
