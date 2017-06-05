<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li><i class="fa fa-home pr-10"></i><a href="<?php echo base_url(); ?>">Inicio</a></li>
            <li class="active">Marcas</li>
        </ol>
    </div>
</div>
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-md-12">
                <h1 class="page-title">Marcas</h1>
                <div class="separator-2"></div>
                <div class="filters">
                    <ul class="nav nav-pills">
                        <li <?php if($selectedMarca == 0) echo "class='active'";?>><a href="#" data-filter="*">All</a></li>
                        <?php foreach ($marcas as $marca){ ?>
                            <li <?php if($selectedMarca == $marca['Id']) echo "class='active'";?>><a href="#" data-filter=".filter<?php echo str_replace(' ','-',$marca['Descripcion']);?>"><?php echo $marca['Descripcion'];?></a></li>
                        <?php }?>
                    </ul>
                </div>
                <div class="isotope-container-fitrows row grid-space-10">
                    <?php foreach($productos as $producto){?>
                        <div class="col-sm-6 col-md-3 isotope-item filter<?php echo str_replace(' ','-',$producto['Marca']); ?>">
                            <div class="image-box style-2 mb-20 bordered text-center">
                                <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators top">
                                        <li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
                                        <?php for($i = 1; $i < count($producto['Images']); $i++) {
                                            echo "<li data-target='#carousel-portfolio' data-slide-to='$i'></li>";
                                        }?>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="overlay-container">
                                                <img src="<?php echo base_url("asset/images/products/".$producto['Images'][0]); ?>" alt="">
                                                <div class="overlay-to-top">
                                                    <p class="small margin-clear"><em><?php echo $producto['Marca'] ?> <br> <?php echo $producto['Categoria'] ?></em></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php for($i = 1; $i < count($producto['Images']); $i++) { ?>
                                            <div class="item">
                                                <div class="overlay-container">
                                                    <img src="<?php echo base_url("asset/images/products/".$producto['Images'][$i]); ?>" alt="">
                                                    <div class="overlay-to-top">
                                                        <p class="small margin-clear"><em><?php echo $producto['Marca'] ?> <br> <?php echo $producto['Categoria'] ?></em></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="body shadow light-gray-bg ">
                                    <h3><?php echo $producto['Nombre']?></h3>
                                    <div class="separator"></div>
                                    <a href="<?php echo base_url("producto/".$producto['Id']) ?>" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Ver Producto<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>