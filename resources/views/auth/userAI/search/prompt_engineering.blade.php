<div class="mt-3">
    <div class="tab-content">
        @foreach ($prompt_engineering as $d)
        <div role="tabpanel">
            <div class="card border-3 mt-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                        <div class="me-3 me-sm-4">
                            <div class="fs-sm text-body-secondary">
                                <a class="d-flex flex-column justify-content-end position-relative overflow-hidden flex-shrink-0" href="{{ route('show.index', $d->id) }}">
                                    <i class="ai-user fs-lg opacity-70 me-2  text-dark "></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex-grow-1"> <!-- Adicionado para ocupar o espaço restante -->
                            <h5 class="card-title">{{ $d->name }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


{{--
@if (isset($prompt_engineering))
@foreach ($prompt_engineering as $d)
<tr>
    <td scope="row">
        <div class=" align-items-center">
            <div class="d-flex justify-content-between w-100" style="max-width: 800px;">
                <div class="col-sm-12 col-md-5 col-lg-12 mb-4 mb-md-0">
                    <div class="fs-sm fw-medium text-dark mb-1">
                         
                        <i class="ai-user fs-lg opacity-70 me-2 "></i><b>{{ $d->name }} </b>
</div>
<div class="fs-sm" id="contentToCopy-{{ $d->id }}">
    {{ $d->email }}
</div>
<div class="fs-sm">

    <form id="favorite-user" action="{{ route('favorites.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" id="fav-user-input" value="{{ $user->id }}">
        <input type="hidden" name="engineer_id" id="fav-user-input" value="{{ $d->id }}">

        <button class="badge btn  btn-secondary mt-2" type="submit" id="prompt-fav-submit">
            <i class="{{ Auth::user()->toolEngineer->contains('engineer_id', $d->id) ? 'ai-star-filled' : 'ai-star' }} text-warning" id="star"></i> </button>
        <button onclick="copyContent('contentToCopy-{{ $d->id }}', 'copyButton-{{ $d->id }}')" class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2" type="button" id="copyButton-{{ $d->id }}">
            <i class="ai-award me-2 ms-n1"></i>{{ $d->prompts_count }}</button>


    </form>
</div>

</div>
</div>
</div>
</td>

<td class="text-end">


</td>


</tr>
@endforeach
@endif
--}}