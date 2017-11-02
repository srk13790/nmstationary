<?php
class Maker extends CI_controller{
    
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
    
    public function Myorders() {
        $user_id=$this->session->userdata('user_id');
        $data['product']=$this->admin_model->getproductinfo();
        $data['data']=$this->admin_model->getuserinfo($user_id);
        $data['myorder']=$this->admin_model->getorderinfo($user_id);
        
        $this->load->view('myorder',$data);
    }
    
    public function addorder() {
        $data=$this->input->post();
        
        $this->form_validation->set_rules('product_id', 'Product', 'required');
    
        $this->form_validation->set_rules('quantity_type', 'Quantity Type', 'required');

        $this->form_validation->set_rules('quantity', 'Quantity', 'required');

        $this->form_validation->set_rules('price', 'Price', 'required');
        if ($this->form_validation->run() == FALSE)
        {
          $this->session->set_userdata('errors',validation_errors());
          redirect('Maker/Myorders');
        }
        else{
          $user_id=$this->session->userdata('user_id');
          $data['user_id']=  $user_id;
          $data['created_date']=  date("d-m-Y");
          $data['str_to_time_created_date']= strtotime(date("d-m-Y"));
          $this->admin_model->addorder($data);
          $this->session->set_userdata('error','order_saved');
          redirect('Maker/Myorders');
        }
    }
    
    public function logout() {
        session_destroy();
        $this->load->view('login');
    }
    
}