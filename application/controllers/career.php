<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends CI_Controller {

    public function index()
    {
        $this->load->model('career_model','career');

        $this->load->view('career');
    }
    
    public function position(){
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       { 
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'IRIS GROUP' ;                                               
                          $this->load->model('career_model','career');
                         $data['query'] = $this->career->_getpositionjob();  
                         $this->load->view('position',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }                                                   
        }    
    public function position_add(){
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       { 
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'IRIS GROUP' ;                                               
                           $this->load->model('career_model','career');
                         $data['query'] = $this->career->_getpositionjob();  
                         $this->load->view('position_add',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }                                                   
        }        
}
