<?php
class Dentista {

  private $pdo;


  public function conecta($pdo) 
  {
    $this->pdo = $pdo;
  }

  public function getCrm($nome) 
  {
    $crm = 0;

    $stmt = $this->pdo->prepare("SELECT crm FROM dentista WHERE nome = :nome");
    $stmt->bindValue(":nome", $nome);
    $stmt->execute();

	if($stmt->rowCount() > 0)
    {
      $crm = $stmt->fetch();
	  $crm = $crm['crm'];
	} else 
	{
	  $crm = -1;
	}
  
    return $crm;
  }

  public function crmExistente($crm) 
  {
    $stmt = $this->pdo->prepare("SELECT crm FROM dentista WHERE crm = :crm");

    $stmt->bindValue(":crm", $crm);
    $stmt->execute();

    if($stmt->rowCount() > 0)
    {
      return true;
	}
	
    return false;
  }
  
  public function cadastrar($dados) 
  {
	$stmt = $this->pdo->prepare("INSERT INTO dentista (crm, nome, espec) VALUES (:crm, :nome, :espec)");
	
	$stmt->bindValue(":crm", $dados[0]);
	$stmt->bindValue(":nome", $dados[1]);
	$stmt->bindValue(":espec", $dados[2]);
	
	$stmt->execute();
  }

}

?>