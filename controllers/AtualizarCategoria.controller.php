<?php  
require_once 'C:\\xampp\\htdocs\\v4-automotive'. '\\minerva.config.php';

if ((!isset($_GET['txtNome']) || !isset($_GET['txtID'])) || (empty($_GET['txtNome']) || empty($_GET['txtID']))) {
	// go_to('');
}

$id = $_GET['txtID'];
$nome = $_GET['txtNome'];
echo $id . $nome;
global $_PDO;
import_models(
  array( 'categoria' )
);	

$categoria = new Categoria($_PDO);
if ($categoria->atualizar([ ':nome' => $nome, ':id' => $id ])) {
	go_to('views/admin/categorias/?op=true');
} else {
	go_to('views/admin/categorias/?op=false');
}

?>