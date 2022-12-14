<?php  

require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';
session_start();

$campos = array(
  $_POST[ 'txtNome' ], 
  $_POST[ 'inputImage' ], 
  $_POST[ 'slctCategorias' ],
  $_POST[ 'txtUnidade' ],
  $_POST[ 'txtPreco' ],
  $_POST[ 'txtDescricao' ],
);


if (Validacao::camposObrigatorios( $campos )) {

  // # Importação necessaria
  import_models( array( 'produto' ) );

  // # Dados Iniciais
  global $_PDO;
  $produto = new Produto($_PDO);

  $dados = array();

  $dados[ ':nome' ]         = $_POST[ 'txtNome' ];
  $dados[ ':img' ]          = $_POST[ 'inputImage' ];
  $dados[ ':categoria_id' ] = intval($_POST[ 'slctCategorias' ]);
  $dados[ ':unidade' ]      = $_POST[ 'txtUnidade' ];
  $dados[ ':preco' ]        = $_POST[ 'txtPreco' ];
  $dados[ ':descricao' ]    = $_POST[ 'txtDescricao' ];
  
  if ( empty($_POST[ 'txtDescricao' ]) && !isset($_POST[ 'txtObservacao' ]) ) {
    $dados[ ':obs' ] = "Não há nenhuma descrição do produto.";
  } else {
    $dados[ ':obs' ] = $_POST[ 'txtObservacao' ];
  }

  if( !$produto->cadastrar( $dados ) ) {
    go_to( '/views/admin/produtos/cadastro.php?status=error' );
  } 

  go_to( '/views/admin/produtos/cadastro.php?status=success' );
} else {
  go_to( '/views/admin/produtos/cadastro.php?status=error' );
}

?>