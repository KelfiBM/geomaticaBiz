<!DOCTYPE html>
<!--[if IE 9]>
<html lang="es" class="ie9"> <![endif]-->
<!--[if gt IE 9]>
<html lang="es" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="es">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> - Geomedición</title>
    <meta name="description" content="Geomedicion">
    <meta name="author" content="Kelfi Batista">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>asset/images/logos/favicon.ico" rel="shortcut icon" >
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet'>
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/fonts/fontello/css/fontello.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url("asset/plugins/"); ?>pace/pace-flash.css" rel="stylesheet">
    <?php
    if(isset($pluginsCss)){
        foreach ($pluginsCss as $pluginCss) {
            echo "<link href='".base_url()."asset/{$pluginCss}' rel='stylesheet'>";
        }
    }
    ?>
    <link href="<?php echo base_url(); ?>asset/css/animations.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/plugins/hover/hover-min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/typography-default.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/skins/blue.css" rel="stylesheet">
    <!-- Custom css -->
    <link href="<?php echo base_url(); ?>asset/css/custom.css" rel="stylesheet">
</head>
<body class="no-trans boxed pattern-3 page-loader-3">
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
<div class="page-wrapper">
    <div class="header-container">
        <div class="header-top dark">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-6 col-md-9">
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-xs">
                                <li class="facebook"><a target="_blank"
                                                        href="https://www.facebook.com/Geomedici%C3%B3n-Instrumentos-y-Sistemas-SRL-256115174424212/"><i
                                                class="fa fa-facebook"></i></a></li>
                            </ul>
                            <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation">
                                        <li class="facebook"><a target="_blank"
                                                                href="https://www.facebook.com/Geomedici%C3%B3n-Instrumentos-y-Sistemas-SRL-256115174424212/"><i
                                                        class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-sm hidden-xs">
                                <li><i class="fa fa-map-marker pr-5 pl-10"></i>Wenceslao Alvarez #62 Apt 3b</li>
                                <li><i class="fa fa-phone pr-5 pl-10"></i>809-686-3215</li>
                                <li><i class="fa fa-envelope-o pr-5 pl-10"></i>info@geomatica.biz</li>
                            </ul>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-3">
                        <div id="header-top-second" class="clearfix">
                            <div class="header-top-dropdown text-right">
                                <?php if(isset($this->session->userdata['loggedIn'])){ ?>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Administration/logout'); ?>" class="btn btn-default btn-sm"><i
                                                    class="fa fa-user pr-10"></i>Cerrar Sesión</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url('Administration'); ?>" class="btn btn-default btn-sm"><i
                                                    class="fa fa-user pr-10"></i>Administrar</a>

                                    </div>
                                <?php }
                                else{ ?>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Administración</button>
                                        <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                            <li>
                                                <form class="login-form margin-clear" id="loginForm">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Usuario o Correo</label>
                                                    <input type="text" class="form-control" placeholder="Username/Email" name="user">
                                                    <i class="fa fa-user form-control-feedback"></i>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Contraseña</label>
                                                    <input type="password" class="form-control" placeholder="**********" name="pass">
                                                    <i class="fa fa-lock form-control-feedback"></i>
                                                </div>
                                                <button type="submit" class="btn btn-gray btn-sm" id="loginButton">Log In</button>
                                                <button type="button" hidden="" id="alertLogin" class="btn-alert"></button>
                                                    <!--<ul>
                                                        <li><a href="#">Forgot your password?</a></li>
                                                    </ul>-->
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                            <!--  header top dropdowns end -->
                        </div>
                        <!-- header-top-second end -->
                    </div>
                </div>
            </div>
        </div>
        <header class="header fixed clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="header-first clearfix">

                            <!-- header dropdown buttons -->
                            <div class="header-dropdown-buttons visible-xs">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                class="icon-search"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                        <li>
                                            <form role="search" class="search-box margin-clear">
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <i class="icon-search form-control-feedback"></i>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- header dropdown buttons end-->

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="<?php echo base_url(); ?>">
                                    <img id="logo_img" src="<?php echo base_url(); ?>asset/images/logos/logoTrans.png" alt="GIS" style="max-height: 50px">
                                </a>
                            </div>
                            <!-- name-and-slogan -->
                            <div class="site-slogan">
                                Geomedición, Instrumentos y Sistemas, SRL
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="header-second clearfix">
                            <div class="main-navigation  animated with-dropdown-buttons">
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                    data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>

                                        </div>
                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <ul class="nav navbar-nav ">
                                                <li class="<?php if($this->uri->total_segments() == 0){echo 'active';}?>">
                                                    <a href="<?php echo base_url() ?>">Inicio</a>
                                                </li>
                                                <li class="dropdown  mega-menu <?php if($this->uri->segment(1)=="home/producto"){echo 'active';}?>">
                                                    <a href="#" class="dropdown-toggle"
                                                       data-toggle="dropdown">Productos</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-9">
                                                                    <h4 class="title">Pages</h4>
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li><a href="<?php echo base_url() ?>"><i
                                                                                                class="fa fa-angle-right"></i>About
                                                                                        Us 1</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li><a href="<?php echo base_url() ?>"><i
                                                                                                class="fa fa-angle-right"></i>Services
                                                                                        1</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li><a href="<?php echo base_url() ?>"><i
                                                                                                class="fa fa-angle-right"></i>404
                                                                                        error</a></li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-3 hidden-sm">
                                                                    <h4 class="title">Premium HTML5 Template</h4>
                                                                    <p class="mb-10">The Project is perfectly suitable
                                                                        for corporate, business and company
                                                                        webpages.</p>
                                                                    <img src="<?php echo base_url("asset/") ?>images/section-image-3.png"
                                                                         alt="The Project">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="<?php if($this->uri->segment(1)=="contact"){echo 'active';}?>">
                                                    <a href="<?php echo base_url("contact") ?>">Contactenos</a>
                                                </li>
                                                <li class="<?php if($this->uri->segment(1)=="about"){echo 'active';}?>">
                                                    <a href="<?php echo base_url("about") ?>">Sobre Geomedición</a>
                                                </li>
                                                <li class="<?php if($this->uri->segment(1)=="team"){echo 'active';}?>">
                                                    <a href="<?php echo base_url("team") ?>">Nuestro Equipo</a>
                                                </li>
                                            </ul>
                                            <div class="header-dropdown-buttons hidden-xs ">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle"
                                                            data-toggle="dropdown"><i class="icon-search"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                                        <li>
                                                            <form role="search" class="search-box margin-clear">
                                                                <div class="form-group has-feedback">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Search">
                                                                    <i class="icon-search form-control-feedback"></i>
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>