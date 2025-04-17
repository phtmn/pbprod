<div class="mt-3">
    <div class="tab-content">
        @foreach ($tool as $d)
        <div role="tabpanel">
            <div class="card border-3 mt-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $d->name }}</h5>
                    <div class="fs-sm">
                            @if(  $d->site != '') <b class="btn btn-sm btn-outline-secondary mt-2">
                            <i class="ai-globe me-2"></i>{{ $d->site }}</b>
                            @else
                            
                            @endif   
                    
                            @if(  $d->facebook != '') <b class="btn btn-sm btn-outline-secondary mt-2">
                            <i class="ai-facebook me-2"></i>{{ $d->facebook }}</b>
                            @else
                            
                            @endif           
                            
                            @if(  $d->instagram != '') <b class="btn btn-sm btn-outline-secondary mt-2">
                            <i class="ai-instagram me-2"></i>{{ $d->instagram }}</b>
                            @else
                            
                            @endif   

                            @if(  $d->youtube != '') <b class="btn btn-sm btn-outline-secondary mt-2">
                            <i class="ai-youtube me-2"></i>{{ $d->youtube }}</b>
                            @else
                            
                            @endif   

                            @if(  $d->tiktok != '') <b class="btn btn-sm btn-outline-secondary mt-2">
                            <i class="ai-tiktok me-2"></i>{{ $d->tiktok }}</b>
                            @else
                            
                            @endif   

                            @if(  $d->linkedin != '') <b class="btn btn-sm btn-outline-secondary mt-2">
                            <i class="ai-linkedin me-2"></i>{{ $d->linkedin }}</b>
                            @else
                            
                            @endif   

                            @if(  $d->twitter != '') <b class="btn btn-sm btn-outline-secondary mt-2">
                            <i class="ai-twitter me-2"></i>{{ $d->twitter }}</b>
                            @else
                            
                            @endif   
                        
                    </div>
                    <p class="card-text mt-2"> {{ $d->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


{{--


<tr>
    <td scope="row">
        <div class=" align-items-center">
            <div class="d-flex justify-content-between w-100" style="max-width: 800px;">
                <div class="col-sm-12 col-md-5 col-lg-12 mb-4 mb-md-0">
                    <div class="fs-sm fw-medium text-dark mb-1">
                        <a class="text-dark" href="{{ route('tools.show', $d->id)}}">
<i class="ai-tool fs-lg opacity-70 me-2 "></i><b>{{ $d->name }} </b>
</a>
</div>
<div class="fs-sm" id="contentToCopy-{{ $d->id }}">
    {{ $d->description }}
</div>
<div class="fs-sm">

    <form id="favorite-user" action="{{ route('favorites.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" id="fav-user-input" value="{{ $user->id }}">
        <input type="hidden" name="tool_id" id="fav-user-input" value="{{ $d->id }}">
        <button class="badge btn  btn-secondary mt-2" type="submit" id="prompt-fav-submit">
            <i class="{{ Auth::user()->toolFavorite->contains('tool_id', $d->id) ? 'ai-star-filled' : 'ai-star' }} text-warning" id="star"></i> </button>
    </form>
</div>

</div>
</div>
</div>
</td>

<td class="text-end">

    <a class="d-flex flex-column justify-content-end position-relative overflow-hidden flex-shrink-0" href="{{ route('show.index', $d->user_id) }}">

    </a>
</td>


</tr>


--}}