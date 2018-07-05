<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leaveonline extends CI_Controller {
    
    public function index(){
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       { 
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'IRIS GROUP' ;                                               
                        $this->load->model('document_model','doc'); 
                        $data['query'] = $this->doc->_getdocumentBO();
                         $this->load->view('leaveonline_book',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }                                                   
        }            
}
