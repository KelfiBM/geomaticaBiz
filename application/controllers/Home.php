<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function about(){
        $data['title'] =  "About us";
        $data['pluginsCss'] = array("plugins/owlcarousel2/assets/owl.carousel.min.css", "plugins/owlcarousel2/assets/owl.theme.default.min.css");
        $data['pluginsJs'] = array("plugins/owlcarousel2/owl.carousel.min.js");
    	$this->load->template('home/about',$data);
    }


}
