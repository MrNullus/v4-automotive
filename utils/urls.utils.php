<?php

function url_base() {
  return 'http://localhost:8080/v4-automotive';
}


function url_controllers( $file ) {
  return url_base() .'/controllers/'. $file .'.controllers.php';
}

?>