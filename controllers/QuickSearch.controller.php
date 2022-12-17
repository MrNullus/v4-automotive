<?php 

require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';

if (isset( $_POST['searchInput'] ) && !empty( $_POST['searchInput'] )) {
  // # Importação necessaria
  import_models([ 'pesquisas_rapidas' ]);

  // # Dados Iniciais
  global $_PDO;
  global $_VALIDACAO;

  $pesquisas_rapidas = new PesquisasRapidas( $_PDO );
  $pesquisas_rapidas->setTermosPesquisados( $_POST['searchInput'] );

  go_to('/');
  exit();
}  else {
  go_to('/');
  exit();  
}

?>