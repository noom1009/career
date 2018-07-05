<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
    class Login extends CI_Controller {   
    function __construct(){
        parent::__construct();
        $this->site = $this->session->userdata('site');
    }
        
        
        public function index(){
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);

            $this->load->view('login');

        }      
         public function logout(){
            $this->lang->load('thailand', $this->session->userdata('language'));
            $this->session->sess_destroy();
            //echo $this->session->userdata('f_name');
            //$this->load->view('login'); 
            $this->db->cache_delete_all();
            redirect('career');
            //$this->load->view('cover');
        }        
               
    }
?>
