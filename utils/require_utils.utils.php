<?php 
function require_utils($files) {
	foreach($files as $file) {
		require_once('./utils/'.$file.'.utils.php');
	}
}

?>