<?php  
require '../config.php';

$adm = new Administrador();
$adm->conecta($pdo);

if (
	
    empty($_POST['nome'])  && !isset($_POST['nome'])  &&
	empty($_POST['email']) && !isset($_POST['email']) &&
	empty($_POST['senha']) && !isset($_POST['senha'])
) 
{
	$aviso = "Erro! Volte a pagina de Login e preencha as infromações corretamente... <br> <a style='text-decoration: underline; font-size: 2rem;' href='../login.php'>Cadastro</a>";

} else 
{
	if ($adm->esseAdmExiste($_POST['senha']))
	{
		
		$aviso = "
		Administrador já cadastrado! 
		<br><br> 
		<a style='text-decoration: underline; font-size: 2rem;' href='../cadastrar-adm.php'>
			Cadastrar outro
		</a> 
		<br><br>  
		ou 
		<br><br> 
		<a style='text-decoration: underline; font-size: 2rem;' href='../login.php'>
			Entrar
		</a>"; 
		
	} else 
	{
		$adm->setNome($_POST['nome']);
		$adm->setEmail($_POST['email']);
		$adm->setSenha($_POST['senha']);
		
		if ($adm->cadastrar()) 
		{	
			$aviso = "Administrador cadastrado com sucesso!";

		} else 
		{
			$aviso = "
			Administrador não cadastrado...
			<br><br> 
			volte a página e tente novamente
			<a style='text-decoration: underline; font-size: 2rem;' href='../cadastrar-adm.php'>
				voltar
			</a> ";
			
		}
	}
}
?>


