<?php 

//  TODO:
// Fazer o select de categorias estar dinamico (receber e exbir categorias vindas do banco)

?>



<form action="<?php echo url_controllers('CadastroProduto'); ?>" method="POST">
  <div class="mb-3">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="email" class="form-control" id="txtNome" name="txtNome" aria-describedby="txtNome" />
    </div>

    <div class="mb-3">
      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
      <input class="form-control" type="file" id="formFileMultiple" id="formFileMultiple" multiple />
    </div>

    <div class="form-floating">
      <select class="form-select" id="slctCategorias" name="slctCategorias" aria-label="Floating label select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="slctCategorias">Categorias</label>
    </div>

    <div class="mb-3 row">
      <label for="txtUnidade" class="col-sm-2 col-form-label">Unidades</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="txtUnidade" name="txtUnidade" />
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control" id="txtPreco" name="txtPreco" aria-label="Preço em reais)" />
    </div>

    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="txtDescricao" name="txtDescricao" style="height: 100px"></textarea>
      <label for="txtDescricao">Descrição</label>
    </div>

    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="txtObservacao" name="txtObservacao" style="height: 100px"></textarea>
      <label for="txtObservacao">Observação</label>
    </div>
  </div>
</form>