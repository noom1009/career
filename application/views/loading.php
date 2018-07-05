<html>
<head>
    <title>ระบบยืนยันตัวตน</title>
    <meta charset="UTF-8" />
    <link id="page_favicon" href="favicon.ico" rel="icon" type="image/x-icon" />                
    <meta http-equiv="refresh" content="2; url=<?php echo base_url();?>index.php/main/">         
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css" media="screen" />     
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript">
    jQuery(window).load(function() {
        jQuery('#loading-image').hide();
    });
    </script>
            <style type="text/css">
    
            
            #redirectwrap{
                background: #F0F5FA;
                background-image:url(../images/bg1.gif);   
                border: 1px solid #C2CFDF;
                margin: 200px auto 0 auto;
                text-align: left;
                width: 520px;
            }
            
            #redirectwrap h4{
                background: #D0DDEA;
                border-bottom: 1px solid #C2CFDF;
                color: #3A4F6C;
                font-size: 14px;
                margin: 0;
                padding: 5px;
            }
            
            #redirectwrap p{
                margin: 0;
                padding: 5px;
            }
                                    
            #redirectwrap p.redirectfoot{
                background: #E3EBF4;
                border-top: 1px solid #C2CFDF;
                text-align: center;   
            }
        </style>
</head>
<body>
        <center>
            <div id="redirectwrap">
                <h4>ระบบยืนยันตัวตน</h4>
                <img src="<?php echo base_url();?>images/splash/splash.png" />
                <center>
                    <p><?php echo $this->lang->line('Copyright');?></p>
                    <img src="<?php echo base_url();?>/images/ajax-loader.gif" />
                </center>
                <br/>
                <?php if($this->session->userdata('f_account_type') == 1) {?> 
                <p class="redirectfoot"><a href="<?php echo base_url();?>index.php/admin"><?php echo $this->lang->line('skip');?></a></p>
                <?php }else{?>            
                <p class="redirectfoot"><a href="<?php echo base_url();?>index.php/main"><?php echo $this->lang->line('skip');?></a></p>                
                <?php }?>  
            </div>
        </center>
</body>
</html>