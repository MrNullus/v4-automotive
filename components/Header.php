<?php 

// # Dados Iniciais
session_start();

?>

<div class="container-cover">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 header-page border-bottom"> 

  <!-- box top -->
  <div class="container  header__box-top">

    <!-- single row -->
    <div class="nav col-12 col-md-auto mb-3 justify-content-between mb-md-0 row-top">
      <a href="<?php echo url_base(); ?>">
        <img 
          class="image rounded-3 logo-header logo-header"
          src="<?php echo assets('img/logo', 'v4automotive.png'); ?>" 
          alt="V4 Automotive" 
          aria-label="V4 Automotive"
        />
      </a>

      <div class="col-md-3 text-end">
        <a 
          href="<?php echo url_base(); ?>/views/login.php" 
          class="btn btn-danger btn-login"
          title="Login" 
        >
          <i 
            class="fa fa-user-o" 
            aria-hidden="true"
          ></i>
          <span class="sr-only">Usuario</span>
        </a>

        <button 
          class="btn btn-dark btn-card" 
          title="Carrinho de compras"
        >
          <i 
            class="fa fa-shopping-cart" 
            aria-hidden="true"
          ></i>
          <span class="sr-only">Shopping Cart</span>
        </button>
      </div>
    </div>

    <!-- navbar main -->
    <nav class="nav col-12 col-md-auto mb-3 mt-5 justify-content-center  header__navbar-main">
      <button class="btn btn-dropdown" id="btnDropdown">
        |||
      </button>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 list-link">
        <li class="nav-link btn link-active btn-outline"><a class="text-dark" href="<?php echo url_base(); ?>">Home</a></li>

        <?php if (isset( $_SESSION['adm'] ) && !empty( $_SESSION['adm'] )): ?>
          <li class="nav-link">
            <a href="<?php get_url_view('app.admin.produto_cadastro') ?>">
              Cadastrar Produto
            </a>
          </li>
          <li class="nav-link">
            <a href="<?php get_url_view('app.admin.categoria_cadastro') ?>">
              Cadastrar Categoria
            </a>
          </li>
        <?php endif; ?>
        
        <li class="nav-link">
            <a href="<?php get_url_view('app.commons.contact') ?>">
              Contato
            </a>
          </li>
          <li class="nav-link">
            <a href="<?php get_url_view('app.commons.aboutus'); ?>">
              Sobre nos
            </a>
          </li>
      </ul>
    </nav>
  </div>

  <!-- navbar categories -->
  <?php renderComponent( 'NavbarCategories' ); ?>

  </header>
</div>