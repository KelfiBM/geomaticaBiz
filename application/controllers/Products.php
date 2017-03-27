<?php
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('productos_Model');
    }

    public function insert_producto(){

    }
}