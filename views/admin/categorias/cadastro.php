<?php  
require_once __DIR_ROOT__. '\minerva.config.php';
?>

<html lang="pt-br">
  <head>
    <!--===== Meta Configs =====-->
    <?php renderComponent( 'MetaConfigs' ); ?>

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>    

    <!--===== Links File CSS  =====-->
    <link 
      rel="stylesheet" 
      href="<?php echo assets( 'css', 'reset.css' ); ?>" 
    />
    <link 
      rel="stylesheet" 
      href="<?php echo assets( 'css', 'global.css' ); ?>" 
    />
    <link 
      rel="stylesheet" 
      href="<?php echo assets( 'css', 'FormProduto.css' ); ?>" 
    />

    <!-- Scripts -->
    <script 
      src="<?php echo assets( 'js', 'validacoes.js' ); ?>">
    </script>

    <!-- Linkando a biblioteca Sweet -->
    <script 
      src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script>
  </head>

  <body>

    <!-- page -->
    <div class="container-fluid page">

      <!-- header main -->
      <?php renderComponent('Header'); ?>
      <!-- end of header main -->

     	<main id="root">
     		<h3 class="subheading">Cadastrar Produto</h3>

     		<br>
        <!-- form produto -->
        <?php renderComponent('FormCadastroCategoria'); ?>
        <!-- end of form produto -->  
      </main>

      <!-- footer -->
      <?php renderComponent( 'Footer' ); ?>
      <!-- end of footer -->

    </div>
    <!-- end of page -->

    <?php renderComponent( 'ScriptComponent' ); ?>
  </body>

</html>