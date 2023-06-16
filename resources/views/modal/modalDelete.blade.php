

<form method="POST" action="{{ route('deletarContato.destroy', ['id' => $contato->id]) }}">

    @csrf
    @method('delete')
    <div class="modal fade" id="modalExcluir{{$contato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja excluir o contato de {{$contato->nome}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>

</form>