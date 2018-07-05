<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo $this->lang->line('lang_application_name');?></title>
        <link id="page_favicon" href="favicon.ico" rel="icon" type="image/x-icon" />
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
        <![endif]-->
   
    </head>

    <body class="no-skin">
           <?php include 'topmenu.php';?>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                </script>



         <?php include 'meun.php';?>
       <!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">หน้าหลัก</a>
                            </li>
                            <li class="active"><?php echo 'ปฏิทินวันหยุด';?></li>
                        </ul><!-- /.breadcrumb -->
                         <a herf=""></a>
                        <div class="nav-search" id="nav-search">
                            <a href="?lang=en" data-target="en"><img src="<?php echo base_url();?>images/en.png"></a> | <a href="?lang=local" data-target="th"><img src="<?php echo base_url();?>images/th.png"></a>
                        </div><!-- /.nav-search -->
                    </div>
 <?php
    $runningdoc ='19/2560';
?>
                    <div class="page-content">
     <div class="row">
                            <div class="col-xs-12">
                                 <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-large">
                                                <h3 class="widget-title grey lighter">
                                                    <i class="ace-icon fa fa-bullhorn green"></i>
                                                    เรื่อง&nbsp;วันหยุดประจำปี&nbsp;2561
                                                </h3>

                                                <div class="widget-toolbar no-border invoice-info">
                                                    <span class="invoice-info-label">ประกาศเลขที่:</span>
                                                    <span class="red">19/2560</span>

                                                    <br />
                                                    <span class="invoice-info-label">ผลบังคับใช้:</span>
                                                    <span class="blue">11/10/2560</span>
                                                </div>
                                                <div class="widget-toolbar hidden-480">
                                                    <a href="#">

                                                    </a>
                                                </div>                                                
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-24">
                                                    <h5>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        เพื่อประโยชน์ในการวางแผนการทำงานภายในบริษัทฯและผู้ที่เกี่ยวข้อง จึงกำหนดวันหยุดประจำปี 2561 ของบริษัท ไอริส กรุ๊ป จำกัด และบริษัทในเครือ ดังนี้
                                                    </h5>    
   
                                                    <div class="space"></div>

                                                    <div>
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>ลำดับ</th>
                                                                    <th></th>
                                                                    <th>วัน/เดือน</th>
                                                                    <th>รายละเอียด</th>                                                                    
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                            
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>วันจันทร์</td>
                                                                    <td>1 มกราคม</td>
                                                                    <td>วันขึ้นปีใหม่</td>                                                                
                                                                </tr>                                                            
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>วันพฤหัสบดี</td>
                                                                    <td>1 มีนาคม</td>
                                                                    <td>วันมาฆบูชา</td>                                                                
                                                                </tr>                                                             
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>วันพฤหัสบดี</td>
                                                                    <td>12 เมษายน</td>
                                                                    <td>วันสงกรานต์</td>                                                                
                                                                </tr>                                                             
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>วันศุกร์</td>
                                                                    <td>13 เมษายน</td>
                                                                    <td>วันสงกรานต์</td>                                                                
                                                                </tr>                                                             
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>วันจันทร์</td>
                                                                    <td>16 เมษายน</td>
                                                                    <td>ชดเชยวันสงกรานต์</td>                                                                
                                                                </tr>                                                             
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>วันอังคาร</td>
                                                                    <td>1 พฤษภาคม</td>
                                                                    <td>วันแรงงานแห่งชาติ</td>                                                                
                                                                </tr>                                                             
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>วันอังคาร</td>
                                                                    <td>29 พฤษภาคม</td>
                                                                    <td>วันวิสาขบูชา</td>                                                                
                                                                </tr>
                                                              
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>วันศุกร์</td>
                                                                    <td>27 กรกฏาคม</td>
                                                                    <td>วันอาสาฬหบูชา</td>                                                                
                                                                </tr>
 
                                                                
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>วันจันทร์</td>
                                                                    <td>30 กรกฏาคม</td>
                                                                    <td>ชดเชยวันเฉลิมพระชนมพรรษาฯสมเด็จพระเจ้าอยู่หัวมหาวิราลงกรณ บดินทรเทพยวรางกูร</td>                                                                
                                                                </tr>
 
                                                                
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>วันจันทร์</td>
                                                                    <td>13 สิงหาคม</td>
                                                                    <td>ชดเชยวันแม่แห่งชาติ</td>                                                                
                                                                </tr>
 
                                                                
                                                                <tr>
                                                                    <td>11</td>
                                                                    <td>วันจันทร์</td>
                                                                    <td>15 ตุลาคม</td>
                                                                    <td>ชดเชยวันคล้ายวันสวรรคตของพระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช</td>                                                                
                                                                </tr>
 
                                                                
                                                                <tr>
                                                                    <td>12</td>
                                                                    <td>วันอังคาร</td>
                                                                    <td>23 ตุลาคม</td>
                                                                    <td>วันปิยมหาราช</td>                                                                
                                                                </tr>
 
                                                                
                                                                <tr>
                                                                    <td>13</td>
                                                                    <td>วันพุธ</td>
                                                                    <td>5 ธันวาคม</td>
                                                                    <td>วันพ่อแห่งชาติ</td>                                                                
                                                                </tr>
 
                                                                
                                                                <tr>
                                                                    <td>14</td>
                                                                    <td>วันจันทร์</td>
                                                                    <td>31 ธันวาคม</td>
                                                                    <td>วันสิ้นปี</td>                                                                
                                                                </tr>
 
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="hr hr8 hr-double hr-dotted"></div>

                                                    <div class="well">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        และบริษัทฯกำหนดให้วันเสาร์ที่ 14 เมษายน 2560 , วันเสาร์ที่ 28 กรกฏาคม 2560 และวันเสาร์ที่ 13 ตุลาคม 2560 เป็นวันหยุด.พักผ่อนประจำปีของพนักงานที่ปฏิบัติงานประจำโครงการ รวม 3 วัน
                                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        สำหรับหน่วยงานใด และบริษัทในเครือที่จำเป็นต้องเปิดให้บริการลูกค้าในวันหยุดประจำปีที่กำหนดไว้ ให้ผู้บริหารภายในหน่วยงาน และ/หรือบริษัทในเครือกำหนดวันหยุดชดเชยให้แก่พนักงานตามระเบียบข้อบังคับการทำงานของบริษัทฯ ต่อไป
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-5 pull-right">
                                                            <h4 class="pull-right">
                                                                จึงประกาศมาเพื่อให้ทราบและปฏิบัติโดยทั่วกัน
                                                            </h4>
                                                            
                                                            <h6 class="pull-right">
                                                                ประกาศ ณ วันที่ 11 ตุลาคม 2560
                                                            </h6>
                                                            
                                                        </div>
                                                        <div class="col-sm-7 pull-left"></div>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div>
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                         <span class="bigger-120">
                            <span class="blue bolder"><?php echo $copyright;?></span>
                            <?php echo $copyright_author;?> &copy; <?php echo $copyright_date;?>ความเร็วเปิดหน้าจอ <strong>{elapsed_time}</strong> วินาที่
                        </span>

                        &nbsp; &nbsp;
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.min.js'>"+"<"+"/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

            <!-- page specific plugin scripts -->
        <script src="<?php echo base_url();?>assets/js/jquery.nestable.min.js"></script>
            <!-- page specific plugin scripts -->
        <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>plugins/fastclick/fastclick.js"></script>
 

    </body>
</html>
