<?php  
require_once 'minerva.config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!--===== Meta Tags =====-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="">

    <!--===== Google Fonts  =====-->

    <!--===== Title of Site =====-->
    <title>V4 Automotive</title>

    <!--===== Links File CSS  =====-->
    <link rel="stylesheet" href="<?php carregar_css('reset'); ?>">
    <link rel="stylesheet" href="<?php carregar_css('styles'); ?>">
  </head>

  <body>

    <!-- page -->
    <div class="page">

      <!-- header main -->
      <header class="header-page"> 

        <!-- box top -->
        <div class="header__box-top">

          <!-- single row -->
          <div>
            <a href="./">
              <img 
                src="<?php # carregar_imagem('logo'); ?>" 
                alt="V4 Automotive" 
                aria-label="V4 Automotive" 
              />
            </a>

            <div class="box-top__btns">
              <button class="btn btn-login">
                <i>Login</i>
              </button>

              <button class="btn btn-card">
                <i>Card</i>
              </button>
            </div>
          </div>

          <!-- navbar main -->
          <nav class="header__navbar-main">
            <button class="btn-dropdown" id="btnDropdown">
              |||
            </button>

            <ul class="list-link">
              <li class="link-item"><a href="./">Home</a></li>
              <li class="link-item"><a href="#">Item 2</a></li>
              <li class="link-item"><a href="#">Item 3</a></li>
            </ul>
          </nav>
        </div>

        <!-- navbar categories -->
        <nav class="header__navbar-categories">
          <button class="btn-dropdown" id="btnDropdown">
            |||
          </button> 

          <ul class="list-links">
            <li class="link-item"><a href="#">Item 1</a></li>
            <li class="link-item"><a href="#">Item 2</a></li>
            <li class="link-item"><a href="#">Item 3</a></li>
            <li class="link-item"><a href="#">Item 4</a></li>
          </ul>        
        </nav>

      </header>
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
        <div class="section-features">
          <!-- boxs -->
          <div class="boxs">
            <!-- single box -->
            <div class="single-box" id="feature-1">
              <div class="box-content">
                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde sunt accusamus, voluptatum.</h4>
              </div>
            </div>

            <!-- single box -->
            <div class="single-box" id="feature-2">
              <div class="box-content">
                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde sunt accusamus, voluptatum.</h4>
              </div>
            </div>

            <!-- single box -->
            <div class="single-box" id="feature-3">
              <div class="box-content">
                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde sunt accusamus, voluptatum.</h4>
              </div>
            </div>
          </div>
        </section>

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
      <footer class="page-footer">
        <!-- row -->
        <div class="row">
          <!-- logo  -->
          <div class="logo-footer">
            <img src="" alt="V4 Automotive" />
          </div>
          
          <!-- box contacts -->
          <div class="box-contacts">
            <ul class="social-media">
              <li class="link-social"><a href="#">Media 1</a></li>
              <li class="link-social"><a href="#">Media 2</a></li>
              <li class="link-social"><a href="#">Media 3</a></li>
            </ul>
          </div>
        </div>

        <!-- features payments -->
        <div class="features-payments">
          <!-- box  -->
          <div class="box">
            <!-- list payments -->
            <ul class="list-payments">
              <!-- item payment -->
              <li class="item-payment">Payment 1</li>
              <!-- item payment -->
              <li class="item-payment">Payment 2</li>
              <!-- item payment -->
              <li class="item-payment">Payment 3</li>
              <!-- item payment -->
              <li class="item-payment">Payment 4</li>
            </ul>
          </div>
        </div>
      </footer>
      <!-- end of footer -->

    </div>
    <!-- end of page -->

  </body>

</html>