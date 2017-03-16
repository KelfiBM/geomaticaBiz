<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('adminModel');
    }

    public function login_user() {

        $this->form_validation->set_rules('user', 'Usuario o Email', 'trim|required');
        $this->form_validation->set_rules('pass', 'Contraseña', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['loggedIn'])){
                echo json_encode(array("success" => true));
            }
        } else {
            $data = array(
                'username' => $this->input->post('user'),
                'password' => $this->input->post('pass')
            );
            $result = $this->adminModel->login($data);
            if ($result == TRUE) {
                $username = $this->input->post('user');
                $result = $this->adminModel->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email,
                    );
                    $this->session->set_userdata('loggedIn', $session_data);
                    echo json_encode(array("success" => true));
                }
            } else {
                echo json_encode(array( 'success' => false));
            }
        }
    }

    public function index(){
        redirect("/");
    }

    public function logout() {
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('loggedIn', $sess_array);
        redirect("/");
    }

}