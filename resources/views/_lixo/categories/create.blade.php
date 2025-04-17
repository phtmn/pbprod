@extends('layouts.around.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

        @include('layouts.around.SAdmin.sidebar')
        <!-- Page content-->
        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="{{route('offerSA.index')}}"><i class="ai-undo me-2 ms-n1"></i>Ofertas</a></h2>
                        </div>
                        <div class="d-flex align-items-center">

                        </div>
                        <form action="{{ route('categoriesSA.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 container">
                               
                                <br>

                                <label class="form-label" for="titulo">Name</label>
                                <input class="form-control" type="text" name="name" id="name" required>

                                <label class="form-label" for="description">Descrição</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" style="height: 100px;"  required></textarea>
                                
                               

                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-primary ms-3" type="submit"><i class="ai-check me-2 ms-n1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                </div>
        </div>
    </div>






@endsection