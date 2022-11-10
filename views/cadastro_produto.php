<?php  
require_once dirname(__DIR__). '\minerva.config.php';
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

        <!-- form produto -->
        <?php renderComponent('FormProduto'); ?>
        <!-- end of form produto -->  
        
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