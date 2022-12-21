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
    <?php extends_styles([ 'contact' ]); ?>
  </head>

  <body>

    <!-- page -->
    <div class="container-fluid page">

      <!-- header main -->
      <?php renderComponent('Header'); ?>
      <!-- end of header main -->

      <div class="banner-container">
        <div class="banner-content" id="banner-main">
        </div>
      </div>

      <main class="container">

        <h2 class="heading text-center">Entre em contato conosco!</h2>

        <section class="container section-contact">
          <nav class="nav">
            <ul class="list-media d-flex">
              <li class="list-item">
                <a href="#">Facebook</a>
              </li>
              <li class="list-item">
                <a href="#">Instagram</a>
              </li>
            </ul>
          </nav>
        </section>

      </main>

      <!-- footer -->
      <?php renderComponent( 'Footer' ); ?>
      <!-- end of footer -->

    </div>
    <!-- end of page -->

    <?php renderComponent( 'ScriptComponent' ); ?>
  </body>

</html>'