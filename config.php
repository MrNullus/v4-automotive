<?php
$pdo = new PDO("mysql:host=localhost;dbname=projeto_cadmo_sa","root","");

require_once('classes/administrador.php');
require_once('classes/dentista.php');
require_once('classes/paciente.php');
require_once('classes/consulta.php');

function url_base() {
  return "http://localhost:8080/cadmo-sa/";
}
?>