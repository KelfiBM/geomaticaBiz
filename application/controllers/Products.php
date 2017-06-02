<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('productosModel');
        $this->load->model('categoriasModel');
        $this->load->model('marcasModel');
    }

    public function insert_producto(){
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_404();
            return;
        }

        $this->form_validation->set_rules('nombre', 'Nombre del Producto', 'trim|required');
        $this->form_validation->set_rules('modelo', 'Modelo del Producto', 'trim|required');
        $this->form_validation->set_rules('marca', 'Marca del Producto', 'trim|required');
        $this->form_validation->set_rules('categoria', 'Categoría del Producto', 'trim|required');
        $this->form_validation->set_rules('website', 'Website del Producto', 'trim');
        $this->form_validation->set_rules('datasheet', 'Datasheet del Producto', 'trim');
        $this->form_validation->set_rules('descripcion', 'Descripción del Producto', 'trim|required|min_length[5]');

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'modelo' => $this->input->post('modelo'),
            'marca' => $this->input->post('marca'),
            'categoria' => $this->input->post('categoria'),
            'website' => $this->input->post('website'),
            'datasheet' => $this->input->post('datasheet'),
            'descripcion' => $this->input->post('descripcion'),
            'imagesPath' => array(),
            'error' => array()
        );

        if ($this->form_validation->run() == FALSE)
        {
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
            $this->load->template('administration/index',$data);
        }
        else
        {
            $this->load->library('upload');
            $files = $_FILES;
            $filesCount = count($_FILES['fotos']['name']);
            for($i=0 ; $i < $filesCount; $i++){
                $_FILES['fotos']['name']= $files['fotos']['name'][$i];
                $_FILES['fotos']['type']= $files['fotos']['type'][$i];
                $_FILES['fotos']['tmp_name']= $files['fotos']['tmp_name'][$i];
                $_FILES['fotos']['error']= $files['fotos']['error'][$i];
                $_FILES['fotos']['size']= $files['fotos']['size'][$i];
                $this->upload->initialize($this->set_upload_options());
                if(!$this->upload->do_upload('fotos')){
                    $data['error'][] = $this->upload->display_errors();
                }
                else{
                    $data['imagesPath'][] = $this->upload->data()['file_name'];
                }
            }
            $insertedId = $this->productosModel->insert_producto($data);
            if($insertedId  != 0){
                foreach ($data['imagesPath'] as $imagePath){
                    $image = array(
                        'idProductos' => $insertedId,
                        'imagePath' => $imagePath
                    );
                    $this->productosModel->insert_productoImages($image);
                }
                redirect('/products/producto/'.$insertedId);
                return;
            }
            show_404();
        }
    }

    public function producto($id = 0){
        if($id == 0){
            redirect("/");
            return;
        }
        $data['producto'] = $this->productosModel->get($id);
        if(empty($data['producto'])){
            redirect("/");
            return;
        }
        $data['pRelacionados'] = $this->productosModel->getAll(4,2,$data['producto']['IdCategoria']);

        $data['title'] =  $data['producto']['Nombre'];
        $data['pluginsCss'] = array("plugins/owlcarousel2/assets/owl.carousel.min.css",
            "plugins/owlcarousel2/assets/owl.theme.default.min.css");
        $data['pluginsJs'] = array("plugins/owlcarousel2/owl.carousel.min.js");
        $this->load->template('products/singleProduct',$data);
    }

    public function categorie($id){

    }

    private function set_upload_options(){
        $config = array();
        $config['upload_path']            = APPPATH."../asset/images/products/";
        var_dump($config);
        $config['allowed_types']          = 'gif|jpg|jpeg|png';
        $config['max_filename_increment'] = 1000;
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }
}