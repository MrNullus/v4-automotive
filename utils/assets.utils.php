<?php  

function assets( $asset, $file ) {

	$caminho_preparado = url_base(). '/public/'. $asset .'/'. $file;

	return $caminho_preparado;
	
}

?>
