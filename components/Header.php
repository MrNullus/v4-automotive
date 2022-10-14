<?php 

?>

<div class="container-cover">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 header-page"> 

  <!-- box top -->
  <div class="container header__box-top">

    <!-- single row -->
    <div class="nav col-12 col-md-auto mb-3 justify-content-between mb-md-0 row-top">
      <a href="./">
        <img 
          class="image rounded-3 logo-header"
          src="<?php echo assets('img', 'v4automotive.png') ?>" 
          alt="V4 Automotive" 
          aria-label="V4 Automotive" 
          width="66%"
        />
      </a>

      <div class="col-md-3 text-end">
        <button class="btn btn-danger btn-login">
          <i>Login</i>
        </button>

        <button class="btn btn-light btn-card">
          <i>Card</i>
        </button>
      </div>
    </div>

    <!-- navbar main -->
    <nav class="nav col-12 col-md-auto mb-3 mt-5 justify-content-center  header__navbar-main">
      <button class="btn btn-dropdown" id="btnDropdown">
        |||
      </button>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 list-link">
        <li class="nav-link btn link-active"><a href="./">Home</a></li>
        <li class="nav-link"><a href="#">Contato</a></li>
        <li class="nav-link"><a href="#">Sobre nos</a></li>
      </ul>
    </nav>
  </div>

  <div class="container mb-4">
    <!-- navbar categories -->
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

  </header>
</div>




