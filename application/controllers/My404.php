<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller
{

    public function _remap($method, $params = array())
    {
        // Check if the requested route exists
        if (method_exists($this, $method)) {
            // Method exists - so just continue as normal
            return call_user_func_array(array($this, $method), $params);
        }

        //*** If you reach here you have a 404 error - do whatever you want! ***//

        // Set status header to a 404 for SEO
        $this->output->set_status_header('404');
        $data['title'] = "Error 404";
        $data['pluginsCss'] = array();
        $data['pluginsJs'] = array();

        // ignore 404 errors for -precomposed.png errors to save my logs and
        // stop baby jesus crying
        if (!(strpos($_SERVER['REQUEST_URI'], '-precomposed.png'))) {
            // This custom 404 log error records as much information as possible
            // about the 404. This gives us alot of information to help fix it in
            // the future. You can change this as required for your needs
            log_message('error', '404:  ***METHOD: ' . var_export($method, TRUE) . '  ***PARAMS: ' . var_export($params, TRUE) . '  ***SERVER: ' . var_export($_SERVER, TRUE) . ' ***SESSION: ' . var_export($this->session->all_userdata(), TRUE));
        }

        // Check if user is logged in or not
        if ($this->ion_auth->logged_in()) {
            // Show 404 page for logged in users
            $this->load->template('home/error404', $data);
        } else {
            // Show 404 page for people not logged in
            $this->load->template('home/error404', $data);
        }
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $data['title'] =  "Error 404";
        $data['pluginsCss'] = array();
        $data['pluginsJs'] = array();
        $this->load->template('home/error404',$data);
    }
}