<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
    class Loading extends CI_Controller {
        
        public function Index(){
                $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
                $this->lang->load($lang,$lang);
                /*
                $this->load->dbutil();
                // check connection details
                if(! $this->dbutil->database_exists('database'))
                {
                    // if connection details incorrect show error
                    echo 'ติดต่อฐานข้อมูลได้';
                }else{
                     echo 'ติดต่อฐานข้อมูลไม่ได้'; 
                } */
                $this->load->model('login_model');
                $result = $this->login_model->validate();              
                    if($this->session->userdata('f_acc_id')){
                         $session_data = $this->session->userdata('f_acc_id');
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'Mr. Thanit Netprokaew' ;    
                        redirect('main', 'refresh');   
                       }else{
                        $this->load->view('login_eror',$data);
                       }
            }
        
        
    }
?>