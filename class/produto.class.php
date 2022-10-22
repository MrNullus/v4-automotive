<?php
require_utils(
  array( 
    'replace_values',
    'prepare_query'
  )
);


class Produto 
{

	private $pdo;


	public function __construct( $pdo ) {
		$this->pdo = $pdo;
	}


	public function getProdutos( $categoria, $qtde ) {

		$stmt = "";
		$clausulaDeQtde = "";
		$produtos = array();

		if ($qtde != 'all') {
			$clausulaDeQtde = "AND P.produto_id <= :qtde";
		} 

		$stmt = "
			SELECT
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

}

?>