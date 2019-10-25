<!DOCTYPE html>
<html <?php language_attributes('es'); ?>>

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lio</title>
  <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
  <link href="<?php  echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php  echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php  echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php  echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php  echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
 

</head>

<body>
  <header class="fixed-top navbar-fixed-js">

    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="main-brand__top">
          <div class="main-brand">
            <a class="navbar-brand" href="<?php bloginfo('url');?>/">
              <img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2.png">
            </a>
          </div>
        </div>
        <div class="main-brand__fixed">
          <div class="main-brand">
            <a class="navbar-brand" href="#">
              <img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2@2x.png">
            </a>
          </div>
        </div>
        <div class="main-brand brand-responsive">
          <a class="navbar-brand" href="#">
            <img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2@3x.png">
          </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas"
            type="button">
            <span class="hamburger-box"></span> 
            <span class="hamburger-inner"></span>
          </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">

          <div class="menu">
            <ul class="navbar-nav mr-autos nav-top">
              <li class="nav-item">
                <a class="nav-link" data="offcanvas" href="#certifications"> <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_5.png">93434343</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#clients" id="clients"> <img src="assets/img/icon_6.png">info@lion.com</a>
              </li>
              <li class="nav-item">
                <a class="" href="#benefits"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.png"></a>
              </li>

              <li class="nav-item ">
                <a class="" href="#benefits"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png"></a>
              </li>

              <li class="nav-item">
                <a class="" href="#benefits"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/in.png"></a>
              </li>
              <li class="nav-item">
                <a class="" href="#benefits"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png"></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link idioma  idioma-border" lang="es-CO" hreflang="es-CO" href="#">ESP</a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link idioma" lang="en-US" hreflang="en-US" href="#">ENG</a>
              </li>  
              <?php if(is_active_sidebar('main_sidebar')){
                dynamic_sidebar('main_sidebar');
               }?>
            </ul>
            <?php
          wp_nav_menu( array(
              'menu_class' => 'navbar-nav mr-autos nav-bottom', 
              'menu_class_li' => 'navbar-nav mr-autos nav-bottom', 

              'theme_location' => 'my-custom-menu', 
              'container_class' => 'menu',
              'link_before' => '<i class="bx bx-user-pin"></i>' ) ); 
          ?>
         
             <!-- <ul class="navbar-nav mr-autos nav-bottom"> -->
          
              <!-- <li class="nav-item">
                <a class="nav-link" data="offcanvas" href="<?php bloginfo('url'); ?>/">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php bloginfo('url'); ?>/quienes-somos" id="clients">Quiénes somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php bloginfo('url'); ?>/servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data="offcanvas" href="<?php bloginfo('url'); ?>/#">Carreras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data="offcanvas" href="<?php bloginfo('url'); ?>/noticias-all">Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data="offcanvas" href="<?php bloginfo('url'); ?>/#">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data="offcanvas" href="#contacto">Contacto</a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
