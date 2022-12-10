<?php

require_utils(
  [
    'replace_values',
    'prepare_query'
  ]
);


class Produto 
{

	private $pdo;


	public function __construct( $pdo ) {
		$this->pdo = $pdo;
	}
	

	public function getProduto( $id ) {

		$stmt = "";
		$produto = array();
		$find_array = $id;

		$stmt = "
			SELECT
				P.produto_id as id,
				P.nome,
				P.img,
				C.nome as categoria,
				P.unidade,
				P.preco,
				P.descricao,
				P.obs

			FROM
				Produtos as P,
				Categorias as C

			WHERE 
				P.produto_id = :id AND
				P.categoria_id = C.categoria_id 
		";

		$stmt = prepare_query( $stmt, $find_array, $this->pdo );

		if ($stmt->rowCount() > 0) {
			$produto = $stmt->fetch(PDO::FETCH_ASSOC);
		}

		return $produto;

	}

	public function getProdutos() {

		$stmt = "";
		$produtos = array();
		$find_array = $dados;

		$stmt = "
			SELECT
				P.produto_id as id,
				P.nome,
				P.img,
				C.nome as categoria,
				P.unidade,
				P.preco,
				P.descricao,
				P.obs

			FROM
				Produtos as P,
				Categorias as C

			WHERE 
				P.categoria_id = C.categoria_id 
		";


		$stmt = $this->pdo->query($stmt);

		if ($stmt->rowCount() > 0) {
			$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		return $produtos;

	}
	
	public function getProdutosDaCategoria( $categoria, $qtde ) {

		$stmt = "";
		$clausulaDeQtde = "";
		$produtos = array();

		if ($qtde != 'all') {
			$clausulaDeQtde = "AND P.produto_id <= :qtde";
		} 

		$stmt = "
			SELECT
				P.produto_id as id,
				P.nome,
				P.img,
				C.nome as categoria,
				P.unidade,
				P.preco,
				P.descricao,
				P.obs

			FROM
				Produtos P,
				Categorias C

			WHERE 
				P.categoria_id = C.categoria_id AND
				LOWER( C.nome ) = LOWER( :categoria )
		";

		$find_array = array( ':categoria' => $categoria );

		$stmt = prepare_query( $stmt, $find_array, $this->pdo );

		if ( $stmt->rowCount() > 0 ) {
			$produtos = $stmt->fetchAll();
		}

		return $produtos;

	}

	public function cadastrar($dados) {

		$stmt = "
			INSERT INTO 
				Produtos 
					(nome, img, categoria_id, unidade, preco, descricao, obs)
				VALUES
					(:nome, :img, :categoria_id, :unidade, :preco, :descricao, :obs)
		";

		$find_array = $dados;

		$stmt = prepare_query( $stmt, $find_array, $this->pdo );

		if ( $stmt->rowCount() > 0 ) {
			return true;
		}	

		return true;
		
	}

}

?>