<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Document_model extends CI_Model{
function __construct(){
        parent::__construct();
                $this->rms = $this->load->database('rms',TRUE); 
                 
    }

    public function _getroomRequest($doc){
       // $query = $this->rms->where('f_locationcode', 'IBY'); 
        $query = $this->rms->where('f_DocumentCode', $doc); 
      $query =  $this->rms->get('tbl_DocumentCH'); 
     // echo  $this->rms->last_query();      
     return $query->result();   
    }
    
    public function _getroomBO($doc){
       // $query = $this->rms->where('f_locationcode', 'IBY'); 
        $query = $this->rms->where('f_DocumentCode', $doc); 
      $query =  $this->rms->get('tbl_DocumentBO'); 
     // echo  $this->rms->last_query();      
     return $query->result();   
    }    
    public function _getroomSO($doc){
      //  $query = $this->rms->where('f_locationcode', 'IBY'); 
        $query = $this->rms->where('f_DocumentCode', $doc); 
      $query =  $this->rms->get('tbl_DocumentSO'); 
     // echo  $this->rms->last_query();      
     return $query->result();   
    } 
    
    public function _getdocumentBO(){
     //   $query = $this->rms->where('f_locationcode', 'IBY'); 
      $query =  $this->rms->get('tbl_DocumentBO');      
     return $query->result();   
    }
    public function _getdocumentSO(){
    //    $query = $this->rms->where('f_locationcode', 'IBY'); 
      $query =  $this->rms->get('tbl_DocumentSO');      
     return $query->result();   
    }
    public function _getdocumentCH(){
    //    $query = $this->rms->where('f_locationcode', 'IBY'); 
      $query =  $this->rms->get('tbl_DocumentCH');      
     return $query->result();   
    }
    public function _getdocumentCancel(){
    //    $query = $this->rms->where('f_locationcode', 'IBY'); 
      $query =  $this->rms->get('tbl_DocumentCancel');      
     return $query->result();   
    }

    public function _getPromotion($doc){
        $query = $this->rms->order_by('f_LineCode', "asc"); 
        $query = $this->rms->order_by('f_CustomerCode', "asc"); 
        $query = $this->rms->order_by('f_DocumentCode', "asc"); 
        $query = $this->rms->where('f_LineCode <>', '10000'); 
      //  $query = $this->rms->where('f_locationcode', 'IBY'); 
        $query = $this->rms->where('f_DocumentCode', $doc); 
      $query =  $this->rms->get('tbl_Document'); 
    //  echo  $this->rms->last_query();      
     return $query->result();   
    }
    public function _getdocumenttransfer(){
        $query = $this->rms->order_by('f_RoomNumber', "asc"); 
       // $query = $this->rms->where('f_locationcode', 'IBY'); 
        $query = $this->rms->where('f_DoumentCodeStatus', '11'); 
      $query =  $this->rms->get('tbl_DocumentSO');      
     return $query->result();   
    } 

    public function _getroom_historybo($f_RoomCode){
      $query = $this->rms->where('f_RoomCode', $f_RoomCode); 
      $query =  $this->rms->get('tbl_DocumentBO');
      //echo  $this->rms->last_query();      
     return $query->result();   
    }
    
    public function _getroom_historyso($f_RoomCode){
      $query = $this->rms->where('f_RoomCode', $f_RoomCode); 
      $query =  $this->rms->get('tbl_DocumentSO');      
      //echo  $this->rms->last_query();
     return $query->result();   
    }
      
    public function _getroom_historych($f_RoomCode){
      $query = $this->rms->where('f_CustomerCode', $f_RoomCode); 
      $query =  $this->rms->get('tbl_Documentch');      
      //echo  $this->rms->last_query();
     return $query->result();   
    }
     
    public function _getroom_history($f_RoomCode){
        $query = $this->rms->order_by('f_CustomerCode', "asc"); 
        $query = $this->rms->order_by('f_DocumentCode', "asc");         
      $query = $this->rms->where('f_RoomCode', $f_RoomCode); 
      $query =  $this->rms->get('tbl_Document');      
     // echo  $this->rms->last_query();
     return $query->result();   
    }

    public function _checkSO($doc){
      //  $query = $this->rms->where('f_locationcode', 'IBY'); 
        $query = $this->rms->where('f_ExternalDocumentNo', $doc); 
      $query =  $this->rms->get('tbl_DocumentSO'); 
     // echo  $this->rms->last_query();      
     return $query->result();   
    } 

    public function _getroomCH($doc){
      $query = $this->rms->where('f_DocumentCode', $doc); 
      $query =  $this->rms->get('tbl_DocumentCH'); 
      //echo  $this->rms->last_query();      
     return $query->result();   
    } 
    public function _getroomCheck($doc){
      $query = $this->rms->where('f_DocumentBO', $doc); 
      $query =  $this->rms->get('tbl_DocumentCH'); 
    //  echo  $this->rms->last_query();      
     return $query->result();   
    }     
    
        public function docsoinfo($roomid)  {
            $test = 'ยกเลิก';
          $this->rms->where('f_DoumentCodeStatus !=','7'); 
          $this->rms->where('f_RoomCode', $roomid); 
          //$this->rms->select('*');  
      $query =  $this->rms->get('tbl_DocumentSO'); 
     //echo  $this->rms->last_query();     
     return $query->result();   
    } 
    
            public function docboinfo($roomid)  {

                $this->rms->where('f_DoumentCodeStatus !=','7');     
          $this->rms->where('f_RoomCode', $roomid); 
         // $this->rms->select('*');  
      $query =  $this->rms->get('tbl_DocumentBO'); 
      //echo  $this->rms->last_query();     
     return $query->result();   
    }              
}
?>
