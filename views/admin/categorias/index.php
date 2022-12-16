<?php
require_once 'C:\\xampp\\htdocs\\v4-automotive'. '\\minerva.config.php';
import_models(
  array( 'categoria' )
);

// # Dados Iniciais
global $_PDO;

$categoria = new Categoria($_PDO);
$categorias = $categoria->getNomeCategorias();
$resultadoBusca = null;

if (isset($_GET['search']) && !empty($_GET['search'])) {
  $categoriaPesquisada = [ ':nome' => $_GET['search'] ];
  $categoriaBuscada = $categoria->getNomeCategoria($categoriaPesquisada);
  
  if (count($categorias[0]) != 0) {
    $categorias = $categoriaBuscada;  
    $resultadoBusca = 200;
  } else {
    $resultadoBusca = 400;
  }
} 
?>

<html lang="pt-br">
  <head>
    <!--===== Meta Configs =====-->
    <?php renderComponent( 'MetaConfigs' ); ?>

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>

    <!--===== Links File CSS  =====-->
    <link
      rel="stylesheet"
      href="<?php echo assets( 'css', 'reset.css' ); ?>"
    />
    <link
      rel="stylesheet"
      href="<?php echo assets( 'css', 'global.css' ); ?>"
    />
    <link
      rel="stylesheet"
      href="<?php echo assets( 'css', 'categorias.css' ); ?>"
    />
  </head>

  <body>

    <!-- page -->
    <div class="container-fluid page">

      <?php if (isset($_GET['op']) || !empty($_GET['op'])): ?>
        <?php if ($_GET['op'] == 'true'): ?>
          <script>
            setTimeout(() => {
              alert('Operação feita com êxito!');
            }, 1000);
          </script>   
        <?php else: ?>
          <script>
            setTimeout(() => {
              alert('Ops, a operação falhou...');
            }, 1000);
          </script>   
        <?php endif ?>
      <?php endif ?>

      <!-- header main -->
      <?php renderComponent('Header'); ?>
      <!-- end of header main -->

      <div class="banner-container">
        <div class="banner-content" id="banner-main">
        </div>
      </div>

      <main class="container categorie-box">
        <div class="container d-flex header justify-content-between align-items-center mb-4">
          <h2 class="subheading">Categorias</h2>

          <a
            class="btn btn-primary btn-success btn-add"
            href="<?php echo get_url_view('cadastro_categoria'); ?>"
          >
            <i class="fa fa-plus" aria-hidden="true"></i>
          </a>
        </div>

        <form method="GET" onsubmit="return false" class="container d-flex header box-search justify-content-between align-items-center mb-4">
          <input 
            type="search" 
            name="search" 
            class="input input-search" 
            id="txtSearch" 
            placeholder="Buscar por..."
          />

          <button
            class="btn btn-primary btn-success btn-add btn-search"
            onclick="
              let categoriaPesquisada = document.querySelector('.input-search').value.toLowerCase();

              if (categoriaPesquisada !== '') {
                window.location.href = `<?php get_url_view('search_categoria'); ?>?search=${categoriaPesquisada}`;
              }
            "
          >
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>

        <div class="container mb-4">
          <ul class="nav col-md-auto mb-2 justify-content-center mb-md-0 list-links categorie-list">

            <?php if ($resultadoBusca == 200 || count($categorias) != 0): ?>
              <?php foreach($categorias as $categoria): ?>
              <li 
                class="nav-link categorie-item" 
                  data-key="<?php echo $categoria['categoria_id']; ?>"
              >
                <a
                  href="../views/catalogo.php?c=<?php echo mb_strtolower($categoria['nome']); ?>">
                  <?php echo $categoria['nome']; ?>
                </a>

                <div class="btn-actions">
                  <!-- <button
                    onclick="
                      if(confirm('Deseja excluir a categoria?')) {
                        window.location.href = '<?php get_url_view('deletar_categoria'); ?>?id=<?php echo $categoria['categoria_id']; ?>';
                      }
                    "
                    class="btn btn-danger btn-remove"
                  >
                    <i class="fa fa-times" aria-hidden="true"></i>
                  </button> -->

                  <button 
                    class="btn btn-primary-outline btn-edit"
                    onclick="
                      window.location.href = `
                      <?php echo get_url_view('edit_categoria').'?c='.$categoria['nome'].'&id='.$categoria['categoria_id']; ?>
                      `;
                    " 
                  >
                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                  </button> 
                </div>
              </li>
              <?php endforeach; ?>
            <?php else: ?>
              <li 
                class="nav-link categorie-item" 
              >
                Sem nada...
              </li>       
            <?php endif ?>
          </ul>
        </div>
      </main>

      <!-- footer -->
      <?php renderComponent( 'Footer' ); ?>
      <!-- end of footer -->

    </div>
    <!-- end of page -->

    <?php renderComponent( 'ScriptComponent' ); ?>
  </body>

</html>