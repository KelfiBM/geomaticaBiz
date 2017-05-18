<div class="header-top dark">
    <div class="container">
        <div class="row">
            <div class="col-xs-3 col-sm-6 col-md-9">
                <div class="header-top-first clearfix">
                    <ul class="social-links circle small clearfix hidden-xs">
                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/Geomedici%C3%B3n-Instrumentos-y-Sistemas-SRL-256115174424212/"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                    <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                        <div class="btn-group dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
                            <ul class="dropdown-menu dropdown-animation">
                                <li class="facebook"><a target="_blank" href="https://www.facebook.com/Geomedici%C3%B3n-Instrumentos-y-Sistemas-SRL-256115174424212/"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-inline hidden-sm hidden-xs">
                        <li><i class="fa fa-map-marker pr-5 pl-10"></i>Wenceslao Alvarez #62 Apt 3b</li>
                        <li><i class="fa fa-phone pr-5 pl-10"></i>809-686-3215</li>
                        <li><i class="fa fa-envelope-o pr-5 pl-10"></i>info@geomatica.biz</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-9 col-sm-6 col-md-3">
                <div id="header-top-second" class="clearfix">
                    <div class="header-top-dropdown text-right">
                        <?php if(isset($this->session->userdata['loggedIn'])){ ?>
                            <div class="btn-group">
                                <a href="<?php echo base_url('Administration/logout'); ?>" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i>Cerrar Sesión</a>
                            </div>
                            <div class="btn-group">
                                <a href="<?php echo base_url('Administration'); ?>" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i>Administrar</a>
                            </div>
                        <?php } else{ ?>
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
                </div>
            </div>
        </div>
    </div>
</div>