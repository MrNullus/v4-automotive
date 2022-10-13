<?php  

function assets( $asset, $file ) {
	
	$caminho_preparado = url_base().'/public/';

	switch( $asset ) {
		case 'img':
			$caminho_preparado .= '/'.$asset.'/'.$file;
			break;

		case 'css':
			$caminho_preparado .= '/'.$asset.'/'.$file;
			break;

		case 'js':
			$caminho_preparado .= '/'.$asset.'/'.$file;
			break;

		case 'bootstrap/js':
			$caminho_preparado .= '/'.$asset.'/'.$file;
			break;

		case 'bootstrap/css':
			$caminho_preparado .= '/'.$asset.'/'.$file;
			break;

		default:
			echo "Asset não encontrado";
			break;
	}

	return $caminho_preparado;

}

?>
