<?php  
require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
	go_to('views/admin/categorias/');
}

$id = intval($_GET['id']);

global $_PDO;
import_models(
  array( 'categoria' )
);	

$categoria = new Categoria($_PDO);
if ($categoria->deletar([ ':id' => $id ])) {
	go_to('views/admin/categorias/?op=true');
} else {
	go_to('views/admin/categorias/?op=false');
}

?>