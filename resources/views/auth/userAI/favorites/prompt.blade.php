<tr>
    <td scope="row">
        <div class="align-items-center">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-9 mb-4 mb-md-0">
                    <div class="fs-sm fw-medium text-dark mb-1"><i class="ai-terminal fs-lg opacity-70 me-2 "></i> <b>{{ $d->title }} </b></div>
                    <div class="fs-sm" id="contentToCopy-{{ $d->id }}"> {{ $d->description }}</div>
                    <div class="fs-sm">                       
                        <button onclick="copyContent('contentToCopy-{{ $d->id }}', 'copyButton-{{ $d->id }}')" class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2" type="button" id="copyButton-{{ $d->id }}">
                            <i class="ai-copy me-2 ms-n1"></i>Copiar</button>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-end">
                    <form action="{{ route('favorites.destroy', $favPrompt->id) }}" method="post">
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