<?php $this->load->view('templates/breadcrumb');?>
    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="main col-md-12">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="video"><i class="fa fa-camera pr-5"></i> Imágenes</a></li>
                    </ul>
                    <div class="tab-content space-bottom">
                        <div class="tab-pane active" id="pill-1">
                            <div class="shadow bordered">
                                <div class="overlay-container">
                                    <img src="<?php echo base_url('asset/images/products/').$producto['Images'][0];?>" alt="">
                                    <a href="<?php echo base_url('asset/images/products/').$producto['Images'][0];?>" class="overlay-link popup-img" title="<?php echo $producto['Nombre']?>">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="space-bottom"></div>
                            <div class="row grid-space-20">
                                <?php for ($i = 1; $i < count($producto['Images']); $i++){?>
                                    <div class="col-xs-3">
                                        <div class="overlay-container">
                                            <img src="<?php echo base_url('asset/images/products/').$producto['Images'][$i];?>" alt="">
                                            <a href="<?php echo base_url('asset/images/products/').$producto['Images'][$i];?>" class="overlay-link small popup-img" title="<?php echo $producto['Nombre']?>">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- pills end -->
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Información</h3>
                            <div class="separator-2"></div>
                            <ul class="list mb-20">
                                <li><strong>Nombre: </strong> <span class="text-right"><?php echo $producto['Nombre']?></span></li>
                                <li><strong>Modelo: </strong> <span class="text-right"><?php echo $producto['Modelo']?></span></li>
                                <li><strong>Marca: </strong> <span class="text-right"><?php echo $producto['Marca']?></span></li>
                                <li><strong>Categoría: </strong> <span class="text-right"><?php echo $producto['Categoria']?></span></li>
                                <li><strong>Website: </strong> <span class="text-right"><a href="<?php echo $producto['Website']?>">Link del producto</a></span></li>
                                <li><strong>Datasheet: </strong> <span class="text-right"><a href="<?php echo $producto['Datasheet']?>">Hoja de especificaciones</a></span></li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <h3>Descripcion</h3>
                            <div class="separator-2"></div>
                            <p><?php echo $producto['Descripcion']?></p>
                            <!--<blockquote class="margin-clear">

                                <footer><cite title="Source Title">Happy Client </cite></footer>
                            </blockquote>-->
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
<?php if(isset($pRelacionados)){?>
    <section class="section pv-40 clearfix">
        <div class="container">
            <h3>Proyectos <strong>Relacionados</strong></h3>
            <div class="row grid-space-10">
                <?php foreach ($pRelacionados as $pRelacionado){?>
                    <div class="col-md-3 col-sm-6">
                    <div class="image-box shadow bordered text-center mb-20">
                        <div class="overlay-container">
                            <img src="<?php echo base_url('asset/images/products/').$pRelacionado['Images'][0] ?>" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="<?php echo base_url("producto/".$pRelacionado['Id']) ?>"><?php echo $pRelacionado['Nombre']?></a></h3>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <p class="small"><?php echo $pRelacionado['Categoria'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php }?>