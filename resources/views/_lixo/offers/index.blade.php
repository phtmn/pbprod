@extends('layouts.around.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">

        {{-- component sidebar --}}
        <x-sidebar />



        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <div class="d-sm-flex align-items-center mb-4">

            </div>
            <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                <div class="card-body">
                    <h1 class="pb-3">Our case studies</h1>
                    @forelse($offer as $d)
                    <!-- Item-->
                    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
                        <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
                                <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                                <img class="d-block position-relative zindex-2 mx-auto rounded-1 p-md-2 p-lg-3" src="{{ asset('assets/img/offer-image') }}/{{ $d->image }}" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                            </a>
                        </div>
                        <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
                            <h2 class="h4">{{ $d->title }}</h2>
                            <p class="fs-sm pb-3 pb-lg-4 mb-3">{{ $d->description }}</p><a class="btn btn-sm btn-outline-dark rounded-pill" href="portfolio-single-v1.html">{{ $d->link }}</a>
                            <div class="d-flex align-items-center pt-2 pt-lg-3 mt-3">
                                <h6 class="text-body mb-0 me-3">{{ $d->cashback }}</h6>
                                <h6 class="text-body mb-0 me-3">{{ $d->comission }}</h6>
                                <img class="d-block d-dark-mode-none me-4 rounded-1 p-md-2 p-lg-3" src="assets/img/portfolio/brands/vuejs-dark.svg" width="90" alt="Vue.js">
                                <img class="d-none d-dark-mode-block me-4" src="assets/img/portfolio/brands/vuejs-light.svg" width="90" alt="Vue.js">
                                <img class="d-block d-dark-mode-none" src="assets/img/portfolio/brands/deloitte-dark.svg" width="95" alt="Deloitte">
                                <img class="d-none d-dark-mode-block" src="assets/img/portfolio/brands/deloitte-light.svg" width="95" alt="Deloitte">
                            </div>
                            <p class="fs-sm pb-3 pb-lg-4 mb-3"></p><a class="btn btn-sm btn-outline-dark rounded-pill" href="portfolio-single-v1.html">Indicar</a>
                        </div>
                    </div>
                    @empty
                    <p class="text-warning">Nenhum serviço cadastrado</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection