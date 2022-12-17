<?php 	 

require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';
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
    go_to( '/views/admin/categorias/cadastro.php?status=error' );
  } 

  go_to( '/views/admin/categorias/cadastro.php?status=success' );
} else {
	go_to( '/views/admin/categorias/cadastro.php?status=error' );
}

?>