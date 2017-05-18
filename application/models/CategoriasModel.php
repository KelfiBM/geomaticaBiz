<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class CategoriasModel extends CI_Model {
    public function getAll(){
        $this->db->select('*');
        $this->db->from('categoria');
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return array();
        }
    }
}