<?php
    date_default_timezone_set('Asia/Manila');
    class Church_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }        
    }
?>