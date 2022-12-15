<?php  
$_ACTION_CAD_CATEGORIA = array();
$response_cadastro = "";

if ( isset($_GET['status']) && !empty($_GET['status']) ) {

  $response_cadastro = $_GET['status'];  

  if ($response_cadastro == "success") {
    $_SESSION[ 'msgCadastroCategoria' ] = array(
      "title"  => "Sucesso!",
      "msg"    => "Categoria cadastrada com sucesso!",
      "action" => "success"
    );
  } else {
    $_SESSION[ 'msgCadastroCategoria' ] = array(
      "title"  => "Ops!",
      "msg"    => "Categoria não cadastrada...",
      "action" => "error"
    );
  }

  $_ACTION_CAD_CATEGORIA = $_SESSION[ 'msgCadastroCategoria' ];

}
?>

<form 
  class="container form-produto" 
  action="<?php echo url_controllers('CadastroCategoria'); ?>" 
  onsubmit="return validarForm()" 
  method="POST"
>
	<div class="heading">
    <!-- mensagem de resposta do cadastro -->
    <?php if (isset($response_cadastro) && !empty($response_cadastro)): ?>

      <!-- mensagem de esrro -->
      <?php if ( $response_cadastro == "error" ): ?>  
        <h2 class="text-alert"> 
	        <?php echo $_ACTION_CAD_CATEGORIA['title'] ?> 
	        <?php echo $_ACTION_CAD_CATEGORIA['msg']; ?> 
        </h2>
      <?php endif; ?>

      <!--  mensagem de sucesso -->
      <?php if ( $response_cadastro == "success" ): ?>  
        <h2 class="text-success"> 
        	<?php echo $_ACTION_CAD_CATEGORIA['msg']; ?> 
        </h2>
      <?php endif; ?>

    <?php endif; ?>
  </div>

  <div class="row">
    <div>
      <label for="txtNome" class="form-label">
      	Nome
      </label>
      <input 
      	type="text" 
      	class="form-control" 
      	id="txtNome" 
      	name="txtNome" 
      	aria-describedby="txtNome" 
      />
    </div>

    <div class="group-button mt-4">
	    <input 
	    	type="submit" 
	    	value="Cadastrar" 
	    	class="btn btn-cadastar" 
	    />

	    <button type="reset" class="btn btn-limpar">
	      Limpar
	    </button>
  	</div>
  </div>
</form>
