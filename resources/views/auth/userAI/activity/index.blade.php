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
                            <a class="btn btn-secondary bg text-dark  me-3 me-sm-4" type="button" href="{{ route('activities.create') }}"><i class="ai-plus  ">
                                </i> </a>
                        </div>
                        <div class=" mb-0">

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
                         {{--       @forelse($activity as $d)
                                <td scope="row">
                                    <div class="align-items-center">


                                        <div class="row">
                                            <div class="col-sm-12 col-md-5 col-lg-9 mb-4 mb-md-0">
                                                <div class="pt-3 pt-sm-0 ps-sm-3">
                                                    <h3 class="h5 mb-1 mt-2">
                                                        <a href="{{ route('activities.show', $d->id) }}">
                                                            <i class="ai-tag fs-5 opacity-60 me-2"></i>{{ substr($d->name, 0, 30) }} </a>

                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-3 text-end">
                                                <form action="{{ route('activities.destroy', $d->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <a href="{{ route('activities.edit', $d->id) }}" class="badge  text-muted   fs-6 " type="button"> <i class="ai-edit "> </i>
                                                    </a>
                                                    <button type="submit" class="btn btn-secondary  fs-8  me-sm-4 ">
                                                        <i class="ai-trash "> </i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                </td>


                                </tr>
                                @empty
                                <p class="text-warning"><b>Nenhuma Tag </b></p>
                                @endforelse --}}

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