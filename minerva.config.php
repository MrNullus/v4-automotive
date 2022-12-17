<?php

define("__DIR_ROOT__", "C:\\xampp\htdocs\v4-automotive");
$_PDO = new PDO("mysql:host=localhost;dbname=v4_automotive", "root", "");

require('core/Validacao.php');
require('utils/require_utils.utils.php');

$_VALIDACAO = new Validacao();

require_utils(
	array(
		'useController',
		'renderComponent',
		'extends_styles',
		'import_models',
		'urls',
		'assets',
		'go_to'
	)
);

?>
