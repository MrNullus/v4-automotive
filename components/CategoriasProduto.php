<?php  
// # Importanto classes necessarias
import_models(
  array( 'categoria' )
);

// # Dados Iniciais
global $_PDO;

$categoria = new Categoria($_PDO);

$categorias = $categoria->getCategorias();
?>

<div class="form-floating">

  <select class="form-select" id="slctCategorias" name="slctCategorias" aria-label="Floating label select example">
    <option selected>Open this select menu</option>

    <?php foreach($categorias as $categoria): ?>
    <option value="<?php echo $categoria['categoria_id']; ?>">
      <?php print_r($categoria['nome']); ?>
    </option>
    <?php endforeach; ?>
  </select>

  <label for="slctCategorias">Categorias</label>

</div>