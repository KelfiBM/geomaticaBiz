<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!isset($this->session->userdata['loggedIn'])){
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('session');
            /*$this->load->model('login_database');*/
        }
    }

    public function index()
    {
        $data['title'] =  "Inicio";
        $data['pluginsCss'] = array("plugins/owlcarousel2/assets/owl.carousel.min.css",
            "plugins/owlcarousel2/assets/owl.theme.default.min.css",
            "plugins/rs-plugin-5/css/settings.css",
            "plugins/rs-plugin-5/css/layers.css",
            "plugins/rs-plugin-5/css/navigation.css",
            "plugins/morphext/morphext.css");
        $data['pluginsJs'] = array("plugins/owlcarousel2/owl.carousel.min.js",
            "plugins/vide/jquery.vide.js",
            "plugins/morphext/morphext.min.js",
            "plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0",
            "plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0",
            "plugins/rs-plugin-5/js/extensions/revolution.extension.slideanims.min.js",
            "plugins/rs-plugin-5/js/extensions/revolution.extension.layeranimation.min.js",
            "plugins/rs-plugin-5/js/extensions/revolution.extension.navigation.min.js");
        $this->load->template('home/index',$data);
    }

    public function about(){
        $data['title'] =  "Sobre Nosotros";
        $data['pluginsCss'] = array("plugins/owlcarousel2/assets/owl.carousel.min.css", "plugins/owlcarousel2/assets/owl.theme.default.min.css");
        $data['pluginsJs'] = array("plugins/owlcarousel2/owl.carousel.min.js");
    	$this->load->template('home/about',$data);
    }
    public function team(){
        redirect("/");
    }
    public function contact(){
        $data['title'] =  "Contacto";
        $data['pluginsCss'] = array();
        $data['pluginsJs'] = array("js/google.map.config.js");
        $data['pluginsJsCustom'] = array("https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyDQlrIqrCSr2XCvjlK3HW2D6E96Hicmql8");
        $this->load->template('home/contact',$data);
    }
    public function error404(){
        $this->output->set_status_header('404');
        $data['title'] =  "Error 404";
        $data['pluginsCss'] = array();
        $data['pluginsJs'] = array();
        $this->load->template('home/error404',$data);
    }
}
