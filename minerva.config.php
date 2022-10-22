<?php

$_PDO = new PDO("mysql:host=localhost;dbname=v4_automotive", "root", "");

require_once('./core/Validacao.php');
require_once('./utils/require_utils.utils.php');

$validacao = new Validacao();

require_utils(
	array(
		'import_models',
		'url_base',
		'renderComponent',
		'assets'
	)
);

?>
