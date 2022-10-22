<?php  
// # Importanto classes necessarias
import_class(
  array( 'categoria' )
);

// # Dados Iniciais
global $_PDO;

$categoria = new Categoria($_PDO);

$categorias = $categoria->getCategorias();

print_r($categorias);
?>



<div class="container mb-4">
    <nav class="nav col-12 col-md-auto mb-2 d-flex justify-content-center mb-md-0 header__navbar-categories">
      <button class="btn btn-dropdown" id="btnDropdown">
        |||
      </button> 

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 list-links">
        <li class="nav-link"><a href="#">Item 1</a></li>
        <li class="nav-link"><a href="#">Item 2</a></li>
        <li class="nav-link"><a href="#">Item 3</a></li>
        <li class="nav-link"><a href="#">Item 4</a></li>
        <li class="nav-link"><a href="#">Item 4</a></li>
        <li class="nav-link"><a href="#">Item 4</a></li>
        <li class="nav-link"><a href="#">Item 4</a></li>
      </ul>        
    </nav>
 </div>