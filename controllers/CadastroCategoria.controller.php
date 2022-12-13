<?php 	 

require_once( dirname( __DIR__ ).'/minerva.config.php' );
session_start();

$campos = [ $_POST['txtNome'] ];


if (Validacao::camposObrigatorios( $campos )) {
	// # Importação necessaria
  import_models([ 'categoria' ]);

  // # Dados Iniciais
  global $_PDO;
  $categoria = new Categoria($_PDO);
  $dados = [ ':nome' => $_POST['txtNome'] ];

	if( !$categoria->cadastrar( $dados ) ) {
    go_to( 'views/cadastro_categoria.php?status=error' );
  } 

  go_to( 'views/cadastro_categoria.php?status=success' );
} else {
	go_to( 'views/cadastro_categoria.php?status=error' );
}

?>