<link 
  rel="stylesheet" 
  href="<?php echo assets( 'css', 'sectionProducts.css' ); ?>" 
/>


<?php  
// # Importanto classes necessarias

import_models(
  array( 'produto', 'categoria' )
);


// # Dados Iniciais
global $_PDO;

$produto   = new Produto($_PDO);
$categoria = new Categoria($_PDO);

$todosOsProdutos        = array();
$produtosCategoriaAtual = array();

$listaCategorias = array(
  'Peças', 'Motores', 'Baterias de Carro'
);

$qtdeMaximaDeProdutos = 10;
$qtdeAtualDeProdutos  = 0;


// # Pegar os produtos cadastrado
foreach ($listaCategorias as $item) {

  if ( $categoria->categoriaExiste( $item ) ) {
    $produtosRecebidos = array();
    $produtosRecebidos = $produto->getProdutosDaCategoria( $item,  'all');

    $todosOsProdutos[ $item ] = $produtosRecebidos;
  }  

}

$countQtdeCategorias = count(array_keys( $todosOsProdutos ));


// # Exibir os produtos
for ($i = 0; $i < $countQtdeCategorias; $i++): 
  $categoriasRecebidas = array_keys( $todosOsProdutos ); 
  $categoriaAtual = $categoriasRecebidas[ $i ];

  $produtosCategoriaAtual = $todosOsProdutos[ $categoriaAtual ];
?>

<!-- box section products -->
<div class="box-section-products">

  <!-- single section product -->
  <section class="single-section-product">
    <!-- header -->
    <header class="section-header">
      <h3 class="heading">
        <?php echo $categoriasRecebidas[$i]; ?>
      </h3>
    </header>

    <!-- boxs -->
    <div class="boxs">

      <?php 
      foreach($produtosCategoriaAtual as $produto) { 
        $qtdeAtualDeProdutos++;
      ?>
        <?php if ($qtdeAtualDeProdutos != $qtdeMaximaDeProdutos): ?>
        <!-- single box -->
        <div class="single-box">
          
          <div class="info-product">
            <h5 class="name"> 
              <?php echo $produto['nome']; ?>
            </h5>

            <div 
              style="background-image: url(<?php echo assets( 'img/produtos', $produto['img']); ?>)" 
              class="img"
            >
            </div>

            <span class="price">
              R$ <?php echo $produto['preco']; ?>
            </span>
            </span>
            <p class="short-desc">
              Descrição:
              <span><?php echo $produto['descricao']; ?></span>
            </p>
          </div>

          <!-- 
        		TODO: 
        			- Proximo passo colocar um sistema de classificação
        			<div class="box-avaliations">
        			  <span>*</span>
        			  <span>*</span>
        			  <span>*</span>
        			  <span>*</span>
        			  <span>*</span>
        			</div> 
      		-->

          <div class="product-btns">
            <a href="../views/produto.php?p=<?php echo $produto['id']; ?>" class="btn btn-sale">
              Comprar agora
            </a>
            <button class="btn btn-card">+</button>
          </div>
        </div>
        <!-- end single box -->
        <?php endif; ?>
      <?php } ?>

    </div>   
    <!-- end boxs -->

  </section>
  <!-- end single section product -->
</div>
<?php endfor; ?>