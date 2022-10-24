<?php 

require_once( dirname(__DIR__).'/minerva.config.php' );

if (isset( $_POST['searchInput'] ) && !empty( $_POST['searchInput'] )) {

  // # Importantação necessario
  import_models( array( 'pesquisas_rapidas' ) );

  // # Dados Iniciais
  global $_PDO;
  global $_VALIDACAO;

  $pesquisas_rapidas = new PesquisasRapidas( $_PDO );

  $pesquisas_rapidas->setTermosPesquisados( $_POST['searchInput'] );

  // header("Location: index.php");
  go_to('index.php');
  exit();

}  else {

  // header("Location: index.php");
  go_to('index.php');
  exit();  
  
}

?>