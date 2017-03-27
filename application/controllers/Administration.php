<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('adminModel');
        $this->load->model('productos_Model');
        $this->load->helper('form');
    }

    public function login_user() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_404();
        }
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
        if(!isset($this->session->userdata['loggedIn'])){
            show_404();
        }
        $data['title'] =  "Administración";
        $data['marcas'] = array(
            '' => 'Seleccione una Marca',
            '1' => 'Objeto 1'
        );
        $data['categorias'] = array(
            '' => 'Seleccione una Categoria',
            '1' => 'Objeto 1'
        );
        $this->load->template('administration/index',$data);
    }

    public function logout() {
        if(!isset($this->session->userdata['loggedIn'])){
            show_404();
        }
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('loggedIn', $sess_array);
        redirect("/");
    }

}