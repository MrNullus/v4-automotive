<?php  
// # Importanto classes necessarias
import_models(
  array( 'categoria' )
);

// # Dados Iniciais
global $_PDO;

$categoria = new Categoria($_PDO);

$categorias = $categoria->getNomeCategorias();
?>


<div class="container mb-4">
    <nav class="nav col-12 col-md-auto mb-2 d-flex justify-content-center mb-md-0 header__navbar-categories">
      <button class="btn btn-dropdown" id="btnDropdown">
        |||
      </button> 

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 list-links">
        <?php foreach($categorias as $categoria): ?>
        <li class="nav-link">
          <a 
            href="<?php echo url_base(); ?>/views/catalogo.php?c=<?php echo mb_strtolower($categoria['nome']); ?>">
            <?php echo $categoria['nome']; ?>  
          </a>
        </li>  
        <?php endforeach; ?>
      </ul>        
    </nav>
 </div>