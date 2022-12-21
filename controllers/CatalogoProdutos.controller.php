<?php

require_once 'C:\\xampp\\htdocs\\v4-automotive\\minerva.config.php';
import_models( array( 'produto' ) );


class CatalogoProdutosController {
	
	public static function exibirPorCategoria( $categoria ) {
		global $_PDO;
		$produto = new Produto($_PDO);
		
		$conteudo = '';
		$produtos = $produto->getProdutosDaCategoria( 
			$categoria, 'all'
		);
				
		foreach($produtos as $produto) {
			$conteudo .= "
		    <!-- single box -->
		    <div class='single-box'>
			
				<div class='info-product'>
				  <h5 class='name'> 
						{$produto['nome']}
				  </h5>

				  <div 
            style='background-image: url(".assets( 'img/produtos', $produto['img']).")'
            class='img'
          >
          </div>

				  <span class='price'>
						{$produto['preco']}
				  </span>
				  <span class='unid'>
						{$produto['unidade']}
				  </span>
				  <p class='short-desc'>
						{$produto['descricao']}
				  </p>
				</div>

				<!-- 
				TODO: 
					- Proximo passo colocar um sistema de classificação
					<div class='box-avaliations'>
					  <span>*</span>
					  <span>*</span>
					  <span>*</span>
					  <span>*</span>
					  <span>*</span>
					</div> 
				-->

				<div class='product-btns'>
            <a 
              href='./views/produto.php?p={$produto['id']}'
              class='btn btn-sale'
            >
              Comprar agora
            </a>
            <button class='btn btn-card'>+</button>
          </div>
			</div>
			<!-- end single box -->
			";
		}
		
	  return $conteudo;
	}
	
}

?>