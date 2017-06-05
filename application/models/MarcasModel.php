<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class MarcasModel extends CI_Model {
    public function getAll(){
        $this->db->select('*');
        $this->db->from('marca');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    public function exist_id($id){
        $this->db->where('Id',$id);
        $query = $this->db->get('marca');
        if ($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}