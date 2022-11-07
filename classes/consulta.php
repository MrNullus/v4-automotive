<?php
class Consulta {

  private $pdo;


  public function conecta($pdo) 
  {
    $this->pdo = $pdo;
  }

  public function cadastrar_consulta($dados) 
  {
    $dados_preparados = array();

    $stmt = $this->pdo->prepare("INSERT INTO consulta (crm, cod_paciente, dia, hora, valor) VALUES (:crm, :cod_paciente, :dia, :hora, :valor)");

    $stmt->bindValue(':crm', $dados[0]);
    $stmt->bindValue(':cod_paciente', $dados[1]);
    $stmt->bindValue(':dia', $dados[2]);
    $stmt->bindValue(':hora', $dados[3]);
    $stmt->bindValue(':valor', $dados[4]);

    $stmt->execute();
  }
  
  public function get_consultas() 
  {
    $consultas = array();
      
    $stmt = $this->pdo->prepare("
    SELECT 
      d.nome as nomeMedico,
      p.nome as nomePaciente,
      dia,
      hora,
      valor
      
    FROM 
      dentista as d,
      paciente as p,
      consulta as c
      
    WHERE 
      d.crm  = c.crm AND
      p.cod_paciente = c.cod_paciente
    ");
    
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) 
    {
      $consultas = $stmt->fetchAll();
    } 
    
    return $consultas;  
  }
  
  public function buscarConsulta($busca) 
  {
    $consultaEncontrada = array();
    
    $stmt = $this->pdo->prepare("
    SELECT 
      d.nome as nomeMedico,
      p.nome as nomePaciente,
      dia,
      hora,
      valor
      
    FROM 
      dentista as d,
      paciente as p,
      consulta as c
      
    WHERE 
      d.crm  = c.crm AND
      p.cod_paciente = c.cod_paciente AND
      :colunaBusca = :valorBusca
    ");
    
    $stmt->bindValue(":colunaBusca", $busca[0]);
    $stmt->bindValue(":valorBusca", $busca[0]);
    
    $stmt->execute();
      
    return $consultaEncontrada;
  }

}

?>