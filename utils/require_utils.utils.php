<?php 

function require_utils($files) {
	foreach($files as $file) {
		require_once( dirname(__DIR__). '/utils/' .$file. '.utils.php' );
	}
}

?>