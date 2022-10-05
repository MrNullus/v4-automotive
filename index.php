<?php  
require_once 'minerva.config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!--===== Meta Tags =====-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="">

    <!--===== Google Fonts  =====-->

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>

    <!--===== Bootstrap CSS =====-->
    <link href="<?php echo assets('public/bootstrap/css', 'bootstrap.min.css') ?>" rel="stylesheet" >

    <!--===== Links File CSS  =====-->
    <link rel="stylesheet" href="<?php echo carregar_css('reset'); ?>">
    <link rel="stylesheet" href="<?php echo carregar_css('global'); ?>">
  </head>

  <body>

    <!-- page -->
    <div class="container-fluid page">

      <!-- header main -->
      <div class="container-cover">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 header-page"> 

        <!-- box top -->
        <div class="container header__box-top">

          <!-- single row -->
          <div class="nav col-12 col-md-auto mb-2 justify-content-around mb-md-0 row-top">
            <a href="./">
              <img 
                class="image"
                src="<?php # carregar_imagem('logo'); ?>" 
                alt="V4 Automotive" 
                aria-label="V4 Automotive" 
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
          <nav class="nav col-12 col-md-auto mb-3 justify-content-center  header__navbar-main">
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
      <!-- end of header main -->

      <main>
        <div class="banner-container">
          <div class="banner-content" id="banner-main">
          </div>
        </div>

      <div class="container">
        <!-- quick search -->
        <aside class="box-quick-search">
          <div class="title">
            <h3 class="heading">Lorem ipsum dolor sit amet.</h3>
            <div class="underline"></div>
          </div>

          <form action="">
            <div class="box-search">
              <i>🔎</i>
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

        <!-- banner logo -->
        <div class="banner-logo">
          <img src="" alt="V4 Automotive"/>
        </div>

        <!-- section features -->
        <div class="container px-4 py-3" id="custom-cards">

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

        <!-- section top products -->
        <section class="section-top-products">
          <!-- section header -->
          <header class="section-header">
            <h3 class="heading">Em alta</h3>
          </header>

          <!-- boxs -->  
          <div class="boxs">
            <!-- single box -->
            <div class="single-box">
              <div class="content">
                <h5 class="name">Coleia de Bicicleta</h5>
              </div>
            </div>

            <!-- single box -->
            <div class="single-box">
              <div class="content">
                <h5 class="name">Coleia de Bicicleta</h5>
              </div>
            </div>

            <!-- single box -->
            <div class="single-box">
              <div class="content">
                <h5 class="name">Coleia de Bicicleta</h5>
              </div>
            </div>
          </div>   
        </section>

        <!-- hero container -->
        <div class="hero-container">
          <!-- hero -->
          <div class="hero">
            <!-- content -->
            <div class="hero-content">
              <div class="title">
                <h3>Sobre nós</h3>
                <div class="underline"></div>
              </div>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, doloribus nisi molestias?</p>

              <a href="#" class="btn btn-learn-more">Saiba mais</a>
            </div>
          </div>
        </div>
        
        <!-- box section products -->
        <div class="box-section-products">

          <!-- single section product -->
          <section class="single-section-product">
            <!-- header -->
            <header class="section-header">
              <h3 class="heading">Lorem</h3>
            </header>

            <!-- boxs -->
            <div class="boxs">
              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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

              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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

              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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
            </div>   
          </section>

          <!-- single section product -->
          <section class="single-section-product">
            <!-- header -->
            <header class="section-header">
              <h3 class="heading">Lorem</h3>
            </header>

            <!-- boxs products  -->
            <div class="boxs">
              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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

              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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

              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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
            </div>   
          </section>

          <!-- single section product -->
          <section class="single-section-product">
            <!-- header -->
            <header class="section-header">
              <h3 class="heading">Lorem</h3>
            </header>

            <!-- boxs products  -->
            <div class="boxs">
              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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

              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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

              <!-- single box -->
              <div class="single-box">
                <div class="info-product">
                  <h5 class="name">Coleia de Bicicleta</h5>
                  <span class="price">12.99</span>
                  <p class="short-desc">
                    Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Assumenda, eos placeat eaque.
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
            </div>   
          </section>
        </div>

      </main>

      <!-- footer -->
      <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top page-footer">

          <div class="col mb-3">
            <!-- logo  -->
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <img src="" alt="V4 Automotive" />
            </a>
            <p class="text-muted">&copy; 2022</p>
          </div>

          <div class="col mb-3">
          </div>

          <!-- media socials -->
          <div class="col mb-3">
            <h5>Media socials</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Media 1</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Media 2</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Media 3</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Media 4</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Media 5</a></li>
            </ul>
          </div>

          <!-- features payments -->
          <div class="col mb-3 features-payments">
            <h5>Features Payments</h5>
            <ul class="nav flex-column list-payments">
              <!-- list payments -->
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted item-payment">Payment 1</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted item-payment">Payment 2</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted item-payment">Payment 3</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted item-payment">Payment 4</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted item-payment">Payment 5</a></li>
            </ul>
          </div>
        </footer>
      </div>
      <!-- end of footer -->

    </div>
    <!-- end of page -->


    <!--===== Bootstrap Bundle with Popper =====-->
    <script 
      src="<?php echo assets('bootstrap/js', 'bootstrap.bundle.min.js'); ?>" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous">
    </script>


  </body>

</html>