<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class AdminModel extends CI_Model {

    public function registration_insert($data) {

        $condition = "user_name =" . "'" . $data['user_name'] . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {

            $this->db->insert('user_login', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function login($data) {

        $condition1 = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
        $condition2 = "user_email =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition1);
        $this->db->or_where($condition2);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

// Read data from database to show data in admin page
    public function read_user_information($username) {

        $condition = "user_name =" . "'" . $username . "' OR user_email =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}