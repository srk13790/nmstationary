<?php

class Checker extends CI_controller{
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("user_id")))
         {
         redirect('Login');
         }
         $this->load->model('admin_model');
    }
    
    public function homepage() {
        $user_id=$this->session->userdata('user_id');
        $data['data']=$this->admin_model->getuserinfo($user_id);
        
        $this->load->view('mydashboard',$data);
    }
    
    public function Orders() {
        $user_id=$this->session->userdata('user_id');
        $data['product']=$this->admin_model->getproductinfo();
        $data['data']=$this->admin_model->getuserinfo($user_id);
        $data['myorder']=$this->admin_model->getpendingorderinfo($user_id);
        $this->load->view('pending_order',$data);
    }
    
    public function approveorder() {
       $data=$this->input->post('order_id');
       $this->admin_model->placeyourorder($data);
       redirect('Maker/Myorders');
    }
    
    
}