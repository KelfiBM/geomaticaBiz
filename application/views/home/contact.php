<div class="banner dark-translucent-bg"
     style="background-image:url('<?php echo base_url(); ?>asset/images/page-contact/background-img-3.jpg'); background-position: 50% 30%;">
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a class="link-dark"
                                                       href="<?php echo base_url('home'); ?>">Inicio</a></li>
                <li class="active">Contacto</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h1 class="page-title text-center">Contactanos!</h1>
                <div class="separator"></div>
                <p class="lead text-center">Seria grandioso escuchar algo de ti! Haznos saber cualquiera de tus
                    inquietudes. Te responderemos lo mas antes posible!</p>
                <ul class="list-inline mb-20 text-center">
                    <li><i class="text-default fa fa-map-marker pr-5"></i>Wenceslao Alvarez #62 Apt 3b</li>
                    <li><a href="tel:8096863215" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>809-686-3215</a>
                    </li>
                    <li><a href="mailto:info@geomatica.biz" class="link-dark"><i
                                    class="text-default fa fa-envelope-o pl-10 pr-5"></i>info@geomatica.biz</a></li>
                </ul>
                <div class="separator"></div>
                <ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
                    <li class="facebook"><a target="_blank"
                                            href="https://www.facebook.com/Geomedici%C3%B3n-Instrumentos-y-Sistemas-SRL-256115174424212/"><i
                                    class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-md-12 space-bottom">
                <h2 class="title">Cuéntanos Tus Inquietudes</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>Nosotros haremos lo posible por responderte lo mas rápido posible.</p>
                        <div class="alert alert-success hidden" id="MessageSent">
                            Hemos recibido tu mensaje, te responderemos cuanto antes.
                        </div>
                        <div class="alert alert-danger hidden" id="MessageNotSent">
                            Oops! Algo no funciono, por favor verifica que no eres un robot, recarga la pagina e intenta otra vez.
                        </div>
                        <div class="contact-form">
                            <form id="contact-form-with-recaptcha" class="margin-clear" role="form">
                                <div class="form-group has-feedback">
                                    <label for="name">Nombre*</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">Correo*</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="subject">Asunto*</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                                    <i class="fa fa-navicon form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Mensaje*</label>
                                    <textarea class="form-control" rows="6" id="message" name="message"
                                              placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <script src='https://www.google.com/recaptcha/api.js'></script>
                                <div class="g-recaptcha" data-sitekey="6LdgmhYUAAAAAI-LaPxipMItTlLCznJAsfXlDlOm"></div>
                                <input type="submit" value="Submit" class="submit-button btn btn-default">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="map-canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>