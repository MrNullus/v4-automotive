<?php
class Paciente {

  private $pdo;

  public function conecta($pdo) 
  {
    $this->pdo = $pdo;
  }

  public function getCodPaciente($nome) 
  {
    $cod_paciente = 0;

    $stmt = $this->pdo->prepare("SELECT cod_paciente FROM paciente WHERE nome = :nome");
    $stmt->bindValue(":nome", $nome);
    $stmt->execute();

    $cod_paciente = $stmt->fetch();
    $cod_paciente = $cod_paciente['cod_paciente'];

    return $cod_paciente;
  }

}

?>