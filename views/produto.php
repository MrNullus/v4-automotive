<?php  
require_once dirname(__DIR__). '\minerva.config.php';

// Verificar se houve alguma requisição
if (!isset($_GET['p']) && empty($_GET['p'])) {
  go_to('index.php');
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
    <!--===== Meta Tags =====-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="">

    <!--===== Google Fonts  =====-->

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>

    <!--===== Font Awesome 4.7.0 =====-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>

    <!--===== Bootstrap CSS =====-->
    <link 
      href="<?php echo assets( 'bootstrap/css', 'bootstrap.min.css' ); ?>" 
      rel="stylesheet" 
    />

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
      href="<?php echo assets( 'css', 'singleProduto.css' ); ?>" 
    />
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
                style="background-image: url(<?php echo assets( 'img/produtos', $produto['img']); ?>)" 
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


    <!--===== Bootstrap Bundle with Popper =====-->
    <script 
      src="<?php echo assets('bootstrap/js', 'bootstrap.bundle.min.js'); ?>" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous">
    </script>

  </body>

</html>