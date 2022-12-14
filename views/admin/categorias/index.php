<?php  
require_once '..\\..\\..\\minerva.config.php';
// require_once 'C:\\xampp\\htdocs\\v4-automotive'. '\\minerva.config.php';
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
    <title>V4 Automotive || Sobre nos</title>

    <!--===== Links File CSS  =====-->
    <link 
      rel="stylesheet" 
      href="<?php echo assets( 'css', 'reset.css' ); ?>" 
    />
    <link 
      rel="stylesheet" 
      href="<?php echo assets( 'css', 'global.css' ); ?>" 
    />
    <style>
        .categorie-list {
          display: flex;
          font-display: column;
        }
      </style>
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
        <div class="container mb-4">
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 list-links categorie-list">
            <?php foreach($categorias as $categoria): ?>
            <li class="nav-link categorie-item">
              <a 
                href="../views/catalogo.php?c=<?php echo mb_strtolower($categoria['nome']); ?>">
                <?php echo $categoria['nome']; ?>  
              </a>
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