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
            </div>
        </div>
    </div>
</section>