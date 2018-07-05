<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
         $username = $this->security->xss_clean($this->input->post('login_username'));
         $password = $this->security->xss_clean($this->input->post('login_password'));  
         $pass = md5($password); 
         $status_ok = 1;
        $query = $this->db->where('f_login_name',$username)    
        ->where('f_login_password',$pass)
        ->where('f_status',$status_ok)
        ->get('tbl_account');
        
        $total = $this->db->select('*')
        ->from('tbl_account')
        ->where('f_login_name',$username)
        ->where('f_login_password',$pass)
        ->where('f_status',$status_ok) 
        ->count_all_results();

        if($total == 1){
            // If there is a user, then create session data
            //echo 'รหัสผ่านถูกต้อง';
            $row = $query->row();
            $data = array(
                    'f_acc_id' => $row->f_acc_id,
                    'f_name' => $row->f_name,
                    'f_login_name' => $row->f_login_name,
                    'f_org_id' => $row->f_org_id,
                    'f_account_type' => $row->f_account_type,
                    'f_company' => $row->f_company,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            $insert = array(
            'employeeID' => $row->f_acc_id,
            'username' => $row->f_name,
            'dateCreate' => time(),
            'reportName' => 'Login System'
            );
            $this->db->insert('tbl_reportLog',$insert);
            return true;
           // echo 'suess'; 
        }else{
            //echo $this->db->last_query(); 
           // die();
            echo 'รหัสผ่านไม่ถูกต้อง';
            return false;
        }
           //echo $this->db->last_query(); 
        //die();    
            return true;
        $this->db->close();
    }
}
?>