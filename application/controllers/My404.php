<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller
{

    public function index()
    {
        $this->output->set_status_header('404');
        $data['title'] =  "Error 404";
        $data['pluginsCss'] = array();
        $data['pluginsJs'] = array();
        $this->load->template('home/error404',$data);
    }
}