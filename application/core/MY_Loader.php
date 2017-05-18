<?php

class MY_Loader extends CI_Loader{
	public function template($templateName, $vars = array(), $return = FALSE){

	    $CI =& get_instance();
        $CI->load->model('categoriasModel');
        $CI->load->model('marcasModel');

        $vars['categoriesHead'] = $CI->categoriasModel->getAll();
        $vars['marcasHead'] = $CI->marcasModel->getAll();
	    if($return):
		$content  = $this->view('templates/header', $vars, $return);
        $content .= $this->view($templateName, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);
        return $content;
        else:
            $this->view('templates/header', $vars);
            $this->view($templateName, $vars);
            $this->view('templates/footer', $vars);
        endif;
	}
}