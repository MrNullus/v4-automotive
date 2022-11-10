<?php 

//  TODO:
// Fazer o select de categorias estar dinamico (receber e exbir categorias vindas do banco)
$_ACTION_CAD_PRODUTO = array();
$response_cadastro = "";

if ( isset($_GET['f']) && !empty($_GET['f']) ) {

  $response_cadastro = $_GET['f'];  

  if ($response_cadastro == "success") {
    $_SESSION[ 'msgCadastroProduto' ] = array(
      "title"  => "sucesso !",
      "msg"    => "Produto cadastrado com Sucesso!",
      "action" => "success"
    );
  } else {
    $_SESSION[ 'msgCadastroProduto' ] = array(
      "title"  => "Ops!",
      "msg"    => "Produto não cadastrado...",
      "action" => "error"
    );
  }

  $_ACTION_CAD_PRODUTO = $_SESSION[ 'msgCadastroProduto' ];
}
?>


<form class="container form-produto" action="<?php echo url_controllers('CadastroProduto'); ?>" onsubmit="return validarForm()" method="POST">

  <div class="heading">
    <!-- mensagem de resposta do cadastro -->
    <?php if (isset($response_cadastro) && !empty($response_cadastro)): ?>

      <!-- mensagem de esrro -->
      <?php if ( $response_cadastro == "error" ): ?>  
        <h2 class="text-alert"> 
        <?php echo $_ACTION_CAD_PRODUTO['title']. " " .$_ACTION_CAD_PRODUTO['msg'];?> 
        </h2>
      <?php endif; ?>

      <!--  mensagem de sucesso -->
      <?php if ( $response_cadastro == "success" ): ?>  
        <h2 class="text-success"> 
        <?php echo $_ACTION_CAD_PRODUTO['msg'];?> 
        </h2>
      <?php endif; ?>

    <?php endif; ?>
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

    <?php renderComponent('CategoriasProduto'); ?>

    <div class="row-input-group">
      <div>
        <!-- <label for="txtUnidade" class="col-sm-2 col-form-label"></label> -->
        <div class="col-sm-11">
          <input type="number" class="form-control form-control-unidade" id="txtUnidade" name="txtUnidade" placeholder="Unidades" />
        </div>
      </div>

      <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" id="txtPreco" name="txtPreco" aria-label="Preço em reais" />
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