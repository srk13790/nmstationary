<?php

class Admin_model extends CI_Model{
    
    public function getuserinfo($user_id) {
        $query=$this->db->query("select u.name, u.contact, u.email, m.module_name from users u inner join module m where u.user_id='$user_id' and u.module=m.module_id");
        return $data=$query->result_array();
    }
    
    public function getorderinfo($user_id) {
        //print("SELECT p.product_name,mo.`order_id`,mo.`product_id`,mo.`user_id`,mo.`quantity`,mo.`price`,mo.`status` FROM `myorder` mo inner join product p where mo.user_id='$user_id' and p.product_id=mo.product_id");exit;
        $query=$this->db->query("SELECT p.product_id,p.product_name,p.product_price,p.product_box,mo.`order_id`,mo.`product_id`,mo.`user_id`,mo.`quantity`,mo.quantity_type,mo.`price`,mo.`status`,mo.reason,mo.approve_status FROM `myorder` mo inner join product p where mo.user_id='$user_id' and p.product_id=mo.product_id");
        return $data=$query->result_array();
    }
    
    public function getapproveorderinfo() {
        //print("SELECT p.product_name,mo.`order_id`,mo.`product_id`,mo.`user_id`,mo.`quantity`,mo.`price`,mo.`status` FROM `myorder` mo inner join product p where mo.user_id='$user_id' and p.product_id=mo.product_id");exit;
        $query=$this->db->query("SELECT u.name,u.company_name,u.department_name,p.product_id,p.product_name,p.product_price,p.product_box,mo.`order_id`,mo.`product_id`,mo.`user_id`,mo.`quantity`,mo.quantity_type,mo.`price`,mo.`status`,mo.approve_date FROM `myorder` mo inner join product p inner join users u where mo.user_id=u.user_id and mo.status='Sent' and mo.approve_status='Yes' and mo.cancel_status='' and p.product_id=mo.product_id");
        return $data=$query->result_array();
    }
    
    public function getpendingorderinfo() {
        //print("SELECT p.product_name,mo.`order_id`,mo.`product_id`,mo.`user_id`,mo.`quantity`,mo.`price`,mo.`status` FROM `myorder` mo inner join product p where mo.user_id='$user_id' and p.product_id=mo.product_id");exit;
        $query=$this->db->query("SELECT u.name,u.company_name,u.department_name,p.product_id,p.product_name,p.product_price,p.product_box,mo.`order_id`,mo.`product_id`,mo.`user_id`,mo.`quantity`,mo.quantity_type,mo.`price`,mo.`status`,mo.approve_date FROM `myorder` mo inner join product p inner join users u where mo.user_id=u.user_id and mo.status='Sent' and mo.approve_status='' and mo.cancel_status='' and p.product_id=mo.product_id");
        return $data=$query->result_array();
    }
    
    public function getproductinfo() {
        $query=$this->db->query("SELECT * from product where status='Show'");
        return $data=$query->result_array();
    }
    
    public function getprice($product_id) {
        $query=$this->db->query("SELECT product_price from product where product_id='$product_id'");
        return $data=$query->row()->product_price;
    }
    
    public function addorder($data) {
        $query=$this->db->insert('myorder',$data);  
    }
    public function placeyourorder($data) {
        $key="13790";
        $order_id=(base64_decode($data)/$key);
        
        $query=$this->db->query("update myorder set status='Sent' where order_id='$order_id'");
    }
    public function updateyourorder($data,$order_id) {
        $key="13790";
        $order_id=(base64_decode($order_id)/$key);
        $quantity=$data['quantity'];
        $quantity_type=$data['quantity_type'];
        $price=$data['price'];
        
        $query=$this->db->query("update myorder set quantity='$quantity',quantity_type='$quantity_type',price='$price',approve_status='' where order_id='$order_id'");
    }
    
    public function approveyourorder($data) {
        $key="13790";
        $order_id=$data['order_id'];
        $approve_date=$data['approve_date'];
        $order_id=(base64_decode($order_id)/$key);
        //print("update myorder set approve_status='Yes',approve_date='$approve_date' where order_id='$order_id'");exit;
        $query=$this->db->query("update myorder set approve_status='Yes',approve_date='$approve_date' where order_id='$order_id'");
    }
    public function disapproveyourorder($data) {
        $key="13790";
        $reason=$data['reason'];
        $order_id=$data['order_id'];
        $order_id=(base64_decode($order_id)/$key);
        //print("update myorder set approve_status='No',reason='$reason' where order_id='$order_id'");exit;
        $query=$this->db->query("update myorder set approve_status='No',reason='$reason' where order_id='$order_id'");
    }
}