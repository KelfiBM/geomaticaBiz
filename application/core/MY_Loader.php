<?php

class MY_Loader extends CI_Loader{
	public function template($templateName, $vars = array(), $return = FALSE){

	    $CI =& get_instance();
        $CI->load->model('categoriasModel');
        $CI->load->model('marcasModel');
        $vars['categoriesHead'] = $CI->categoriasModel->getAll();
        $vars['marcasHead'] = $CI->marcasModel->getAll();
        if(!isset($vars['selectedCategorie'])) $vars['selectedCategorie'] = -1;
        if(!isset($vars['selectedMarca'])) $vars['selectedMarca'] = -1;
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