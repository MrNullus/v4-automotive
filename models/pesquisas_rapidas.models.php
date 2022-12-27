<?php 

require_utils(
  array( 
    'replace_values',
    'prepare_query'
  )
);

class PesquisasRapidas {
	
	private $pdo;
	private $termos_pesquisados;


	public function __construct( $pdo ) {
		$this->pdo = $pdo;
		$this->termos_pesquisados = array();
	}
	
	
	public function setTermosPesquisados( $termo_pesquisado ) {
		
		$stmt = "
		INSERT INTO PesquisasRapidas (termo) VALUES (:termo_pesquisado)
		";
		
		$find_array = array( 
			':termo_pesquisado' => $termo_pesquisado 
		);

		$stmt = prepare_query( 
			$stmt, 
			$find_array, 
			$this->pdo 
		);
		
		if ( $stmt->rowCount() > 0 ) {
			return true;
			
			$this->redefinirTermosPesquisados();
		}
		
		return false;
		
	}
	
	public function redefinirTermosPesquisados() {
		
		$stmt = "DELETE FROM PesquisasRapidas WHERE id >= 5";
		
		$stmt = $this->pdo->query( $stmt );
		
		if ( $stmt->rowCount() <= 0 ) {
			throw new Exception("Erro na redefinição do termo pesquisado", 1);		
		}
		
	}
	
	public function getTermosPesquisados() {
		
		$stmt = "
			SELECT
				P.nome,

			FROM
				Produtos P,
				PesquisasRapidas as PR

			WHERE 
				P.produto_id = PR.produto_id
		";
		
		$stmt = $this->pdo->query( $stmt );
		
		if ( $stmt->rowCount() > 0 ) {
			$termos_pesquisados = $stmt->fetchAll();
		}
		
		return $termos_pesquisados;
	}
	
}


?>