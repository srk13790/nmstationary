<?php

class Login extends CI_controller{
    public function __construct() {
        parent::__construct();
         $this->load->model('signup');
    }
    
    public function index() {
        //session_destroy();
        $this->load->view('login');
    }
    
    public function signup() {
        $data=$this->input->post();
        
        $this->form_validation->set_rules('name', 'Your Name', 'required');
    
        $this->form_validation->set_rules('email', 'Your Email', 'required');

        $this->form_validation->set_rules('contact', 'Your Contact', 'required');

        $this->form_validation->set_rules('company_name', 'Your Company Name', 'required');

        $this->form_validation->set_rules('department_name', 'Your Department Name', 'required');

        $this->form_validation->set_rules('password', 'Your Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
          $this->session->set_userdata('error','signup_blank');
          redirect('Login/index');
        }
        else{
          $data['created_date']=  date("d-m-Y");
          $data['str_to_time_created_date']= strtotime(date("d-m-Y"));
          $this->signup->adduser($data);
          $this->session->set_userdata('error','signup_success');
          redirect('Login/index');
        }
        
    }
    
    public function authenticate() {
        
        if($this->input->post()){
            
            $data=$this->input->post();
            if(!empty($data)){
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            
            $login= $this->signup->validateuser($email,$password);
            
            if($login)
            { 
              $this->session->set_userdata('success',$login);
              $this->session->userdata('success');
              $uid=$login['user_id'];
              $module=$login['module'];
              $name=$login['name'];
              $this->session->set_userdata('user_id',$uid);
              $this->session->set_userdata('module',$module);
              $this->session->set_userdata('name',$name);
              if($module ==1){
                  redirect('Admin/homepage');
              }
              else if($module ==2){
                  redirect('Maker/homepage');
              }
              else if($module ==3){
                  redirect('Checker/homepage');
              }
              else{
                  $this->session->set_userdata('error','invalid');
                  redirect('Login/index');
              }
              
            }
            else
            {   
            $this->session->set_userdata('error','invalid');
            redirect('Login/index');
            }
            
        }
        }
        
        
        
    }
    
}