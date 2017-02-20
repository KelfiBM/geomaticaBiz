<?php

class MY_Loader extends CI_Loader{
	public function template($templateName, $vars = array(), $return = FALSE){

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