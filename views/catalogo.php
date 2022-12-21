<!-- 
TODO:
	- Pagina para os produtos
-->
<?php  
require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';
require_once 'C:\\xampp\\htdocs\\v4-automotive\\controllers\\CatalogoProdutos.controller.php';

$_CONTEUDO = '';
$_CATEGORIA_BUSCADA = '';

// Verificar se foi passado o parametro 'c' de categorias
if (isset( $_GET['c'] ) || !empty( $_GET['c'] )) {
	$_CONTEUDO = CatalogoProdutosController::exibirPorCategoria( $_GET['c'] );
	$_CATEGORIA_BUSCADA = $_GET['c'];
}
?>

<html lang="pt-br">
	<head>
    <!--===== Meta Configs =====-->
    <?php renderComponent( 'MetaConfigs' ); ?>

    <!--===== Title of Site =====-->
    <title>V4 Automotive || Sobre nos</title>

    <!--===== Links File CSS  =====-->
    <?php extends_styles([ 'sectionProducts', 'singleProduto' ]); ?>
  </head>
  <body>

    <!-- page -->
    <div class="container-fluid page">

      <!-- header main -->
      <?php renderComponent('Header'); ?>
      <!-- end of header main -->

		  <main class="container">

		  	<!-- box section products -->
				<div class="box-section-products">

				  <!-- single section product -->
				  <section class="single-section-product">
				    <!-- header -->
				    <header class="section-header">
				      <h3 class="heading">
				        <?php echo ucfirst($_CATEGORIA_BUSCADA); ?>
				      </h3>
				    </header>

				    <!-- boxs -->
    				<div class="boxs">
		  				<?php echo $_CONTEUDO; ?>
    				</div>
				  </section>
				</div>
		  </main>

      <!-- footer -->
      <?php renderComponent( 'Footer' ); ?>
      <!-- end of footer -->

    </div>
    <!-- end of page -->

    <?php renderComponent( 'ScriptComponent' ); ?>
  </body>

</html>