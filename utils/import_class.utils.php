<?php 
function import_class($files) {

	foreach($files as $file) {
		require_once('./class/'.$file.'.class.php');
	}

}
?>