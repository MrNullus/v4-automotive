<?php 	 

require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';
session_start();

$campos = [ 
  $_POST['txtEmail'], 
  $_POST['txtSenha'] 
];


if (Validacao::camposObrigatorios( $campos )) {
	// # Importação necessaria
  import_models([ 'admin' ]);

  // # Dados Iniciais
  global $_PDO;
  $admin = new Admin($_PDO);

  $dados = [ 
    ':email' => $campos[0],
    ':senha' => $campos[1]
  ];

	if( !$admin->sigIn( $dados ) ) {
    go_to( '/views/login.php?status?status=error' );
  } 

  go_to( '/views/login.php?status=success' );
} else {
	go_to( '/views/login.php?status=error' );
}

?>