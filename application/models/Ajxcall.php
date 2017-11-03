<?php

class Admin_model extends CI_Model{
    
    public function getprice($user_id) {
        $query=$this->db->query("select u.name, u.contact, u.email, m.module_name from users u inner join module m where u.user_id='$user_id' and u.module=m.module_id");
        return $data=$query->result_array();
    }
}