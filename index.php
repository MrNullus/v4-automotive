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


    <div class="flex align-item-center hero-container">
      <div class="hero">
        <h2>Heero</h2>

        <div class="hero-contnt">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex consectetur vel ad, quod totam incidunt doloremque repudiandae nostrum officiis nesciunt rem sequi expedita at soluta aut ipsum non harum enim!
            Vero unde, nemo, consequuntur ducimus ab quisquam accusantium id perspiciatis recusandae, asperiores itaque explicabo voluptatibus. Laborum numquam excepturi, natus assumenda fugit adipisci ex possimus voluptas rerum voluptate, debitis inventore id!
            Quidem cupiditate pariatur, et vero sapiente unde deleniti ut in aperiam, quam, laudantium hic omnis rem nobis? A, aperiam harum quidem doloribus eos ducimus ea, expedita quia quod saepe omnis?
            Minus nesciunt temporibus deserunt animi illum tempora tenetur velit dolores pariatur a, repellat quibusdam sequi fuga itaque. Placeat dolorem nobis dignissimos voluptates suscipit iusto inventore illum, rem voluptatum alias molestias!
          </p>
        </div>
      </div>
    </div>


    <?php require './views/footer.php' ?>

  </body>

</html>