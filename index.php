<?php
session_start();
if(isset($_SESSION['nombre'])){
    $nombre = $_SESSION['nombre'];
    $sercloz    = $_SESSION['sercloz'];
} else {
    $nombre = $sercloz = "";
}
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""><![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=""><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sercloz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="apple-touch-icon" href="assets/img/various/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,400,700,800' rel='stylesheet' />
    <link rel="stylesheet" href="assets/js/libs/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/js/libs/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/icons/nucleo.css"/>
    <link rel="stylesheet" href="assets/js/libs/animate.css/animate.min.css"/>
    <!-- BEGIN PAGE STYLE -->
    <link rel="stylesheet" href="assets/js/libs/owl.carousel/dist/assets/owl.carousel.css" />
    <link rel="stylesheet" href="assets/js/libs/owl.carousel/dist/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="assets/js/plugins/revolution-slider/revolution/css/settings.css"/>
    <link rel="stylesheet" href="assets/js/plugins/revolution-slider/revolution/css/navigation.css"/>
    <link rel="stylesheet" href="assets/css/sliders.css"/>
    <!-- END PAGE STYLE -->
    <link rel="stylesheet" href="assets/css/buttons.css"/>
    <link rel="stylesheet" href="assets/css/builder.css"/>
    <link rel="stylesheet" href="assets/css/colors.css"/>
    <link rel="stylesheet" href="assets/css/footers.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/nav.css"/>
    <link rel="stylesheet" href="assets/css/preloader.css"/>
    <link rel="stylesheet" href="assets/css/themes.css"/>
    <link rel="stylesheet" href="assets/css/ui.css"/>
    <link rel="stylesheet" href="assets/css/widgets.css"/>
    <script src="assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="header-transparent header-scroll-dark theme-blue footer-reveal">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- BEGIN PRELOADER -->
<div class="loader-wrapper">
    <div class="loader-ball">
        <span></span>
    </div>
</div>
<!-- END PRELOADER -->

<div id="wrapper">

    <!-- BEGIN LATERAL NAVIGATION -->
    <aside id="aside-nav">
        <div id="main-aside-navigation">
            <div class="main-nav-wrapper">
                <div class="close-aside-nav">
                    <i class="nc-icon-outline ui-1_simple-remove"></i>
                </div>
                <div id="aside-logo">
                    <a href="#" data-logo-light="assets/img/sercloz/logo_blanco.png" data-logo-dark="assets/img/sercloz/logo_blue.png">
                        <img width="170" height="166" src="assets/img/sercloz/logo_blue.png" alt="logo">
                    </a>
                </div>
                <nav id="main-aside-menu">
                    <ul>
                        <li class="mega-menu menu-layouts">
                            <a href="#">Inicio</a>
                        </li>
                        <li class="mega-menu menu-layouts">
                            <a href="#" data-go-to="#conocenos" style="cursor: pointer !important;">Conocenos</a>
                        </li>
                        <li class="mega-menu">
                            <a href="#" data-go-to="#servicios" style="cursor: pointer !important;">Servicios</a>
                        </li>
                        <li>
                            <a href="#">Comienza tu proyecto</a>
                        </li>
                    </ul>
                </nav>
                <footer>
                    <a href="#" class="facebook">
                        <span><i class="fa fa-facebook"></i></span>
                    </a>
                    <a href="#" class="instagram">
                        <span><i class="fa fa-instagram"></i></span>
                    </a>
                    <a href="#" class="twitter">
                        <span><i class="fa fa-twitter"></i></span>
                    </a>
                </footer>
            </div>
        </div>
    </aside>
    <!-- END LATERAL NAVIGATION -->

    <!-- BEGIN MAIN NAVIGATION -->
    <header id="header">
        <div id="main-navigation" class="submenu-dark">
            <div class="main-nav-wrapper">
                <div class="container-fluid">
                    <div class="nav-left">
                        <div id="logo">
                            <a href="#" data-logo-light="assets/img/sercloz/logo_blanco.png" data-logo-dark="assets/img/sercloz/logo_blue.png">
                                <img width="170" height="166" src="assets/img/sercloz/logo_blue.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="nav-right">
                        <nav id="main-menu">
                            <ul>
                                <li class="mega-menu menu-layouts">
                                    <a href="#">Inicio</a>
                                </li>
                                <li class="mega-menu menu-layouts">
                                    <a href="#" data-go-to="#conocenos" style="cursor: pointer !important;">Conocenos</a>
                                </li>
                                <li class="mega-menu">
                                    <a href="#" data-go-to="#servicios" role="link" style="cursor: pointer !important;">Servicios</a>
                                </li>
                                <li>
                                    <a href="#">Comienza tu proyecto</a>
                                </li>
                            </ul>
                        </nav>
                        <ul class="nav-tools">
                            <li class="mobile-menu-btn">
                                <button class="toggle-menu" data-toggle="mobile-menu" data-effect="hover">
                                    <span class="menu-label label-left">Menu</span>
                                    <i class="nc-icon-outline ui-2_menu-35"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END MAIN NAVIGATION -->

    <!-- BEGIN MAIN CONTENT -->
    <div id="main-content">

        <!-- BEGIN REVOLUTION SLIDER -->
        <div class="rev_slider_wrapper">
            <div id="rev_slider" data-slider-layout="fullscreen" data-gridheight="[700,650,650,650]" data-slider-thumbnail="false" class="rev_slider">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="fade" data-slotamount="3" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1000" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/img/sercloz/robot1.jpg" data-lazyload="assets/img/sercloz/robot1.jpg" data-kenburns="on" data-duration="30000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" alt="creative" width="1920" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-274-layer-1" data-x="center" data-hoffset="0" data-y="middle" data-voffset="0" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-start="1000" data-basealign="slide" data-responsive_offset="on" style="background-color:rgba(0, 0, 0, 0.3);">
                        </div>
                        <!-- LAYER LOGO -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-30" data-0="transform:translateY(0px);opacity:1;" data-600="transform:translateY(80);opacity:0;" data-transform_in="y:-0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="y:0;opacity:0;s:750;e:Power3.easeOut;" data-start="2000" data-responsive_offset="on">
                            <img src="assets/img/sercloz/logo_blanco.png">
                        </div>
                        <div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-caption-title tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-whitespace="normal" data-fontsize="['50','40','35','30']" data-lineheight="['60','50','45','40']" data-voffset="['-10','0','-40','-60']" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on" data-0="opacity:1;" data-300="opacity:0.2;">

                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-caption-line tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-voffset="['55',55','15','-5']" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on" data-0="opacity:1;" data-300="opacity:0.2;">
                                <img src="assets/img/various/whitebar.png" alt="whitebar" width="350" height="2" data-ww="['350px','280px','240px','200px']" data-hh="2px" data-no-retina>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-caption-subtitle tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-voffset="['90',80','40','20']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-lineheight="[80,80,60,60]" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-responsive_offset="on" data-0="opacity:1;" data-300="opacity:0.2;">
                                Tecnología y vanguardia en tus procesos
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="['165','155','120','120']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-responsive_offset="on" data-0="opacity:1;" data-300="opacity:0.2;">
                                <a href="#" class="btn btn-white btn-bordered btn-lg m-b-20 m-r-20" data-go-to="#quienes_somos">¿Quienes somos?</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE 2 -->
                    <li data-index="rs-1104" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off">
                        <img src="assets/img/sercloz/robot2.jpg" data-lazyload="assets/img/sercloz/robot2.jpg" data-kenburns="on" data-duration="30000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" alt="creative" width="1920" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-274-layer-1" data-x="center" data-hoffset="0" data-y="middle" data-voffset="0" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-start="1000" data-basealign="slide" data-responsive_offset="on" style="background-color:rgba(0, 0, 0, 0.3);">
                        </div>
                        <div class="tp-caption tp-caption-title tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-fontsize="['50','40','35','30']" data-lineheight="['60','50','45','40']" data-voffset="['-10','0','-40','-60']" data-whitespace="normal" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on" style="font-size:45px">
                            Lideres en Automatización
                        </div>
                        <div class="tp-caption tp-caption-line tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-voffset="['55',55','15','-5']" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
                            <img src="assets/img/various/whitebar.png" alt="whitebar" width="350" height="4" data-ww="['350px','280px','240px','200px']" data-hh="2px" data-no-retina>
                        </div>
                        <div class="tp-caption tp-caption-subtitle tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-voffset="['90',80','40','20']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-lineheight="[80,80,60,60]" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-responsive_offset="on">
                            Soluciones innovadores en optimización
                        </div>
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="['165','155','120','120']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-responsive_offset="on">
                            <a href="#" class="btn btn-white btn-bordered btn-lg" data-go-to="#testimoniales">Testimoniales</a>
                        </div>
                    </li>
                    <!-- SLIDE 3 -->
                    <li data-index="rs-1256" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off">
                        <img src="assets/img/sercloz/robot3.jpg" data-lazyload="assets/img/sercloz/robot3.jpg" data-kenburns="on" data-duration="30000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" alt="creative" width="1920" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-274-layer-1" data-x="center" data-hoffset="0" data-y="middle" data-voffset="0" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-start="1000" data-basealign="slide" data-responsive_offset="on" style="background-color:rgba(0, 0, 0, 0.3);">
                        </div>
                        <div class="tp-caption tp-caption-title tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-fontsize="['50','40','35','30']" data-lineheight="['60','50','45','40']" data-voffset="['-40','0','-40','-60']" data-whitespace="normal" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
                            Superando expectativas
                        </div>
                        <div class="tp-caption tp-caption-line tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-voffset="['55',55','15','-5']" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
                            <img src="assets/img/various/whitebar.png" alt="whitebar" width="350" height="4" data-ww="['350px','280px','240px','200px']" data-hh="2px" data-no-retina>
                        </div>
                        <div class="tp-caption tp-caption-subtitle tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="center" data-voffset="['90',80','40','20']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-lineheight="[80,80,60,60]" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="500" data-responsive_offset="on">
                            Soluciones integrales
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->


        <section id="conocenos"  class="section">
            <div class="container">
                <div class="col-md-6">
                    <div class="animated" data-animation="fadeIn">
                        <div class="title" style="margin-bottom: 0px !important;">
                            <img src="assets/img/sercloz/400dpiLogoCropped.png" style="max-width: 200px; display: inline"></img>
                        </div>
                        <div class="title">
                            <p>Tecnología en tus Procesos</p>
                        </div>
                        <p class="m-t-40">Somos una empresa dedicada a la optimización de procesos a través del ajuste de Path’s o programas de robots para diferentes tipos de aplicación (soldadura, sello, pintura, laser) así como en determinar si la necesidad requiere de alguna actualización, migración o adaptación en la parte de automatización, como Plc’s, variadores, sistemas de dosificación, etc.
                        </p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div>
                        <img src="assets/img/sercloz/hand.png">
                    </div>
                </div>
        </section>

        <!-- BEGIN SERVICES -->
        <section class="section grey lighten-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box feature-lg center">
                            <div class="icon icon-simple">
                                <i class="nc-icon-outline location_flag-points-31"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Nuestro Objetivo</h3>
                                <p>Ser una empresa líder en el ramo de automatización ofreciendo soluciones innovadoras y que optimicen sus recursos y así garantiza soluciones integrales, superando las expectativas de nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box feature-lg center">
                            <div class="icon icon-simple">
                                <i class="nc-icon-outline business_goal-64"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Nuestra Misión</h3>
                                <p>Satisfacer las necesidades de nuestros clientes, garantizando la calidad de nuestro trabajo, integrando avanzadas tecnologias, herramientas y equipos, así como talento humano competente y calificado para aportar nuestros conocimientos profesionales y técnicos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box feature-lg center">
                            <div class="icon icon-simple">
                                <i class="nc-icon-outline ui-1_eye-17"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Nuestra Visión</h3>
                                <p>Consolidar nuestra empresa, a través del mejoramiento y control de todos los procesos, logrando una rentabilidad que garantice la permanencia de la empresa en el mercado industrial.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SERVICES -->


        <!-- BEGIN IMAGE CENTER -->
        <section id="servicios" class="section">
            <div class="container">
                <div class="title title-center">
                    <h3>Nuestros Servicios</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feature-box feature-full feature-icon-right m-t-80 animated" data-animation="fadeIn" data-animation-delay="200">
                            <div class="feature-content">
                                <h3 class="feature-title">Servicios Industriales</h3>
                                <p>Mantenimiento Primer Nivel:</p>
                                <ul>
                                    <li>Aplicación de checklist</li>
                                    <li>Mantenimeto preventivo</li>
                                    <li>Generación de HOE</li>
                                </ul>
                                <p>Limpieza Industrial:</p>
                                <ul>
                                    <li>Limpieza por recorrido o por área</li>
                                    <li>Manejo de maquinas HAB</li>
                                    <li>Pulido y abrillantado de epoxico</li>
                                </ul>
                            </div>
                            <div class="icon icon-gray">
                                <i class="nc-icon-outline business_factory"></i>
                            </div>
                        </div>
                        <div class="feature-box feature-full feature-icon-right animated" data-animation="fadeIn" data-animation-delay="200">
                            <div class="feature-content">
                                <h3 class="feature-title">Desarrollo de Ingeniería</h3>
                                <ul>
                                    <li>Análisis e implementación de mejoras</li>
                                    <li>Reutilización de equipos para la optimización de procesos</li>
                                </ul>
                            </div>
                            <div class="icon icon-gray">
                                <i class="nc-icon-outline education_atom"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 hidden-md-down">
                        <div class="flexslider mobile-slider flex-nav-bottom animated" data-animation="fadeInUp" data-animation-delay="200" data-plugin-options='{"directionNav": false,"controlNav": false, "slideshowSpeed":3500}'>
                            <ul class="slides">
                                <li>
                                    <img src="assets/img/sercloz/arm.jpg" alt="arm">
                                </li>
                                <li>
                                    <img src="assets/img/sercloz/factory.jpg" alt="factory">
                                </li>
                                <li>
                                    <img src="assets/img/sercloz/planos.jpg" alt="planos">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-box m-t-80 animated" data-animation="fadeIn" data-animation-delay="200">
                            <div class="icon icon-gray">
                                <i class="nc-icon-outline business_stock"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Análisis y automatización de procesos</h3>
                                <ul>
                                    <li>Mejoras en tiempos de ciclo</li>
                                    <li>Optimización de producto</li>
                                    <li>Mejoras de calidad</li>
                                    <li>Análisis de repetibilidad</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feature-box animated" data-animation="fadeIn" data-animation-delay="200">
                            <div class="icon icon-gray">
                                <i class="nc-icon-outline ui-1_check-curve"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Puesta en Marcha y programación de robots</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END IMAGE CENTER -->

        <section class="section t-light" data-bg-img="sercloz/hand2.jpg" data-top-bottom="background-position:0px 0px;" data-bottom-top="background-position:0px -150px;" style="background-image: url('assets/img/sercloz/hand2.jpg'); background-position: 0px -85.7313px;">
            <div class="section-overlay" style="opacity: 0.7;"></div>
            <div class="container">
                <div class="row m-t-20">
                    <div class="col-lg-3">
                        <div class="feature-box center">
                            <div class="icon icon-line" style="border-color: #FFF">
                                <i class="nc-icon-outline ui-1_calendar-grid-61"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Planeación</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-box center">
                            <div class="icon icon-line" style="border-color: #FFF">
                                <i class="nc-icon-outline design_design"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Diseño</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-box center">
                            <div class="icon icon-line" style="border-color: #FFF">
                                <i class="nc-icon-outline education_atom"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Ingeniería</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-box center">
                            <div class="icon icon-line" style="border-color: #FFF">
                                <i class="nc-icon-outline design_design-dev"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">Herramientas de Diseño y Simulación</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- BEGIN COMPANY -->
        <section id="servicios" class="section section-dark grey darken-4">
            <div class="container t-center">
                <div class="row m-b-30">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="title title-center title-line-bottom m-b-20">
                            <h3>Proyectos Recientes</h3>
                        </div>
                        <div class="center m-b-30">
                            <?php
                            if($sercloz == "web_master" || $sercloz == "key_user"){
                                ?>
                                <button class="btn btn-primary btn-rounded hover-effect m-b-0" data-toggle="modal" data-target="#modal_editar_trabajos_recientes" data-backdrop="static"><i class="line-icon-settings f-14"></i> Editar Proyectos Recientes</button>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="proyectos_recientes">
                    <div class="col-md-6">
                        <div class="feature-box feature-image">
                            <img src="assets/img/proyectos_recientes/proyecto_1.png" alt="creative">
                            <div class="feature-content">
                                <h3 class="feature-title">Migración de controlador Step5 a Step7</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-image">
                            <img src="assets/img/proyectos_recientes/proyecto_2.png" alt="creative">
                            <div class="feature-content">
                                <h3 class="feature-title">Mesa de tijeras con regulación de velocidad</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COMPANY -->

        <section class="section-call-to-action section-dark action-lg skrollable skrollable-between" data-bg-img="creative/full-23.jpg" data-top-bottom="background-position:0px 0px;" data-bottom-top="background-position:0px -150px;" style="background-image: url('assets/img/creative/full-23.jpg'); background-position: 0px -85.7313px;">
            <div class="action-wrapper">
                <div class="container">
                    <div class="action-text">
                        <h3 class="action-title">¿Proyecto? ¿Idea? ¿Conversación?</h3>
                        <p class="action-subtitle">Todo eso nos encanta, aquí comienza tu proyecto</p>
                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn btn-hg btn-white btn-bordered icon-left-effect"><i class="nc-icon-outline ui-1_email-85"></i><span>Comienza tu proyecto!</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- BEGIN TESTIMONIALS -->
        <section class="section" id="testimoniales">
            <div class="container-large">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="title title-center title-line-bottom m-b-0">
                            <i class="nc-icon-outline design_pen-23 c-gray"></i>
                            <h3>¿Que opinan nuestros clientes?</h3>
                        </div>
                        <div class="review_top_ornament">
                            <div class="review_top_ornament_line"></div>
                            <div class="review_top_ornament_quotemark">„</div>
                            <div class="review_top_ornament_line"></div>
                        </div>
                        <div class="bx-slider" data-plugin-options='{"pagerCustom":"#testimonials-pager","pager":true,"mode":"fade"}'>
                            <div class="testimonial">
                                <p class="comment">
                                    Testimonial 1.
                                </p>
                                <h5 class="happy-client">Fulanito</h5>
                                <span class="client-info">Puebla, México</span>
                            </div>
                            <div class="testimonial">
                                <p class="comment">
                                    Testimonial 2.
                                </p>
                                <h5 class="happy-client">Fulanito</h5>
                                <span class="client-info">Puebla, México</span>
                            </div>
                            <div class="testimonial">
                                <p class="comment">
                                    Testimonial 2.
                                </p>
                                <h5 class="happy-client">Fulanito</h5>
                                <span class="client-info">Puebla, México</span>
                            </div>
                        </div>
                        <div class="review_bottom_ornament">
                            <div class="review_bottom_ornament_line"></div>
                            <div class="review_bottom_ornament_triangle"></div>
                            <div class="review_bottom_ornament_line"></div>
                        </div>
                        <div id="testimonials-pager" class="testimonial-photos">
                            <a data-slide-index="0" href="#" class="photo-hold">
                                <img width="80" height="80" src="assets/img/ecommerce/people-1.jpg" alt="people 1" />
                            </a>
                            <a data-slide-index="1" href="#" class="photo-hold">
                                <img width="80" height="80" src="assets/img/ecommerce/people-2.jpg" alt="people 2" />
                            </a>
                            <a data-slide-index="2" href="#" class="photo-hold">
                                <img width="80" height="80" src="assets/img/ecommerce/people-3.jpg" alt="people 3" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END TESTIMONIALS -->

        <section class="section section-md grey lighten-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients" data-items-desktop="5" data-items-tablet="3" data-plugin-options='{"autoplay":true,"autoplayTimeout":4000,"smartSpeed":1500,"items":8,"nav":false,"margin":0}'>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/12.png" alt="logo 12">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/11.png" alt="logo 11">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/10.png" alt="logo 10">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/9.png" alt="logo 9">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/8.png" alt="logo 8">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/7.png" alt="logo 7">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/6.png" alt="logo 6">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/5.png" alt="logo 5">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/4.png" alt="logo 4">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/3.png" alt="logo 3">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/2.png" alt="logo 2">
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/img/logo/1.png" alt="logo 1">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- END MAIN CONTENT -->

    <!-- BEGIN FOOTER -->
    <footer id="footer">
        <div id="footer-main" class="container-large">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="widget widget-text">
                        <h3 class="widget-title">Tecnología y vanguardia en tus procesos</h3>
                        <img width="200" height="50" class="footer-logo" src="assets/img/sercloz/logo_blanco.png" alt="logo">
                        <p>(Descripción).</p>
                        <p><i class="nc-icon-outline ui-1_home-minimal"></i> (Dirección)</p>
                        <p><i class="nc-icon-outline ui-1_email-85"></i> <a href="mailto:support@themes-lab.com">(Correo de contacto)</a></p>
                        <p><i class="nc-icon-outline tech_mobile"></i> <a href="tel:+1-888-541-7871" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Call us Now"> (Telefono)</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget widget-twitter" data-count="6">
                        <h3 class="widget-title">Ultimos Tweets</h3>
                        <div class="tweets-list">
                            <ul></ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget widget-flickr flickr-demo" data-count="12" data-user="36587311@N08">
                        <h3 class="widget-title">Redes Sociales</h3>
                        <ul class="flickr-list">
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-1.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-2.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-3.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-9.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-10.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-11.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-12.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-13.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-14.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-15.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-16.jpg"></li>
                            <li><img width="100" height="100" alt="flickr" src="assets/img/nature/small-17.jpg"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-bottom">
            <div class="container-large">
                <div class="row">
                    <div class="col-sm-12 t-center">
                        <p class="copyright">Diseñada y prpgramada por © ASYMCo derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

</div>

<!-- BEGIN OFF FULLSCREEN SEARCH -->
<div class="search-overlay overlay-dark">
    <a href="#" class="search-overlay-close"><i class="nc-icon-outline ui-1_simple-remove"></i></a>
    <form action="search-result" method="post">
        <input type="search" placeholder="Search...">
        <button type="submit"><i class="nc-icon-outline ui-1_zoom-split"></i></button>
    </form>
</div>
<!-- END OFF FULLSCREEN SEARCH -->


<input id="nombre" type="hidden" value="<?php echo $nombre; ?>">
<input id="sercloz" type="hidden" value="<?php echo $sercloz; ?>">

<a href="#" class="scrollup">
    <i class="nc-icon-outline arrows-1_minimal-up"></i>
</a>

<script src="assets/js/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/js/libs/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/js/libs/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/js/libs/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
<script src="assets/js/libs/tether/dist/js/tether.min.js"></script>
<script src="assets/js/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/libs/superfish/dist/js/superfish.min.js"></script>
<script src="assets/js/libs/appear/jquery.appear.js"></script>
<script src="assets/js/libs/skrollr/dist/skrollr.min.js"></script>
<script src="assets/js/libs/easyticker-jquery/jquery.easy-ticker.min.js"></script>

<!-- BEGIN PAGE SCRIPT -->
<script src="assets/js/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script src="assets/js/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script src="assets/js/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/js/libs/jquery-countTo/jquery.countTo.js"></script>
<script src="assets/js/libs/flexslider/jquery.flexslider-min.js"></script>
<script src="assets/js/libs/bxslider-4/dist/jquery.bxslider.min.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/masonry.js"></script>
<script src="assets/js/sliders.js"></script>
<!-- END PAGE SCRIPT -->

<script src="assets/js/navigation.js"></script>
<script src="assets/js/search.js"></script>
<script src="assets/js/builder.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
