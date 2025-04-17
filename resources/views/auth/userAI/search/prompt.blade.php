

<div class="mt-3">
 
    <div class="tab-content">
        @foreach ($prompts as $d)
        <div role="tabpanel">
            <div class="card border-3 mt-3">
                <div class="card-body">
                <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                        <div class="me-3 me-sm-4">
                            <div class="fs-sm text-body-secondary">
                                <a class="d-flex flex-column justify-content-end position-relative overflow-hidden flex-shrink-0" href="{{ route('show.index', $d->user_id) }}">
                                    <i class="ai-user fs-lg opacity-70 me-2  text-dark "></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex-grow-1">  
                            <h5 class="card-title">{{ $d->title }}</h5>
                        </div>
                    </div>
                   
                    
                    <div class="fs-sm" id="contentToCopy-{{ $d->id }}"> {{ $d->description }}</div>
                    <div class="fs-sm">
                        <form id="favorite-prompt" action="{{ route('favorites.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" id="fav-user-input" value="{{ $user->id }}">
                            <input type="hidden" name="prompt_id" id="fav-prompt-input" value="{{ $d->id }}">
                            <button onclick="copyContent('contentToCopy-{{ $d->id }}', 'copyButton-{{ $d->id }}')" class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2" type="button" id="copyButton-{{ $d->id }}">
                                                            <i class="ai-copy me-2 ms-n1"></i>Copiar</button>
                            <button class="badge btn  btn-secondary mt-2" type="submit" id="prompt-fav-submit">
                                <i class="{{ Auth::user()->favPrompt->contains('prompt_id', $d->id) ? 'ai-star-filled' : 'ai-star' }} text-warning" id="star"></i> </button>
            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




