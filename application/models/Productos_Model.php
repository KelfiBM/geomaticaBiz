<?php
Class Productos_Model extends CI_Model {
    public function insert_producto($data){
        $condition = "Nombre =" . "'" . $data['nombre'] . "' AND " . "Modelo =" . "'" . $data['modelo'] . "'  AND " . "IdMarca =" . "'" . $data['idMarca'] . "'";
        $this->db->select('*');
        $this->db->from('productos');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() != 0){
            return false;
        }
        else{
            $this->db->insert('productos', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else{
                return false;
            }
        }
    }
}