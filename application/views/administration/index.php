<?php $this->load->view('templates/breadcrumb');?>
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-md-12">
                <h1 class="page-title">Productos</h1>
                <div class="separator-2 mb-20"></div>
                <div class="vertical">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active">
                            <a href="#vtab1" role="tab" data-toggle="tab"><i class="fa fa-plus pr-10"></i>Añadir Producto</a>
                        </li>
                        <li><a href="#vtab2" role="tab" data-toggle="tab"><i class="fa fa-pencil pr-10"></i>Eliminar Productos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="vtab1">
                            <h3 class="title">Añadir Producto</h3>
                            <form id="productForm" enctype="multipart/form-data" class="form-horizontal" role="form" action="<?php echo base_url('products/insert_producto')?>" method="post">
                                <div class="form-group">
                                    <label for="productfName" class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="productfName" class="form-control" placeholder="Inserte Nombre del Producto" name="nombre" size="70" maxlength="255" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productfModel" class="col-sm-2 control-label">Modelo</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="productfModel" class="form-control" placeholder="Inserte Modelo del Producto" name="modelo" maxlength="50" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productfMarca" class="col-sm-2 control-label">Marca</label>
                                    <div class="col-sm-10">
                                        <?php echo form_dropdown("marca", $marcas, "", array('id' => 'productfMarca',
                                            'class' => 'form-control',
                                            'required' => null
                                        )) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productfCategoria" class="col-sm-2 control-label">Categoría</label>
                                    <div class="col-sm-10">
                                        <?php echo form_dropdown("categoria", $categorias, "", array('id' => 'productfCateogira',
                                            'class' => 'form-control',
                                            'required' => null
                                        )) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productfWebsite" class="col-sm-2 control-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="url" id="productfWebsite" class="form-control" placeholder="Inserte el URL del Website del producto" name="website" maxlength="300">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productfDatasheet" class="col-sm-2 control-label">DataSheet</label>
                                    <div class="col-sm-10">
                                        <input type="url" id="productfDatasheet" class="form-control" placeholder="Inserte el URL del Manual del producto" name="datasheet" maxlength="300">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productfDescripcion" class="col-sm-2 control-label">Descripción</label>
                                    <div class="col-sm-10">
                                        <textarea id="productfDescripcion" class="form-control" placeholder="Inserte la descripción del producto" name="descripcion" rows="5" required minlength="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productfImagenes" class="col-sm-2 control-label">Imágenes</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="productfImagenes" class="form-control-file" multiple accept=".gif,.jpg,.jpeg,.png" required name="fotos[]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-default" type="submit">Añadir producto</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="vtab2">
                            <h3 class="title">Eliminar Producto</h3>

                        </div>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col-md-12">
                        <h2>Editar Productos</h2>
                        <div class="block clearfix">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img class="img-responsive" src="<?php /*echo base_url(); */?>asset/images/page-about/equipoGeomedicion.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="title">Por qué <strong>Elegirnos?</strong></h2>
                <div class="separator-2"></div>
                <p class="lead">GIS representa numerosos fabricantes de sofisticados instrumentos, accesorios y software topográficos.
                    <br>Entre los cuales tenemos:</p>
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <div class="panel-group collapse-style-2" id="accordion-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse1-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>Trimble Navigation, Limited
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Trimble Navigation, LTD es la líder mundial de equipos de GPS diferencial de alta precisión de una, dos y tres frecuencias (L1, L2C y L5) y una o dos constelaciones satelitales (GPS y GLONASS) asi como equipos topográficos de alta precisión para levantamientos y construcciones.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>Spectra Precision (SP)
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Spectra Precision, una empresa 100% de Trimble, es el fabricante líder en niveles lásers y equipos topográficos para la construcción.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>Nikon
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante japones de estaciones totales, niveles opticos y accesorios topográficos.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse4-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>Tripod Data Systems (TDS)
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Tripod Data Systems, TDS, una empresa 100% de Trimble, con su programa topografico para estaciones totales y GPS, el Survey Pro 4.xx, TDS es la líder mundial en colectores de datos entre ellos el RECON y el RANGER.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse5-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>SOUTH
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        SOUTH Surveying & Mapping Instruments Co., LTD fabricante de equipos y accesorios topográficos y GPS chinos de excelente calidad a precios imbatibles.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse6-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>Pacific Crest Corporation
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse6-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricantes de Radios UHF para GPS RTK.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse7-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>Valeport
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante britanico de instrumentos y accesorios oceanográficos.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse8-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>Crain Enterprises
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse8-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante de accesorios topograficos en fibra de vidrio. Producto estelar es el Tripode Tri-Max.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel-group collapse-style-2" id="accordion2-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2-2" href="#collapse9-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>SECO Manufacturing
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse9-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante norteamericano de accesorios topograficos.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2-2" href="#collapse10-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>OMNI
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse10-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante norteamericano de accesorios topograficos.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2-2" href="#collapse11-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>MagNail
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante norteamericano de accesorios topograficos especializados clavos magnetizados con centros.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2-2" href="#collapse12-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>PRESCO
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse12-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante de productos para la señalización en topografia y construcciones. Pinturas fluorescente, cintas reflexivas y metalicas.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2-2" href="#collapse13-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>SURV-KAP
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse13-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante de placas de aluminio y bronce para todo tipo de monumentacion topografica y geodesica.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2-2" href="#collapse14-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>BERNSTEN
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse14-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Fabricante de placas de aluminio y bronce para todo tipo de monumentacion topografica y geodesica.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2-2" href="#collapse15-2" class="collapsed">
                                            <i class="fa fa-star pr-10"></i>Traverse-PC
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse15-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Excelente software topografico con ajuste por el método de los mínimos cuadrados, ALTA, curvas de nivel, catastral sin necesidad de usar AUTOCAD.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</section>