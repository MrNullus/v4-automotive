<?php  

session_start();
require_once( dirname( __DIR__ ).'/minerva.config.php' );

$campos = [ $_POST['txtNome'], $_GET['id'] ];


if (Validacao::camposObrigatorios( $campos )) {
	// # Importação necessaria
  import_models([ 'categoria' ]);	

  // # Dados Iniciais
  global $_PDO;
  $categoria = new Categoria($_PDO);
  $dados = [ 
  	':nome' => $campos[0], 
  	':id'   => $campos[1];
  ];

	if( !$categoria->atualizar( $dados ) ) {
    go_to( 'views/edit_categoria.php?status=error' );
  } 

  go_to( 'views/edit_categoria.php?status=success' );
} else {
	go_to( 'views/edit_categoria.php?status=error' );
}

?>