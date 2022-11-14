<?php  
require_once 'minerva.config.php';
?>

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
  </head>

  <body>

    <!-- page -->
    <div class="container-fluid page">

      <!-- header main -->
      <?php renderComponent('Header'); ?>
      <!-- end of header main -->

      <main id="root">
        <div class="banner-container">
          <div class="banner-content" id="banner-main">
          </div>
        </div>

      <div class="container">
        <!-- quick search -->
        <?php renderComponent( 'QuickSearch' ); ?>
        <!-- end quick search -->

        <!-- banner logo -->
        <div class="banner-logo">
          <img src="" alt="V4 Automotive"/>
        </div>
        <!-- end banner logo -->

        <!-- section features -->
        <?php renderComponent( 'SectionFeatures' ); ?>
        <!-- end section features -->

        <!-- section top products -->
        <section class="section-top-products">
          <!-- section header -->
          <header class="section-header">
            <h3 class="heading">Em alta</h3>
          </header>

          <!-- boxs -->  
          <div class="boxs">
            <!-- single box -->
            <div class="single-box">
              <div class="content">
                <h5 class="name">Coleia de Bicicleta</h5>
              </div>
            </div>

            <!-- single box -->
            <div class="single-box">
              <div class="content">
                <h5 class="name">Coleia de Bicicleta</h5>
              </div>
            </div>

            <!-- single box -->
            <div class="single-box">
              <div class="content">
                <h5 class="name">Coleia de Bicicleta</h5>
              </div>
            </div>
          </div>   
        </section>
        <!-- end section top products -->

        <!-- hero container -->
        <div class="hero-container">
          <!-- hero -->
          <div class="hero">
            <!-- content -->
            <div class="hero-content">
              <div class="title">
                <h3>Sobre nós</h3>
                <div class="underline"></div>
              </div>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, doloribus nisi molestias?</p>

              <a href="#" class="btn btn-learn-more">Saiba mais</a>
            </div>
          </div>
        </div>
        <!-- end hero container -->

        <!-- box section products -->
        <?php renderComponent( 'SectionProducts' ); ?>  
        <!-- box section products -->

      </main>

      <!-- footer -->
      <?php renderComponent( 'Footer' ); ?>
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

</html>'