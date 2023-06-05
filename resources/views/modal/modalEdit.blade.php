
<form method="POST" action="">
@foreach ($contatos as $contato)
<div class="modal fade" id="ModalEdit{{$contato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar contato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="">
      <div class="modal-body">
     
            @csrf
          <div class="mb-3">
            
            <label for="InputNome" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="InputNome" name="nome" value="{{$contato->nome}}" required>
          </div>

          <div class="mb-3">
            <label for="InputTelefone" class="col-form-label">Telefone:</label>
            <input type="text" class="form-control" id="InputTelefone" value="{{$contato->telefone}}" required>
          </div>

          <div class="mb-3">
            <label for="InputEmail" class="col-form-label">E-mail:</label>
            <input type="email" class="form-control" id="InputEmail" value="{{$contato->email}}" required>
          </div>

     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>
  </div>
</div>
@endforeach
</form>