<!DOCTYPE html>
<html>
  <head>
    <!-- Site made with Mobirise Website Builder v5.6.13, https://mobirise.com -->
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="generator" content="Mobirise v5.6.13, mobirise.com" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:title" content="Reservas" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1"
    />
    <link
      rel="shortcut icon"
      href="<?php echo url_base(); ?>assets/images/vecteezy-modern-and-professional-dental-logo-design-suitable-for-96x96.png"
      type="image/x-icon"
    />
    <meta name="description" content="" />

    <title>Cadmo S.A || Reservas</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="<?php echo url_base(); ?>assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo url_base(); ?>assets/bootstrap/css/bootstrap-grid.min.css" />
    <link
      rel="stylesheet"
      href="<?php echo url_base(); ?>assets/bootstrap/css/bootstrap-reboot.min.css"
    />
    <link rel="stylesheet" href="<?php echo url_base(); ?>assets/animatecss/animate.css" />
    <link rel="stylesheet" href="<?php echo url_base(); ?>assets/dropdown/css/style.css" />
    <link rel="stylesheet" href="<?php echo url_base(); ?>assets/socicon/css/styles.css" />
    <link rel="stylesheet" href="<?php echo url_base(); ?>assets/theme/css/style.css" />
    <link
      rel="preload"
      href="https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <noscript>
      <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      />
    </noscript>
    <link
      rel="preload"
      href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <noscript>
      <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      />
    </noscript>
    <link
      rel="preload"
      as="style"
      href="<?php echo url_base(); ?>assets/mobirise/css/mbr-additional.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo url_base(); ?>assets/mobirise/css/mbr-additional.css"
      type="text/css"
    />

    <script src="<?php echo url_base(); ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo url_base(); ?>assets/smoothscroll/smooth-scroll.js"></script>
    <script src="<?php echo url_base(); ?>assets/ytplayer/index.js"></script>
    <script src="<?php echo url_base(); ?>assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="<?php echo url_base(); ?>assets/theme/js/script.js"></script>
    <script src="<?php echo url_base(); ?>assets/formoid/formoid.min.js"></script>
  </head>

  <body>
    <section
      data-bs-version="5.1"
      class="menu cid-s48OLK6784"
      once="menu"
      id="menu1-q"
    >
      <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
          <div class="navbar-brand">
            <span class="navbar-logo">
              <a href="index.html#top">
                <img
                  src="<?php echo url_base(); ?>assets/images/vecteezy-modern-and-professional-dental-logo-design-suitable-for-96x96.png"
                  alt="Cadmo S.A"
                  style="height: 3.8rem"
                />
              </a>
            </span>
            <span class="navbar-caption-wrap"
              ><a
                class="navbar-caption text-primary display-7"
                href="index.html#header1-f"
                >Cadmo S.A</a
              ></span
            >
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-bs-toggle="collapse"
            data-target="#navbarSupportedContent"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4"
                                href="<?php echo url_base(); ?>">Home</a>
                        </li>

                        <?php if (empty($_SESSION['adm_logado'])  && !isset($_SESSION['adm_logado'])): ?>
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4"
                                href="#section-sobrenos">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4"
                                href="#section-servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4"
                                href="#section-consultas">Consultas</a>
                        </li>
                        <li class="nav-item">   
                            <a class="nav-link link text-black text-primary display-4"
                                href="#section-contatos">Contatos</a>    
                        </li>

                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4"
                                href="login.php">Login</a>
                        </li>
                        <?php endif; ?>

                        <?php if (!empty($_SESSION['adm_logado']) && isset($_SESSION['adm_logado'])): ?>
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4"
                                href="reservas.php">Reservas</a>
                        </li>
                        <?php endif; ?>
                    </ul>

                    <?php if (!empty($_SESSION['adm_logado']) && isset($_SESSION['adm_logado'])): ?>
                    <div class="navbar-buttons mbr-section-btn">
						<a class="btn btn-primary btn-danger-outline  display-4" style="color: black!important;" href="./cadastrar-dentista.php">Cadastrar dentista</a>
					
                        <a class="btn btn-primary display-4" href="marcar-consulta.php">Marcar Consulta</a>
                    </div>
                    <?php endif; ?>
                </div>
      </nav>
    </section>

    <section data-bs-version="5.1" class="form6 cid-tgN756Npvs" id="form6-13" style="height:100vh">
      <div class="container">
        <div class="mbr-section-head">
          <h3
            class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"
          >
            <strong><?php echo(utf8_encode($aviso)); ?></strong>
          </h3>
        </div>
        
        </div>
      </div>
    </section>

    <section
      data-bs-version="5.1"
      class="footer3 cid-s48P1Icc8J"
      once="footers"
      id="footer3-r"
    >
      <div class="container">
        <div class="media-container-row align-center mbr-white">
          <div class="row row-links">
            <ul class="foot-menu">
              <li class="foot-menu-item mbr-fonts-style display-7">
                <strong
                  >© Copyright 2022 Ratão + Paulão. All Rights Reserved.</strong
                >
              </li>
            </ul>
          </div>
          <div class="row social-row">
            <div class="social-list align-right pb-2">
              <div class="soc-item">
                <a href="https://twitter.com/mobirise" target="_blank">
                  <span
                    class="mbr-iconfont mbr-iconfont-social socicon-linkedin socicon"
                  ></span>
                </a>
              </div>
              <div class="soc-item">
                <a href="https://twitter.com/mobirise" target="_blank">
                  <span
                    class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"
                  ></span>
                </a>
              </div>
              <div class="soc-item">
                <a href="https://twitter.com/mobirise" target="_blank">
                  <span
                    class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"
                  ></span>
                </a>
              </div>
            </div>
          </div>
          <div class="row row-copirayt">
            <p
              class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7"
            ></p>
          </div>
        </div>
      </div>
    </section>
    

    <!-- scroll top button -->
    <a href="#menu1-h" class="btn scroll-top" id="scroll-top" style="float:right;">
      <i class="fas fa-angle-up"></i>
    </a>
    <input name="animation" type="hidden">


    <script src="<?php echo url_base(); ?>assets/js/script.js"></script>
  </body>
</html>
