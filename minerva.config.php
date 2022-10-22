<?php

$_PDO = new PDO("mysql:host=localhost;dbname=v4_automotive", "root", "");

require_once('./utils/require_utils.utils.php');

require_utils(
	array(
		'import_models',
		'url_base',
		'renderComponent',
		'assets'
	)
);

?>
