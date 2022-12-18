<?php
require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';

if (
  ( !isset($_GET['c']) || !isset($_GET['id']) ) || 
  ( empty($_GET['c'])  || empty($_GET['id'])  )
) {
	go_to('views/admin/categorias/');
}

$id = $_GET['id'];
$nome = $_GET['c'];
?>

<html lang="pt-br">
  <head>
    <!--===== Meta Configs =====-->
    <?php renderComponent( 'MetaConfigs' ); ?>

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>    

    <!--===== Links File CSS  =====-->
    <?php extends_styles([ 'formCadastro' ]); ?>

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
     		<h3 class="subheading">Atualizar Categoria</h3>
     		<br>

				<?php renderComponent( 'FormEditCategoria' ); ?>	
      </main>

      <!-- footer -->
      <?php renderComponent( 'Footer' ); ?>
      <!-- end of footer -->

    </div>
    <!-- end of page -->

    <?php renderComponent( 'ScriptComponent' ); ?>
  </body>

</html>