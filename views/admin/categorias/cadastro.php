<?php  
require_once 'C:\\xampp\\htdocs\\v4-automotive'. '\\minerva.config.php';
?>

<html lang="pt-br">
  <head>
    <!--===== Meta Configs =====-->
    <?php renderComponent( 'MetaConfigs' ); ?>

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>    

    <!--===== Links File CSS  =====-->
    <?php extends_styles([ 'formCadastro' ]); ?>

    <!-- Scripts -->

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
     		<h3 class="subheading">Cadastrar Categoria</h3>

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