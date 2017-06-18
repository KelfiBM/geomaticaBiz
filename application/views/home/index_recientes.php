<section class="clearfix pv-40">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1 class="page-title text-center">Productos <strong>Recientes</strong></h1>
                <div class="separator"></div>
            </div>
            <div class="col-md-12">
                <div class="filters">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <?php
                        foreach($pRecientesCategories as $pRecientesCategorie){?>
                            <li><a href="#" data-filter=".filter<?php echo str_replace(' ','-',$pRecientesCategorie);?>"><?php echo $pRecientesCategorie;?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="isotope-container row grid-space-10">
                    <?php foreach ($pRecientes as $pReciente){?>
                        <div class="col-md-3 col-sm-6 isotope-item filter<?php echo str_replace(' ','-',$pReciente['Categoria']); ?>">
                            <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
                                    <?php for($i = 1; $i < count($pReciente['Images']); $i++) {
                                        echo "<li data-target='#carousel-portfolio' data-slide-to='$i'></li>";
                                    }?>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="image-box shadow bordered text-center mb-20">
                                            <div class="overlay-container">
                                                <img src="<?php echo "http://static.geomatica.biz/asset/images/products/".$pReciente['Images'][0]; ?>" alt="" height="180">
                                                <div class="overlay-top">
                                                    <div class="text">
                                                        <h3><a href="<?php echo base_url("producto/".$pReciente['Id']) ?>"><?php echo $pReciente['Nombre']?></a></h3>
                                                    </div>
                                                </div>
                                                <div class="overlay-bottom">
                                                    <p class="small"><?php echo $pReciente['Categoria'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php for($i = 1; $i < count($pReciente['Images']); $i++) { ?>
                                        <div class="item">
                                            <div class="image-box shadow bordered text-center mb-20">
                                                <div class="overlay-container">
                                                    <img src="<?php echo "http://static.geomatica.biz/asset/images/products/".$pReciente['Images'][$i]; ?>" alt="" height="180">
                                                    <div class="overlay-top">
                                                        <div class="text">
                                                            <h3><a href="<?php echo base_url("producto/".$pReciente['Id']) ?>"><?php echo $pReciente['Nombre']?></a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-bottom">
                                                        <p class="small"><?php echo $pReciente['Categoria'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>