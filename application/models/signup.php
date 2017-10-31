<?php

class Signup extends NM_Model{
    
    public function adduser($data) {
        //print_r($data);exit;
        $query=$this->db->insert('users', $data);
        //print($query);
    }
    
    public function validateuser($email,$password) {
        //print_r($data);exit;
        $query=$this->db->query("select user_id from users where email='$email' and password='$password'");
        $no=$query->num_rows();
        if($no == 1)
        {
           //return $query->result_array();
            $data['user_id']=$query->row()->user_id;
            $data['module']=$query->row()->module;
            $data['name']=$query->row()->name;
            
            return $data;
        
        }
        
    }
}