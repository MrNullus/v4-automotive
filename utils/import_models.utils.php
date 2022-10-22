<?php 
function import_models( $files ) {

	foreach( $files as $file ) {
		require_once( './models/'. $file .'.class.php' );
	}

}
?>