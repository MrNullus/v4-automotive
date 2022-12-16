<?php  
global $id, $nome;
?>

<form 
  class="container form-produto" 
  action="<?php echo url_controllers('AtualizarCategoria'); ?>" 
  onsubmit="
    let valueTxtNome = document.getElementById('txtNome').value;

    if (valueTxtNome == '') {
      swal(
          'Ops!', 
          'O campo nome é obrigatório!', 
          'error'
      );
      return false;
    } 

    document.getElementById('txtID').disabled = false;
    return true;
  " 
  method="GET"
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
      <label for="txtID" class="form-label"># ID</label>
      <input 
        type="text" 
        disabled
        class="form-control" 
        id="txtID" 
        name="txtID" 
        aria-describedby="txtID" 
        value="<?php echo $id; ?>"
      />
    </div>

    <div>
      <label for="txtNome" class="form-label">Nome</label>
      <input 
        type="text" 
        class="form-control" 
        id="txtNome" 
        name="txtNome" 
        aria-describedby="txtNome" 
        value="<?php echo $nome; ?>"
      />
    </div>

    <div class="group-button mt-4">
      <input 
        type="submit" 
        value="Cadastrar" 
        class="btn btn-cadastar" 
        onclick="validarForm()"
      />

      <button type="reset" class="btn btn-limpar">
        Limpar
      </button>
    </div>
  </div>
</form>         