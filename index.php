<?php  
require_once 'minerva.config.php';
?>

<html lang="pt-br">
  <head>
    <!--===== Meta Configs =====-->
    <?php renderComponent( 'MetaConfigs' ); ?>

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>    

    <!--===== Links File CSS  =====-->
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

        <!-- box section products -->
        <?php renderComponent( 'SectionProducts' ); ?>  
        <!-- box section products -->

      </main>

      <!-- footer -->
      <?php renderComponent( 'Footer' ); ?>
      <!-- end of footer -->

    </div>
    <!-- end of page -->

    <?php renderComponent( 'ScriptComponent' ); ?>
  </body>

</html>'