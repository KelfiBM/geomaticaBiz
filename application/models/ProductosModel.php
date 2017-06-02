<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ProductosModel extends CI_Model {
    /**
     * @param $data
     * @return int
     */
    public function insert_producto($data){
        $result = 0;
        $condition = "Nombre =" . "'" . $data['nombre'] . "' AND " . "Modelo =" . "'" . $data['modelo'] . "'  AND " . "IdMarca =" . "'" . $data['marca'] . "'";
        $this->db->select('*');
        $this->db->from('productos');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 0){
            $producto = array(
                'Nombre' => $data["nombre"],
                'Modelo' => $data["modelo"],
                'IdMarca' => $data["marca"],
                'IdCategoria' => $data["categoria"],
                'Website' => $data["website"],
                'Datasheet' => $data["datasheet"],
                'Descripcion' => $data["descripcion"]
            );
            $this->db->insert('productos', $producto);
            if ($this->db->affected_rows() > 0) {
                $result = $this->db->insert_id();
            }
        }
        return $result;
    }
    public function insert_productoImages($data){
        $result = 0;
        $image = array(
            'idProductos' => $data["idProductos"],
            'imagePath' => $data["imagePath"]
        );
        $this->db->insert('productosImages',$image);
        if($this->db->affected_rows() > 0){
            $result = 1;
        }
        return $result;
    }
    public function getAll($max = 0, $orderBy = 0, $categ = 0){
        if($max > 0){
            $this->db->limit($max);
        }
        $this->db->select('productos.*, categoria.Descripcion as Categoria, marca.Descripcion as Marca');
        $this->db->from('productos');
        $this->db->join('categoria', 'productos.IdCategoria = categoria.Id');
        $this->db->join('marca','productos.IdMarca = marca.Id');
        switch ($orderBy){
            case 1:
                $this->db->order_by('productos.Id',"asc");
                break;
            case 2:
                $this->db->order_by('productos.Id','RANDOM');
                break;
            default:
                $this->db->order_by('productos.Id',"desc");
        }
        if($categ != 0){
            $this->db->where('productos.IdCategoria',$categ);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $productos = $query->result_array();
            for($i = 0; $i < count($productos); $i++){

                $this->db->select('imagePath');
                $this->db->from('productosImages');
                $this->db->where('idProductos',$productos[$i]['Id']);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                    $images = $query->result_array();
                    foreach($images as $image){
                        $productos[$i]['Images'][] = $image['imagePath'];
                    }
                }
            }
            return $productos;
        } else {
            return array();
        }
    }
    public function get($id = 0){
        if($id == 0){
            return array();
        }
        $this->db->select('productos.*, categoria.Descripcion as Categoria, marca.Descripcion as Marca');
        $this->db->from('productos');
        $this->db->join('categoria', 'productos.IdCategoria = categoria.Id');
        $this->db->join('marca','productos.IdMarca = marca.Id');
        $this->db->where('productos.Id',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $producto = $query->row_array();
            $producto['Images'] = array();
            $this->db->select('imagePath');
            $this->db->from('productosImages');
            $this->db->where('idProductos',$producto['Id']);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                $images = $query->result_array();
                foreach($images as $image){
                    $producto['Images'][] = $image['imagePath'];
                }
            }
            return $producto;
        }
        return array();
    }
}