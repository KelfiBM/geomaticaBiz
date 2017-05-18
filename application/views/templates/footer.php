<?php $this->load->view('templates/footer_content') ?>
</div>
<script src="<?php echo base_url('asset'); ?>/plugins/jquery.min.js"></script>
<script src="<?php echo base_url('asset'); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/modernizr.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/jquery.parallax-1.1.3.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/jquery.validate.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/jquery.browser.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/SmoothScroll.js"></script>
<script src="<?php echo base_url('asset'); ?>/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<?php
if(isset($pluginsJs)){
    foreach ($pluginsJs as $pluginJs) {
        echo "<script type='text/javascript' src='".base_url('asset')."/{$pluginJs}'></script>";
    }
}
if(isset($pluginsJsCustom)){
    foreach ($pluginsJsCustom as $pluginJsCustom) {
        echo "<script type='text/javascript' src='{$pluginJsCustom}'></script>";
    }
}
?>
<script src="<?php echo base_url('asset'); ?>/plugins/pace/pace.min.js"></script>
<script src="<?php echo base_url('asset'); ?>/js/template.js"></script>
<script src="<?php echo base_url('asset'); ?>/js/custom.js"></script>

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
