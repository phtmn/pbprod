<tr>
    <td scope="row">
        <div class="align-items-center">
            <div class="row">                
                <div class="col-sm-12 col-md-5 col-lg-9 mb-4 mb-md-0">
                    <div class="fs-sm fw-medium text-dark mb-1">    
                        <a href="{{ route('show.index', $user->id) }} " class="text-dark">   <i class="ai-user fs-lg opacity-70 me-2 "></i></a>
                        <b>{{ $user->name }} </b> 
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-end">
                    <form action="{{ route('favorites.destroy', $favUser->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-secondary  fs-8 me-sm-4 ">
                            <i class="ai-trash "> </i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </td>