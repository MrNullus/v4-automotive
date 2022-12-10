<?php  
function useController( $controller ) {
	require_once dirname(__DIR__). '\controllers\\'. $controller .'.controller.php';
}
?>