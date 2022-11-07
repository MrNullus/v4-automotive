<?php
require 'config.php';

$aviso = "";
$divConsulta = "";

$consulta = new Consulta();
$consulta->conecta($pdo);


$consultas = $consulta->get_consultas();

if (count($consultas) < 0) 
{
  $divConsulta = "Não houve consultas cadastradas!";
  return;
}

foreach($consultas as $consulta) 
{
  $medico = $consulta['nomeMedico'];
  $paciente = $consulta['nomePaciente'];
  $dia = $consulta['dia'];
  $hora = $consulta['hora'];
  $valor = $consulta['valor'];
  
  $divConsulta  .= "
  <div class='card col-5 col-lg-5'>
    <div class='card-wrapper mbr-flex'>
        <div class='card-box align-left'>
          <p class='mbr-text mbr-fonts-style mb-4 display-4'>
            <strong>Médico:</strong> <br>
            {$medico}
          </p>
          
          <p class='mbr-text mbr-fonts-style mb-4 display-4'>
            <strong>Paciente:</strong> <br>
            {$paciente}
          </p>
          
          <p class='mbr-text mbr-fonts-style mb-4 display-4'>
            <strong>Data da consulta:</strong> <br>
            {$dia}
          </p>
          
          <p class='mbr-text mbr-fonts-style mb-4
          display-4'>
            <strong>Hora da consulta:</strong> <br>
            {$hora}
          </p>
          
          <p class='mbr-text mbr-fonts-style mb-4 display-4'>
            <strong>Valor da consulta:</strong> <br>
            R$ {$valor}
          </p>
        </div>
    </div>
  </div>
  ";
}

echo $divConsulta;

?>