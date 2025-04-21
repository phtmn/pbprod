@extends('layouts.Admin.app')
@section('content')
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">
        @include('layouts.Admin.sidebar')
            <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
              
                <div class="card border-2 py-1 p-md-2 p-xl-3 p-xxl-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <div class="h4 mb-0">
                                <a class="btn btn-secondary bg text-dark me-3 me-sm-4" type="button"
                                    href="{{ route('planning.create') }}">
                                    <i class="ai-plus"></i>
                                </a>
                            </div>
                            <div class="mb-0">
                                @if (session('error'))
                                    <span id="alert" class="badge bg-secondary fs-sm">{{ session('error') }}!</span>
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
                                    
                                </tbody>
                            </table>
                        </div>
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
