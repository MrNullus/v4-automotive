<?php 
function import_models( $files ) {

	foreach( $files as $file ) {
		require_once( dirname(__DIR__). '/models/'. $file .'.models.php' );
	}

}
?>