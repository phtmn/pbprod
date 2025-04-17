<div class="mt-3">
    <div class="tab-content">
        @foreach ($promptSpace as $d)
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