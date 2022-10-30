<?php 

//  TODO:
// Fazer o select de categorias estar dinamico (receber e exbir categorias vindas do banco)

?>


<style>
.text-alert,
.text-success {
  color: #f1f1f1;
  width: 100%;
  padding: 1.2rem;
  text-align: center;
  margin: 2rem 0;
  border-radius: 11px;
  font-size: 1.2rem!important;
  font-weight: 600;
  box-shadow: 2px 2px 4px #c3c3c3;
}

.text-alert{
  background-color: #ff1616;
}
.text-success {
  background-color: #16FF67;
  color: #262626!important;
}

.form-produto .row {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.row > * {
  padding: 0;
}

.row-input-group {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: start;
}

.row-input-group > div {
  width: 50%;
  height: 40px;
}

.form-floating {
  padding-left: 0.12rem;
}

.form-control-unidade {
  margin: 0;
}

.group-button {
  display: flex;
  flex: 1 auto;
  justify-content: center;
  gap: 1rem;
}

.group-button, 
input[type=submit],
button {
  min-width: 50%;
}

.btn-cadastar {
  background: #000;
  color: white;
}
.btn-cadastar:hover {
  border-color: #000;
}
.btn-limpar {
  background: #fe1616;
  color: white;
}
.btn-limpar:hover {
  border-color: #fe1616;
}
</style>

<form class="container form-produto" action="<?php echo url_controllers('CadastroProduto'); ?>" method="POST">

  <div class="heading">
    <!-- mensagem de resposta do cadastro -->
    <?php if (isset( $response_cadastro )) { ?>
      <!-- mensagem de erro -->
      <?php if ( $response_cadastro == "error" ) { ?>  
      <h2 class="text-alert"> 
        <?php echo $_SESSION[ 'msgCadastroProduto' ]; ?> 
      </h2>
      <?php } ?>

      <!--  mensagem de sucesso -->
      <?php if ( $response_cadastro == "success" ) { ?>  
      <h2 class="text-success"> 
        <?php echo $_SESSION[ 'msgCadastroProduto' ]; ?> 
      </h2>
      <?php } ?>
    <?php } ?>
  </div>

  <div class="row">
    <div>
      <label for="txtNome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="txtNome" name="txtNome" aria-describedby="txtNome" />
    </div>

    <div>
      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
      <input class="form-control" type="file" name="inputImage" id="inputImage" multiple />
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

    <div class="row-input-group">
      <div>
        <!-- <label for="txtUnidade" class="col-sm-2 col-form-label"></label> -->
        <div class="col-sm-11">
          <input type="number" class="form-control form-control-unidade" id="txtUnidade" name="txtUnidade" placeholder="Unidades" />
        </div>
      </div>

      <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" id="txtPreco" name="txtPreco" aria-label="Preço em reais)" />
      </div>
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

  <div class="group-button mt-4">
    <input type="submit" value="Cadastrar" class="btn btn-cadastar" />

    <button type="reset" class="btn btn-limpar">
      Limpar
    </button>
  </div>
</form>