<?php
require_once 'C:\\xampp\\htdocs\\v4-automotive'. '\\minerva.config.php';
import_models(
  array( 'categoria' )
);

// # Dados Iniciais
global $_PDO;

$categoria = new Categoria($_PDO);
$categorias = $categoria->getNomeCategorias();
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
  </head>

  <body>

    <!-- page -->
    <div class="container-fluid page">

      <!-- header main -->
      <?php renderComponent('Header'); ?>
      <!-- end of header main -->

      <div class="banner-container">
        <div class="banner-content" id="banner-main">
        </div>
      </div>

      <main class="container categorie-box">
        <header class="container d-flex header justify-content-between align-items-center mb-4">
          <h2 class="subheading">Categorias</h2>

          <a
            class="btn btn-primary btn-success btn-add"
            href="<?php echo get_url_view('cadastro_categoria'); ?>"
          >
            <i class="fa fa-plus" aria-hidden="true"></i>
          </a>
        </header>

        <div class="container mb-4">
          <ul class="nav col-md-auto mb-2 justify-content-center mb-md-0 list-links categorie-list">
            <?php foreach($categorias as $categoria): ?>
            <li class="nav-link categorie-item">
              <a
                href="../views/catalogo.php?c=<?php echo mb_strtolower($categoria['nome']); ?>">
                <?php echo $categoria['nome']; ?>
              </a>

              <div class="btn-actions">
                <button
                  onclick="
                    if(confirm('Deseja excluir a categoria?')) {
                      window.location.href = '<?php get_url_view('deletar_categoria'); ?>';
                      console.log('<?php get_url_view('deletar_categoria'); ?>');
                    }
                  "
                  class="btn btn-danger btn-remove"
                >
                  <i class="fa fa-times" aria-hidden="true"></i>
                </button>

                <a 
                  class="btn btn-primary-outline btn-edit"
                  href="<?php get_url_view('edit_categoria'); ?>"
                >
                  <i class="fa fa-pencil-square" aria-hidden="true"></i>
                </a>
              </div>
            </li>
            <?php endforeach; ?>
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
                  "
