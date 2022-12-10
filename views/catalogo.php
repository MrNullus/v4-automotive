<!-- 
TODO:
	- Pagina para os produtos
-->
<?php  
require_once dirname(__DIR__). '\minerva.config.php';
require_once dirname(__DIR__). '\controllers\CatalogoProdutos.controller.php';

// Verificar se foi passado o parametro 'c' de categorias
if (isset( $_GET['c'] ) && !empty( $_GET['c'] )) {
	$conteudo = CatalogoProdutosController::exibirPorCategoria( $_GET['c'] );
	echo $conteudo;
}
?>