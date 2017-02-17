<?php

class Template_Loader extends CI_Loader{
	public function template($templateName, $vars = array(), $return = FALSE){
		
		$content  = $this->view('templates/header', $vars, $return);
        $content .= $this->view($templateName, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
	}
}