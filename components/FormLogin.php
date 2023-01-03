<?php  
require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';

?>

<form 
  class="container form-produto" 
  action="<?php echo url_controllers('AtualizarCategoria'); ?>" 
  onsubmit="
    let valueTxtEmail = document.getElementById('txtEmail').value;
    let valueTxtSenha = document.getElementById('txtSenha').value;

    if (valueTxtEmail == '') {
      swal(
          'Ops!', 
          'O campo email é obrigatório!', 
          'error'
      );
      return false;
    } 
    if (valueTxtSenha == '') {
      swal(
          'Ops!', 
          'O campo senha é obrigatório!', 
          'error'
      );
      return false;
    } 

    return true;
  " 
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

  <div class="row mb-3">
    <div>
      <label for="txtNome" class="sr-only">
        Email
      </label>
      <input 
        type="email" 
        class="form-control" 
        id="txtEmail" 
        name="txtEmail" 
        aria-describedby="txtNome" 
        placeholder="Email"
      />
    </div>
  </div>

  <div class="row">
    <div>
      <label for="txtID" class="sr-only form-label">
        Senha
      </label>
      <input 
        type="password" 
        class="form-control" 
        id="txtSenha" 
        name="txtSenha" 
        aria-describedby="txtSenha" 
        aria-hidden="true"
        placeholder="Senha"
      />
    </div>
  </div>

  <div class="group-button mt-4">
    <input 
      type="submit" 
      value="Atualizar" 
      class="btn btn-cadastar" 
      onclick="validarForm()"
    />

    <button type="reset" class="btn btn-danger">
      Limpar
    </button>
  </div>
</form>         
