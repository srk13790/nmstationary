<?php
class NM_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("user_id")))
         {
         redirect('Login');
         }
    }
    
    public function logout() {
        session_destroy();
        $this->load->view('login');
    }
}
?>