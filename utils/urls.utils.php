<?php

function url_base() {
  return 'http://localhost:8080/v4-automotive';
}


function url_controllers( $file ) {
  return url_base() .'/controllers/'. $file .'.controller.php';
}

function get_url_view($alias) {
  $path_view = url_base().'/views';

  switch ($alias) {
    /*  
    * Views COMMONS
    */ 
    case 'app.commons.contact':
      $path_view .= '/contact.php';
      break;

    case 'app.commons.aboutus':
      $path_view .= '/aboutus.php';
      break;

    /*  
    * Views ADMINS
    */ 
    
    case 'app.admin.categoria':
      $path_view .= '/admin/categorias/';
      break;

    case 'app.admin.categoria_cadastro':
      $path_view .= '/admin/categorias/cadastro.php';
      break;

    case 'app.admin.categoria_edit':
      $path_view .= '/admin/categorias/edit.php';
      break;

    case 'app.admin.categoria_deletar':
      $path_view .= '/admin/categorias/deletar.php';
      break;


    case 'app.admin.produto':
      $path_view .= '/admin/produtos/';
      break;

    case 'app.admin.produto_cadastro':
      $path_view .= '/admin/produtos/cadastro.php';
      break;

    default:
      break;
  }

  echo $path_view;
}

?>