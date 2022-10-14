<?php  
// # Importanto classes necessarias
import_class(
  array( 'produto' )
);


// # Dados Iniciais
global $_PDO;

$produto  = new Produto($_PDO);

$todosOsProdutos = array();
$listaCategorias = array(
  'Peças', 'Motores', 'Oleos'
);


// # Pegar os produtos cadastrado
foreach ($listaCategorias as $categoria) {

  if ( $produto->categoriaExiste( $categoria ) ) {
    $produtosRecebidos = array();
    $produtosRecebidos = $produto->getProdutos( $categoria,  'all');

    $todosOsProdutos[ $categoria ] = $produtosRecebidos;
  }  

}
$produtosCategoriaAtual = array();
$countQtdeCategorias = count( array_keys( $todosOsProdutos ) );


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

      <?php foreach($produtosCategoriaAtual as $produto): ?>
      <!-- single box -->
      <div class="single-box">
        
        <div class="info-product">
          <h5 class="name"> 
            <?php echo $produto['nome']; ?>
          </h5>

          <span class="price">
            <?php echo $produto['preco']; ?>
          </span>
          <span class="unid">
            <?php echo $produto['unidade']; ?>
          </span>
          <p class="short-desc">
            <?php echo $produto['descricao']; ?>
          </p>
        </div>

        <div class="box-avaliations">
          <span>*</span>
          <span>*</span>
          <span>*</span>
          <span>*</span>
          <span>*</span>
        </div>

        <div class="product-btns">
          <a href="#" class="btn btn-sale">Comprar</a>
          <button class="btn-card">+</button>
        </div>
      </div>
      <!-- end single box -->
      <?php endforeach; ?>

    </div>   
    <!-- end boxs -->

  </section>
  <!-- end single section product -->
</div>
<?php endfor; ?>