<?php
class MY_Exceptions extends CI_Exceptions {

    public function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
    }


    public function show_404($page = '', $log_error = TRUE)
    {
        header("HTTP/1.1 404 Not Found");
        $data['title'] =  "Error 404";
        $data['pluginsCss'] = array();
        $data['pluginsJs'] = array();
        echo $this->CI->load->template('home/error404',$data,true);
        exit(4);
    }
}