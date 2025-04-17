@extends('layouts.userAI.app')
@section('content')
<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        <div class="col-lg-9 pt-4 pb-1 mt-2 pb-sm-4">
            <div class="card border-3 py-1 p-md-2 p-xl-3 p-xxl-4">
                <div class="card-body">
                    <form id="favorite-user-form" action="{{ route('favorites.store') }}" method="POST">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" name="fav_id" value="{{ $userShow->id }}">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="favorite_id" id="fav-id" @foreach($user->hasFavorite as $favorite) @if($favorite->fav_id == $userShow->id) value="{{$favorite->id}}" @else value='' @endif @endforeach>
                     --}}
                        <div>
                            <h3 class="h5 mb-2">{{ $tool->name }} <button id="user-fav-submit   " type="submit" class="badge  btn btn-secondary">
                        </div>
                        <div>
                            <h6>{{ $tool->description }}</h6>
                        </div>                            
                        <div>
                            <i class="ai-github text-warning" id="starUser"></i> {{ $tool->site }}
                        </div>                            
                        <div>
                            <i class="ai-tiktok text-warning" id="starUser"></i> {{ $tool->tiktok }}
                        </div>                            
                        <div>
                            <i class="ai-youtube text-warning" id="starUser"></i> {{ $tool->youtube }}
                        </div>                            
                        <div>
                            <i class="ai-facebook text-warning" id="starUser"></i> {{ $tool->facebook }}
                        </div>                            
                        <div>
                            <i class="ai-instagram text-warning" id="starUser"></i> {{ $tool->instagram }}
                        </div>                            
                    </button></h3>
                    <div>
                        <i class="ai-linkedin text-warning" id="starUser"></i> {{ $tool->linkedin }}
                    </div>                            
                    </form>                    
                </div>
            </div>


            <div class="mt-3">

                




            </div>

        </div>
        {{-- component sidebar --}}
        <x-sidebar />

    </div>
</div>

</div>

@endsection