<?php
require 'config.php';

if (isset($_SESSION['sigup'])) {
  header('Location: views/login.php');
} else {

}
?>


<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <!--===== Meta Tags =====-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="">

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>

    <!--===== Link CSS  =====-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css">

    <!--===== Scripts JS  =====-->
    

  </head>

  <body>

    <?php require './views/header.php' ?>


    


    <?php require './views/footer.php' ?>

  </body>

</html>