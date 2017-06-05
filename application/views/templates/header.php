<!DOCTYPE html>
<!--[if IE 9]><html lang="es" class="ie9"> <![endif]-->
<!--[if gt IE 9]><html lang="es" class="ie"> <![endif]-->
<!--[if !IE]><!--><html dir="ltr" lang="es"><!--<![endif]-->
<?php $this->load->view('templates/header_head');?>
<body class="no-trans boxed pattern-3 page-loader-3">
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
<div class="page-wrapper">
    <div class="header-container">
        <?php $this->load->view('templates/header_top');?>
        <header class="header fixed clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="header-first clearfix">
                            <!--<div class="header-dropdown-buttons visible-xs">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
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
                            </div>-->
                            <div id="logo" class="logo">
                                <a href="<?php echo base_url(); ?>"><img id="logo_img" src="<?php echo base_url('asset'); ?>/images/logos/logoTrans.png" alt="GIS" style="max-height: 50px"></a>
                            </div>
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
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <ul class="nav navbar-nav ">
                                                <li class="<?php if($this->uri->total_segments() == 0 || strtolower($this->uri->segment(1))=="home" || strtolower($this->uri->segment(1))=="index"){echo 'active';}?>"><a href="<?php echo base_url() ?>">Inicio</a></li>
                                                <li class="dropdown <?php if(strtolower($this->uri->segment(1))=="producto"){echo 'active';}?>">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown <?php echo (strtolower($this->uri->segment(2))=="categoria" ? "active" : "")?>">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Por Categoria</a>
                                                            <ul class="dropdown-menu">
                                                                <?php echo "<li".($selectedCategorie == 0? " class='active'" : "")."><a href='".base_url('producto/categoria/0')."'>Todos</a></li>";
                                                                if(isset($categoriesHead)){
                                                                    foreach ($categoriesHead as $categoria){
                                                                        echo "<li".($selectedCategorie == $categoria['Id'] ? " class='active'" : "")."><a href='".base_url('producto/categoria/'.$categoria['Id'])."'>".$categoria['Descripcion']."</a></li>";
                                                                    }
                                                                } ?>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown <?php echo (strtolower($this->uri->segment(2))=="marca" ? "active" : "")?>">
                                                            <a  class="dropdown-toggle " data-toggle="dropdown" href="#">Por Marca</a>
                                                            <ul class="dropdown-menu">
                                                                <?php echo "<li".($selectedMarca == 0 ? " class='active'" : "")."><a href='".base_url('producto/marca/0')."'>Todos</a></li>";
                                                                if(isset($marcasHead)){
                                                                    foreach ($marcasHead as $marca){
                                                                        echo "<li".($selectedMarca == $marca['Id'] ? " class='active'" : "")."><a href='".base_url('producto/marca/'.$marca['Id'])."'>".$marca['Descripcion']."</a></li>";
                                                                    }
                                                                } ?>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="<?php if(strtolower($this->uri->segment(1))=="contact"){echo 'active';}?>">
                                                    <a href="<?php echo base_url("Contact") ?>">Contactenos</a>
                                                </li>
                                                <li class="<?php if(strtolower($this->uri->segment(1))=="about"){echo 'active';}?>">
                                                    <a href="<?php echo base_url("About") ?>">Sobre Geomedición</a>
                                                </li>
                                                <!--<li class="<?php /*if($this->uri->segment(1)=="team"){echo 'active';}*/?>">
                                                    <a href="<?php /*echo base_url("Team") */?>">Nuestro Equipo</a>
                                                </li>-->
                                            </ul>
                                            <!--<div class="header-dropdown-buttons hidden-xs ">
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
                                            </div>-->
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