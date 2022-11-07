<?php
session_start();

require 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.6.13, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.13, mobirise.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:src" content>
    <meta property="og:image" content>
    <meta name="twitter:title" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link type="image/x-icon"
        href="assets/images/vecteezy-modern-and-professional-dental-logo-design-suitable-for-96x96.png"
        rel="shortcut icon">
    <meta name="description" content>

    <title>Cadmo S.A || Home</title>

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
    <section class="menu cid-s48OLK6784" id="menu1-h" data-bs-version="5.1" once="menu">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.html#top">
                            <img src="assets/images/vecteezy-modern-and-professional-dental-logo-design-suitable-for-96x96.png"
                                alt="Cadmo S.A" style="height: 3.8rem">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-7"
                            href="index.html#header1-f">Cadmo S.A</a></span>
                </div>
                <button class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-toggle="collapse" type="button"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
            </div>
        </nav>
    </section>

    <section class="header1 cid-s48MCQYojq mbr-fullscreen mbr-parallax-background" id="header1-f" data-bs-version="5.1">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(5, 3, 3)"></div>

        <div class="align-center container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1">
                        Bem vindo(a), a <strong>Cadmo</strong><br><br>
                    </h1>

                    <p class="mbr-text mbr-fonts-style display-7">
                        Temos o prazer e satisfação de dizer que você está na melhor
                        clínica de odontologia do Brasil, oferecemos os mais diversos
                        tipos de serviços voltados a sua saúde bocal com aquele preço que
                        cabe em seu bolso!<br><br>
                    </p>
                    <div class="mbr-section-btn mt-3">
                        <a class="btn btn-primary display-4" href="#section-consultas">Saber mais &gt;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="image1 cid-tgMFmDB5Z9 mbr-fullscreen" id="section-sobrenos" data-bs-version="5.1" style="margin-top: 2rem;">
        <div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/dentista-juntos.webp" alt="Enfermeira e dentista uma do lado da outra">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="text-wrapper">
                        <h3 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                            <strong>Sobre nós&nbsp;</strong>
                        </h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            A Cadmo S.A é uma empresa de odontologia que possui
                            soluções inovadoras para o mercado, tendo os excelentes
                            funcionários para cuidar da sua saúde visando sempre o melhor
                            para você, deste o atendimento a consulta. 
                        </p>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Agora, que já tem uma breve visão sobre quem somos, então que tal, de
                            uma vez por todas ter as melhores consultas do mercado com o
                            melhor custo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    <section class="content1 cid-s48vaXqeL6" id="section-servicos" data-bs-version="5.1">
        <div class="container" style="margin-top: 2rem;">
            <div class="row justify-content-center">
                <div class="title col-12 col-md-9">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Serviços</strong>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="features5 cid-tgwG7TOXLf" id="features6-k" data-bs-version="5.1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-6">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">
                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                <strong>Odontologia estética&nbsp;</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Clareamento dental, Facetas, Lentes de Contato Dental.
                            </p>
                        </div>
                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont socicon-ventrilo socicon"
                                style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35)"></span>
                        </div>
                    </div>
                </div>

                <div class="card col-12 col-lg-6">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">
                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                <strong>Endodondia</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Tratamento de canal.
                            </p>
                        </div>
                        <div class="img-wrapper img2 align-center">
                            <span class="mbr-iconfont socicon-ventrilo socicon"
                                style="color: rgb(255, 225, 97); fill: rgb(255, 225, 97)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features5 cid-tgwH7zw4cI" id="features6-l" data-bs-version="5.1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-6">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">
                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                <strong>Cirurgia</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Deste de arrancar dentes a sua restauração.
                            </p>
                        </div>
                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont socicon-ventrilo socicon"
                                style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35)"></span>
                        </div>
                    </div>
                </div>

                <div class="card col-12 col-lg-6">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">
                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                <strong>Clinica Geral</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Atendimento de forma geral.
                            </p>
                        </div>
                        <div class="img-wrapper img2 align-center">
                            <span class="mbr-iconfont socicon-ventrilo socicon"
                                style="color: rgb(255, 225, 97); fill: rgb(255, 225, 97)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features5 cid-tgMN4mf0HV" id="features6-p" data-bs-version="5.1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-6">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">
                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                <strong>Prótese</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Próteses voltadas a cada tipo de dente, completamente
                                personalizado.
                            </p>
                        </div>
                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont socicon-ventrilo socicon"
                                style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35)"></span>
                        </div>
                    </div>
                </div>

                <div class="card col-12 col-lg-6">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">
                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                <strong>Periodondia</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Doenças de gengiva e periodondo.
                            </p>
                        </div>
                        <div class="img-wrapper img2 align-center">
                            <span class="mbr-iconfont socicon-ventrilo socicon"
                                style="color: rgb(255, 225, 97); fill: rgb(255, 225, 97)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content1 cid-s48vnjULo4" id="section-consultas" data-bs-version="5.1" style="margin-top: 4rem; padding: 8rem 1.6rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-md-9">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Consultas</strong>
                    </h3>
                    <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">
                        Ficou interessado em nossos serviços? E	ntão não perca tempo e
                        saúde, já marque uma <strong>reserva hoje mesmo</strong>!
                    </h4>
                    <div class="mbr-section-btn align-center">
                        <a class="btn btn-danger-outline display-4" href="https://linkwhats.app/fd1edc">Desejo reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts2 cid-tgMuo1bNTo" id="section-contatos" data-bs-version="5.1" style="margin-top: 4rem;">
        <!---->

        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Contatos</strong>
                </h3>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Telefone</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a class="text-primary" href="tel:+5545678910">(11) 123 4567</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Email</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a class="text-primary" href="mailto:teste@gmail.com">cadmo.sa.oficial@gmail.com.br</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Endereço</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Rua Dourada, nº 01 - SP, Brasil
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-bulleted-list mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Hórario de trabalho</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">9:00 - 18:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer3 cid-s48P1Icc8J mbr-reveal" id="footer3-i" data-bs-version="5.1" once="footers">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="row row-links">
                    <ul class="foot-menu">
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <strong>© Copyright 2022 Ratão + Paulão. All Rights Reserved.</strong>
                        </li>
                    </ul>
                </div>
                <div class="row social-row">
                    <div class="social-list align-right pb-2">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-linkedin socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- scroll top button -->
    <a href="index.php#menu1-q" class="btn scroll-top" id="scroll-top" style="float:right;">
        <i class="fas fa-angle-up"></i>
    </a>
    <input name="animation" type="hidden">


    <script src="assets/js/script.js"></script>
</body>

</html>