<?php
class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function about(){
    	$this->load->view("");
    }

}
