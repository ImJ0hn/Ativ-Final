


<div class="modal fade" id="ModalInfo{{$contato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Informações do contato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
          <div class="mb-3">
            
            <label for="InputNome" class="col-form-label">Nome:</label>
            <input type="text" readonly class="form-control" id="InputNome" name="nome" value="{{$contato->nome}}" required>
          </div>

          <div class="mb-3">
            
            <label for="InputNome" class="col-form-label">CPF:</label>
            <input type="text" readonly class="form-control" id="InputCpf" name="cpf" value="{{$contato->cpf}}" required>
          </div>

          <div class="mb-3">
            
            <label for="InputNome" class="col-form-label">Endereço:</label>
            <input type="text" readonly class="form-control" id="InputEndereco" name="endereco" value="{{$contato->endereco}}" required>
          </div>

          <div class="mb-3">
            
            <label for="InputNome" class="col-form-label">Data de nascimento:</label>
            <input type="text" readonly class="form-control" id="InputDtnasc" name="dtnasc" value="{{$contato->dtnasc}}" required>
          </div>

          <div class="mb-3">
            <label for="InputTelefone" class="col-form-label">Telefone:</label>
            <input type="text" readonly class="form-control" id="InputTelefone" name="telefone" value="{{$contato->telefone}}" required>
          </div>

          <div class="mb-3">
            <label for="InputEmail" class="col-form-label">E-mail:</label>
            <input type="email" readonly class="form-control" id="InputEmail" name="email" value="{{$contato->email}}" required>
          </div>

     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
    </form>
      </div>
    </div>
  </div>
</div>



