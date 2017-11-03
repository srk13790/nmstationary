<?php
class Ajaxcall extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata("user_id")))
         {
         redirect('Login');
         }
        $this->load->model('Ajxcall');
      }
    
    public function getprice($data){
        //echo "Hi";exit;
//        $quantity_type= $this->input->post('quantity_type');
//        $data['data']=$this->Ajxcall->getprice($quantity_type);
//        //print_r($data);exit;
        $this->load->view('Ajaxprice',$data);
    }
    
    
}