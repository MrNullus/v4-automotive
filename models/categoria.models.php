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
	private $categoria = array();


	public function __construct( $pdo ) {
		$this->pdo = $pdo;
	}


	public static function categoriaExiste( $categoria ) {

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

	public static function getNomeCategoria($find_array) {

		$stmt = "
			SELECT
				categoria_id, 
				nome
			FROM 
				Categorias as C
			WHERE 
				nome = :nome
		";

		$stmt = prepare_query( $stmt, $find_array, $this->pdo );

		if ($stmt->rowCount() > 0) {
			$stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$this->categoria = $stmt;
		}

		return $this->categoria;

	}

	public static function getNomeCategorias() {

		$stmt = "
			SELECT 
				categoria_id, 
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

	public static function getCategorias() {

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

	public static function cadastrar($find_array) {
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

	public static function atualizar($dados) {
		$status = null;

		$stmt = "
			UPDATE  
				Categorias as C
			SET 
				C.nome = :nome
			WHERE
				C.id = :id
		";

		$stmt = prepare_query( $stmt, $dados, $this->pdo );

		if ($stmt->rowCount() > 0) {
			$status = true;
		} else {
			$status = false;
		}

		return $status;
	}

	public static function deletar($dados) {
		$status = null;

		$stmt = "
			DELETE FROM
				Categorias as C
			WHERE 
				C.id = :id
		";

		$stmt = prepare_query( $stmt, $dados, $this->pdo );

		if ($stmt->rowCount() > 0) {
			$status = true;
		} else {
			$status = false;
		}

		return $status;
	}

}

?>