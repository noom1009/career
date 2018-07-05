<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
    
    class report extends CI_Controller {
        function __construct(){
                parent::__construct();
                        $this->site = $this->session->userdata('site');
                        $this->project_key = $this->config->item('project_key');   
                        $this->appliactionname_thai = $this->config->item('appliactionname_thai');  
                         $data['copyright']  = 'Team IT' ;                                
                         $data['copyright_date']   = date('Y');                                
                         $data['copyright_author']  =  'Mr. Thanit Netprokaew' ;                                 
                         $data['projectname']  =  $this->appliactionname_thai ;          
                         }
        
        public function Index(){
            
            $lang =$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
            $this->lang->load($lang,$lang);
               if($this->session->userdata('f_acc_id'))
                       {                        
                $url_server =  'http://'.$_SERVER['HTTP_HOST'].'/reportview/';                   
                $reportCode = 'Report1';
                $reportFileName = 'Report1.rpt';
                $titleReport = 'รายงานสมัครงาน'; 
                $reportName = iconv("UTF-8", "TIS-620", $titleReport);               
                $cgiName="CrysLink11.exe";
                $getDLLName ='magicrpe.dll';
                $I_date_mode ='buddhist';
                $SERVER_NAME ='http://'.$_SERVER['HTTP_HOST'].'/career';                       
                $SeverViewReport ='http://'.$_SERVER['HTTP_HOST'].'/career/viewreport';                       
                $servername ='192.168.40.209'; 
                $systemcode ='PMIS';
                $userid ='IRIS';
                $dateReport = time();
                $report_path ='D:/www/career/pathreport/'.$reportFileName;
                $report_viewname = $userid.'_'.$reportCode.'_'.$dateReport.'.pdf';
                $report_type ='35';
                $download_mode ='View';
                $sqlWhereFilter ='';
                $pathreportgen = 'D:/www/career/viewreport/';
                $view_report_path ='test report|'.$pathreportgen.$report_viewname;
                $branchNo ='1';
                $titlebranch ='โครงการ ดิไอริส บางใหญ่';    
                $branchName = iconv("UTF-8", "TIS-620", $titlebranch);
                $reportFromparameter ='-';
                $reportToparameter ='zz';
                $prm7 ='';
                $prm9 ='';
                $tmp_pre= $branchNo."|".$branchName."|".$reportCode."|".$reportName."|".$userid."|".$reportFromparameter."|".$reportToparameter;
                $parameter = $report_path."~".$report_type."~".$view_report_path."~".$this->config->item('DataBaseName')."~".$this->config->item('UserName')."~".$this->config->item('Password')."~".$prm7."~".$tmp_pre."~";
                $param="param=".urlencode($parameter);
                $url="http://".$_SERVER['HTTP_HOST']."/cgi-bin/".$cgiName."?".$param; 
                $reporturl= $SeverViewReport.'/'.$report_viewname; 
                $debugsreport =0 ;
               // $url="http://"._SERVER_RPT_NAME_11_.":"._SERVER_RPT_PORT_11_."/"._PATH_CGIRPT_11_."/".$this->cgiName."?".$param;
                
                $ch=curl_init($url);
                curl_setopt($ch,CURLOPT_HEADER,0); 
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                curl_exec($ch);
                curl_close ($ch);
                
                if($debugsreport == 1){
                            echo "<BR>###############################################################";
                            echo "<BR># INFORMATION";
                            echo "<BR>###############################################################";                                      
                            echo "<BR>CGI NAME=".$cgiName;
                            echo "<BR>DLL NAME=".$getDLLName;
                            echo "<BR>DATE MODE=".$I_date_mode;
                            echo "<BR>SERVER NAME=".$servername;
                            echo "<BR>SYSTEM CODE=".$systemcode;
                            echo "<BR>USER ID=".$userid;
                            echo "<BR>REPORT PATH=".$report_path;
                            echo "<BR>REPORT TYPE=".$report_type;
                            echo "<BR>EXPORT REPORT DIR=".$report_path;
                            echo "<BR>GENERATE REPORT CODE=".$report_viewname;
                            echo "<BR>DOWNLOAD MODE=".$download_mode;
                            echo "<BR>SQL FILTER=".$sqlWhereFilter;
                            echo "<BR>Branch Name=".$branchName;
                            echo "<BR>Report Name=".$reportName;
                            echo "<BR>###############################################################";
                            echo "<BR># PARAMETER";
                            echo "<BR>###############################################################";                                                                 
                            echo "<BR>Gen Parameter =".$tmp_pre; 
                            echo "<BR>###############################################################";                             
                            echo "<BR>(1)=".$report_path.",<BR>(2)=".$report_type.",<BR>(3)=".$view_report_path.",<BR>(4)=".$this->config->item('DataBaseName').",<BR>(5)=".$this->config->item('UserName').",<BR>(6)=".$this->config->item('Password').",<BR>(7)=".$prm7.",<BR>(8)=".$tmp_pre.",<BR>(9)=".$prm9;
                            echo "<BR>###############################################################";        
                            echo "<BR>URL Parameter =".$parameter;         
                            echo "<BR>###############################################################"; 
                            echo "<BR>ENCode Parameter =".$param;                   
                            echo "<BR>###############################################################"; 
                            echo "<BR>ENCode Parameter =".$url;                            
                            die();                       
                        }else{
                            $report =  header("Location: ".$SeverViewReport."/".$report_viewname);
                            //redirect($reporturl, 'refresh');
                }                          
                         
                         redirect($report, 'refresh');                              
                         //$this->load->view('report',$data);                         
                       }else{
                         //If no session, redirect to login page
                         redirect('login', 'refresh');
                       }            
        }
    }
?>   