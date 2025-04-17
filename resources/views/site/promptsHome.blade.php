


    <section class="bg-secondary position-relative py-4 py-md-5" id="prompts">
      <div class="container position-relative zindex-2">
        <div class="table-responsive">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>                 
                <th>Prompt</th>               
                <th> </th>

              </tr>
            </thead>
            <tbody>
              @forelse(getPrompt() as $d)
              <tr>
             
                <td>
                  <div class="fs-sm" id="contentToCopy-{{ $d->id }}"> {{ $d->description }}</div>
                </td>
              
                <td><button onclick="copyContent('contentToCopy-{{ $d->id }}', 'copyButton-{{ $d->id }}')" class="btn btn-sm btn-outline-primary w-100 w-md-auto mt-2" type="button" id="copyButton-{{ $d->id }}">
                    <i class="ai-copy me-2 ms-n1"></i>Copiar</button></td>

              </tr>
              @empty
              <p class="text-warning">Nenhum Prompt</p>
              @endforelse


            </tbody>
            <tfoot>
              <tr>
              
                <th>Descrição</th>
              
                <th> </th>

              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </section>

 

  