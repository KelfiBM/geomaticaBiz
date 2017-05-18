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
}