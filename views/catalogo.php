<!-- 
TODO:
	- Pagina para os produtos
-->
<?php  
require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';
require_once 'C:\\xampp\\htdocs\\v4-automotive\\controllers\\CatalogoProdutos.controller.php';

// Verificar se foi passado o parametro 'c' de categorias
if (isset( $_GET['c'] ) && !empty( $_GET['c'] )) {
	$conteudo = CatalogoProdutosController::exibirPorCategoria( $_GET['c'] );
	echo $conteudo;
}
?>