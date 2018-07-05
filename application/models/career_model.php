<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career_model extends CI_Model{
function __construct(){
        parent::__construct();
                $this->orcl = $this->load->database('orcl',TRUE); 
                 
    }

    public function _getOracle(){
       $query =  $this->orcl->get('APPM_RPT_CONFIG'); 
     // echo  $this->orcl->last_query();      
     return $query->result();   
    }
    
    public function _getpositionjob(){
       $query =  $this->orcl->get('TBL_POSTION_JOB'); 
     // echo  $this->orcl->last_query();      
     return $query->result();   
    }
}
?>