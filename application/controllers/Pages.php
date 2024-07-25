<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit','2048M');
date_default_timezone_set('Asia/Manila');
    class Pages extends CI_Controller{
        public function index(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            $data['home'] = "current-menu-item";
            $data['pastor'] = '';
            $data['sermon'] = '';
            $data['events'] = '';
            $data['gallery'] = '';
            $data['members'] = '';            
            $this->load->view('includes/header');
            $this->load->view('includes/navbar',$data);
            $this->load->view('pages/'.$page);         
            $this->load->view('includes/footer');               
        }        
}
?>
