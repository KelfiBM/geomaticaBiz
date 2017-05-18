<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('adminModel');
        $this->load->model('productosModel');
        $this->load->model('categoriasModel');
        $this->load->model('marcasModel');
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
        $marcas = array();
        $categorias = array();
        foreach ($this->marcasModel->getAll() as $marca){
            $marcas[$marca["Id"]] = $marca["Descripcion"];
        }
        foreach ($this->categoriasModel->getAll() as $categoria){
            $categorias[$categoria["Id"]] = $categoria["Descripcion"];
        }
        $data['title'] =  "Administración";
        $data['marcas'] = array(
            '' => 'Seleccione una Marca',
        ) + $marcas;
        $data['categorias'] = array(
            '' => 'Seleccione una Categoria',
        ) + $categorias;
        $data['breadTitleStrong'] = "Administración: ";
        $data['breadTitle'] = "Administra el contenido de tu pagina web";
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