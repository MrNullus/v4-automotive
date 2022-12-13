<?php  

require_utils(
  [
    'replace_values',
    'prepare_query'
  ]
);

/**
* 
*/
class Categoria
{
	private $pdo;
	private $categorias = array();


	public function __construct( $pdo ) {
		$this->pdo = $pdo;
	}


	public function categoriaExiste( $categoria ) {

		$stmt = "
			SELECT 
				nome 
			FROM 
				Categorias 
			WHERE 
				LOWER(nome) = LOWER(:categoria)
		";
		$find_array = array( ':categoria' => $categoria );

		$categoria = prepare_query( 
			$stmt, 
			$find_array, 
			$this->pdo 
		);

		if ( $categoria->rowCount() <= 0 ) {
			return false;
		}

		return true;

	}


	public function getNomeCategorias() {

		$stmt = "
			SELECT 
				nome 
			FROM 
				Categorias 
		";

		$stmt = $this->pdo->query($stmt);

		if ($stmt->rowCount() > 0) {
			$stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$this->categorias = $stmt;
		}

		return $this->categorias;

	}

	public function getCategorias() {

		$stmt = "
			SELECT 
				*
			FROM 
				Categorias 
		";

		$stmt = $this->pdo->query($stmt);

		if ($stmt->rowCount() > 0) {
			$stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$this->categorias = $stmt;
		}

		return $this->categorias;

	}

	public function cadastrar($find_array) {
		$status = null;

		$stmt = "
			INSERT INTO 
				Categorias 
					(nome)
				VALUES
					(:nome)
		";

		$stmt = prepare_query( $stmt, $find_array, $this->pdo );

		if ($stmt->rowCount() > 0) {
			$status = true;
		} else {
			$status = false;
		}

		return $status;

	}

}

?>