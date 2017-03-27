<footer id="footer" class="clearfix dark">
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="footer-content text-center padding-ver-clear">
                            <div class="logo-footer"><img id="logo-footer" class="center-block" src="<?php echo base_url(); ?>asset/images/logos/logoTrans.png" alt=""></div>
                            <p>Geomedición, Instrumentos y Sistemas, S.A. (GIS) es una empresa dominicana, establecida en 1998 con la finalidad de proveer las soluciones geomáticas con tecnologías de punta a los agrimensores e ingenieros geomáticos en toda la Región de el Caribe.</p>
                            <ul class="list-inline mb-20">
                                <li><i class="text-default fa fa-map-marker pr-5"></i>Wenceslao Alvarez #62 Apt 3b</li>
                                <li><a href="tel:+00 1234567890" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>809-686-3215</a></li>
                                <li><a href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>info@geomatica.biz</a></li>
                            </ul>
                            <ul class="social-links circle animated-effect-1 margin-clear">
                                <li class="facebook"><a target="_blank" href="https://www.facebook.com/Geomedici%C3%B3n-Instrumentos-y-Sistemas-SRL-256115174424212/"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                            <div class="separator"></div>
                            <p class="text-center margin-clear">Copyright © 2017 Geomedición. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="<?php echo base_url(); ?>asset/plugins/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/modernizr.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(""); ?>asset/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(""); ?>asset/plugins/jquery.parallax-1.1.3.js"></script>
<script src="<?php echo base_url(""); ?>asset/plugins/jquery.validate.js"></script>
<script src="<?php echo base_url(""); ?>asset/plugins/jquery.browser.js"></script>
<script src="<?php echo base_url(""); ?>asset/plugins/SmoothScroll.js"></script>
<script src="<?php echo base_url(""); ?>asset/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<?php
if(isset($pluginsJs)){
    foreach ($pluginsJs as $pluginJs) {
        echo "<script type='text/javascript' src='".base_url()."asset/{$pluginJs}'></script>";
    }
}
if(isset($pluginsJsCustom)){
    foreach ($pluginsJsCustom as $pluginJsCustom) {
        echo "<script type='text/javascript' src='{$pluginJsCustom}'></script>";
    }
}
?>
<script src="<?php echo base_url("asset/plugins/"); ?>pace/pace.min.js"></script>
<script src="<?php echo base_url("asset/js/"); ?>template.js"></script>
<script src="<?php echo base_url("asset/js/"); ?>custom.js"></script>


<?php if($this->uri->segment(1)=="administration"){ ?>


<?php } ?>

<?php if(!isset($this->session->userdata['loggedIn'])){ ?>
<script>
    $(document).ready(function(){

        $("#loginForm").validate({
            rules: {
                password: {
                    required: true,
                },
                user:{
                    required: true
                },
            },
            messages:{
                password:{
                    required: "Inserte su contraseña"
                },
                user: "Inserte su nombre de usuario o correo"
            },
            submitHandler: login
        });

        function login(){
            var loginData = $('#loginForm').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('administration/login_user')?>',
                data: loginData,
                dataType: 'json',
                success: function(response){
                    if(response.success){
                        window.location.replace("<?php echo base_url('administration')?>");
                    }
                    else{
                        $.notify({
                            // options
                            message: 'El usuario y/o contraseña son erróneos'
                        },{
                            // settings
                            type: 'danger',
                            delay: 5000,
                            offset : {
                                y: 100,
                                x: 20
                            }
                        });
                    }
                },
            });
        }
        return false;
    });

</script>
<?php } ?>
</body>
</html>
