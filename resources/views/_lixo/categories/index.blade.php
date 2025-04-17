@extends('layouts.around.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

        @include('layouts.around.SAdmin.sidebar')

            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                <div class="d-sm-flex align-items-center mb-4">

                </div>
                <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0">
                                <a class="btn btn-secondary me-3 me-sm-4" type="button"
                                    href="{{ route('categoriesSA.create') }}"><i class="ai-square-plus me-2 ms-n1">
                                    </i> </a>
                            </h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Imagem</th>
                                        <th>Título</th>
                                        <th>Descrição</th>                                        
                                      
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categorie as $d)
                                        <tr>
                                            <th scope="row">{{ $d->id }}</th>
                                          
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->description }}</td>                                          
                                           


                                            <td class="text-end">
                                                <form action="{{ route('offerSA.destroy', $d->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <a href="{{ route('offerSA.edit', $d->id) }}" class="badge bg-faded-primary text-primary fs-xs btn btn-secondary me-3 me-sm-4" type="button"> <i class="ai-edit-alt "> </i>
                                                    </a>
                                                    <button type="submit" class="badge bg-faded-danger  text-danger  fs-xs btn btn-danger  me-3 me-sm-4">
                                                        <i class="ai-cross "> </i>
                                                    </button>
                                            </td>
                                        </tr>

                                    @empty
                                        <p class="text-warning">Nenhum cadastro</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
