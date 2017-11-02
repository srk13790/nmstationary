<?php

class Admin_model extends CI_Model{
    
    public function getuserinfo($user_id) {
        $query=$this->db->query("select u.name, u.contact, u.email, m.module_name from users u inner join module m where u.user_id='$user_id' and u.module=m.module_id");
        return $data=$query->result_array();
    }
    
    public function getorderinfo($user_id) {
        //print("SELECT p.product_name,mo.`order_id`,mo.`product_id`,mo.`user_id`,mo.`quantity`,mo.`price`,mo.`status` FROM `myorder` mo inner join product p where mo.user_id='$user_id' and p.product_id=mo.product_id");exit;
        $query=$this->db->query("SELECT p.product_name,mo.`order_id`,mo.`product_id`,mo.`user_id`,mo.`quantity`,mo.`price`,mo.`status` FROM `myorder` mo inner join product p where mo.user_id='$user_id' and p.product_id=mo.product_id");
        return $data=$query->result_array();
    }
    
    public function getproductinfo() {
        $query=$this->db->query("SELECT * from product where status='Show'");
        return $data=$query->result_array();
    }
    public function addorder($data) {
        $query=$this->db->insert('myorder',$data);  
    }
    
}