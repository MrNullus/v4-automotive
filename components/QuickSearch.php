<?php 

// # Importanto classes necessarias
import_models (
  array( 'pesquisas_rapidas' )
);

// # Dados Iniciais
global $_PDO;
global $_VALIDACAO;

$aviso = "";
$pesquisas_rapidas = new PesquisasRapida( $_PDO );


if ( 
  $_VALIDACAO->camposObrigatorios( 
    array( $_POST['searchInput'], $_POST['searchInput'])
  )
) {
  $pesquisas_rapidas->setTermosPesquisados( $_POST['searchInput'] );
} else {
  $aviso = "*Preencha o campo";
}

?>


<aside class="box-quick-search">
  <div class="title">
    <h3 class="heading">Lorem ipsum dolor sit amet.</h3>
    
    <?php if ( empty($aviso) ): ?>
    <h2 class="heading"> <?php echo $aviso; ?> </h3>
    <?php endif; ?>
    
    <div class="underline"></div>
  </div>

  <form action="">
    <div class="box-search">
      <i class="fa fa-search" aria-hidden="true"></i>
      
      <input 
        class="input" 
        type="search" 
        name="searchInput" 
        id="searchInput" 
        placeholder="O que deseja?" 
      />
    </div>
  </form>

  <div class="box-search-recents">
    <h4 class="subheading">Buscas recentes</h4>
    <ul class="list-recents">
      <li class="item-recent"><a href="#">Item 1</a></li>
      <li class="item-recent"><a href="#">Item 2</a></li>
      <li class="item-recent"><a href="#">Item 3</a></li>
    </ul>
  </div>
</aside>