<?php

require_utils(
  [
    'replace_values',
    'prepare_query'
  ]
);

class Admin 
{

  private $pdo;

  public function sigIn( $dados ) {
    $logged = false;

		$stmt = "
			SELECT 
				 adm.email,
         adm.senha
			FROM 
				Admin adm
			WHERE 
				email = :email,
        senha = :senha
		";

		$stmt = prepare_query( 
			$stmt, 
			$dados, 
			$this->pdo 
		);

		if ( $stmt->rowCount() > 0 ) {
      $logged = true;
		}

		return $logged;

	}

}

?>

