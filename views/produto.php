<?php  
require_once 'C:\\xampp\\htdocs\\v4-automotive'. '\\minerva.config.php';

// Verificar se houve alguma requisição
if (!isset($_GET['p']) || empty($_GET['p'])) {
  go_to('');
}

// # Importanto classes necessarias
import_models(
  [ 'produto' ]
);

// # Dados Iniciais
$id = intval($_GET['p']);

global $_PDO;
$produto = new Produto($_PDO);
$produto = $produto->getProduto([':id' => $id]);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!--===== Meta Configs =====-->
    <?php renderComponent( 'MetaConfigs' ); ?>

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>

    <!--===== Links File CSS  =====-->
    <?php extends_styles([ 'singleProduto' ]); ?>
  </head>

  <body>

    <!-- page -->
    <div class="container-fluid page">

      <!-- header main -->
      <?php renderComponent('Header'); ?>
      <!-- end of header main -->

      <main id="root">

        <div class="container container-product">
        	<section class="single-row">
        		<div class="column brand-product">
              <div 
                style="
                background-image: 
                  url(<?php echo assets( 'img/produtos', $produto['img']); ?>)
                " 
                class="img"
              >
              </div>
        		</div>

        		<div class="column info">
        			<div class="content">
        				<h4 class="name">
	        				<?php echo $produto['nome']; ?>
	        			</h4>

                <p class="price">
                  <strong>Preço:</strong> R$ <?php echo $produto['preco']; ?>
                </p>

                <p class="unidade">
                  <strong>Unidade:</strong> <?php echo $produto['unidade']; ?>
                </p>

	        			<p class="description">
                  <strong>Descrição:</strong> 
	        				<?php echo $produto['descricao']; ?>
	        			</p>

                <p class="obs">
                  <strong>Observação:</strong>
                  <?php echo $produto['obs']; ?>
                </p>
        			</div>

        			<a href="#" class="btn btn-primary btn-sale">
        				Comprar
        			</a>
        		</div>
        	</section>
        </div>
      </main>

      <!-- footer -->
      <?php renderComponent('Footer'); ?>
      <!-- end of footer -->

    </div>
    <!-- end of page -->

    <?php renderComponent( 'ScriptComponent' ); ?>
  </body>

</html>