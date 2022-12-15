<?php

function url_base() {
  return 'http://localhost:8080/v4-automotive';
}


function url_controllers( $file ) {
  return url_base() .'/controllers/'. $file .'.controller.php';
}

function get_url_view($alias) {
  $path_view = '';

  switch ($alias) {
    case 'cadastro_categoria':
      $path_view = url_base(). '/views/admin/categorias/cadastro.php';
      break;

    case 'edit_categoria':
      $path_view = url_base(). '/views/admin/categorias/edit.php';
      break;

    case 'deletar_categoria':
      $path_view = url_base(). '/views/admin/categorias/deletar.php';
      break;

    default:
      break;
  }

  echo $path_view;
}

?>