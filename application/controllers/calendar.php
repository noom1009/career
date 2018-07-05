<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
    
    class calendar extends CI_Controller {
      function __construct(){
           parent::__construct();        
    }      
        public function Index(){
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       { 
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'IRIS GROUP' ;                                               
                        $this->load->model('document_model','doc'); 
                        $data['query'] = $this->doc->_getdocumentBO();
                         $this->load->view('calendar',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }                                                   
        }  
                    
        public function timeline(){
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       { 
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'IRIS GROUP' ;                                               
                        $this->load->model('document_model','doc'); 
                        $data['query'] = $this->doc->_getdocumentBO();
                         $this->load->view('timeline',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }                                                   
        }                    
        public function cheaptickets(){
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       { 
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'IRIS GROUP' ;                                               

                         $this->load->view('cheaptickets',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }                                                   
        }   
                         
        public function leaveonline(){
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       { 
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'IRIS GROUP' ;                                               

                         $this->load->view('leaveonline',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }                                                   
        } 
    }        
 ?>         