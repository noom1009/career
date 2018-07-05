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
   <script src="<?php echo base_url();?>/js/hc.js"></script>



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
              </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                         <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">หน้าหลัก</a>
                            </li>
                            <li class="active"><?php echo 'ตรวจสอบประวัติการลา';?></li>
                        </ul><!-- /.breadcrumb -->
                         <a herf=""></a>
                        <div class="nav-search" id="nav-search">
                            <a href="?lang=en" data-target="en"><img src="<?php echo base_url();?>images/en.png"></a> | <a href="?lang=local" data-target="th"><img src="<?php echo base_url();?>images/th.png"></a>
                        </div><!-- /.nav-search -->
                    </div>


                         <div class="page-content"> 
                          <div class="row">
                            <div class="col-xs-12">
                                    <div id="user-profile-1" class="user-profile row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="avatar" class="editable img-responsive" alt="<?php echo iconv("tis-620", "UTF-8",$this->session->userdata('f_name'));?>" src="<?php echo base_url();?>assets/avatars/profile-pic.jpg" />
                                                </span>

                                                <div class="space-4"></div>

                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white"><?php echo iconv("tis-620", "UTF-8",$this->session->userdata('f_name'));?></span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="center">
                                                <span class="btn btn-app btn-sm btn-light no-hover">
                                                    <span class="line-height-1 bigger-170 blue">10</span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> ลาป่วย </span>
                                                </span>

                                                <span class="btn btn-app btn-sm btn-yellow no-hover">
                                                    <span class="line-height-1 bigger-170">1</span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> ลากิจ </span>
                                                </span>

                                                <span class="btn btn-app btn-sm btn-pink no-hover">
                                                    <span class="line-height-1 bigger-170">3</span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> ลาพักร้อน </span>
                                                </span>

                                                <span class="btn btn-app btn-sm btn-grey no-hover">
                                                    <span class="line-height-1 bigger-170"> 0</span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> ลาคลอด </span>
                                                </span>

                                                <span class="btn btn-app btn-sm btn-success no-hover">
                                                    <span class="line-height-1 bigger-170"> 0 </span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> ลาบวช </span>
                                                </span>

                                                <span class="btn btn-app btn-sm btn-primary no-hover">
                                                    <span class="line-height-1 bigger-170"> 0 </span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> ลาอื่นๆ </span>
                                                </span>
                                            </div>

                                            <div class="space-12"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> ลาป่วย </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username">alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> ลากิจ </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span class="editable" id="country">Netherlands</span>
                                                        <span class="editable" id="city">Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> ลาพักร้อน </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> ลาคลอด </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup">2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> ลาบวช </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> ลาอื่นๆ</div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> 
                                                                                <div class="hr hr12 dotted"></div>                             
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">ชื่อผู้รับมอบหมายงาน</label>

                                        <div class="col-sm-9">
                                            <input type="text" id="form-field-1" placeholder="Username" value="<?php echo iconv("tis-620", "UTF-8",$this->session->userdata('f_name'));?> " class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> วันที่เริ่มลา </label>

                                        <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-xs-8 col-sm-11">
                                                                <div class="input-group">
                                                                    <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-calendar bigger-110"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> วันที่สิ้นสุดการลา </label>

                                        <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-xs-8 col-sm-11">
                                                                <div class="input-group">
                                                                    <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-calendar bigger-110"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                    </div>
                                    <div class="space-4"></div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">เหตุผลการลา</label>

                                        <div class="col-sm-9">
                                            <input type="text" id="form-field-1" placeholder="" value="" class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>


                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button class="btn btn-info" type="button">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                บันทึกใบลา
                                            </button>

                                            &nbsp; &nbsp; &nbsp;
                                            <button class="btn" type="reset">
                                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                                ยกเลิก
                                            </button>
                                        </div>
                                    </div>

                                    <div class="hr hr-24"></div>

                        </div><!-- /.row -->                         
                                                                        
                        <div class="row">
                            <div class="col-xs-12">
                               <div class="row">
                                    <div class="col-xs-12">

                                        <div class="table-header">
                                            ตรวจสอบประวัติการลา
                                        </div>

                                        <!-- div.table-responsive -->

                                        <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>ตำแหน่งงาน</th>
                                                        <th>บริษัท</th>
                                                        <th>อัตรากำลัง</th>
                                                        <th>วันที่ประกาศ</th>
                                                        <th>สถานะ</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
<?php 
 $i=1;
?>
                                                    
                                                    <tr>
                                                        <td class="center">
                                                            <?php echo $i;?>
                                                        </td>

                                                        <td>
                                                            <a href="#">ผู้อำนวยการฝ่ายการตลาด</a>
                                                        </td>
                                                        <td>บริษัท ไอริส กรุ๊ป จํากัด </td>
                                                        <td><?php echo '1';?></td> 
                                                        <td><?php echo date('d/m/Y');?></td>

                                                        <td class="hidden-480">
                                                            <span class="label label-sm label-danger">ด่วน</span>
                                                        </td>

                                                        <td>
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a class="blue" href="#">
                                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                </a>

                                                                <a class="green" href="#">
                                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                </a>

                                                                <a class="red" href="#">
                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                            </div>

                                                            <div class="hidden-md hidden-lg">
                                                                <div class="inline pos-rel">
                                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                    </button>

                                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                        <li>
                                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                <span class="blue">
                                                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                <span class="green">
                                                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                <span class="red">
                                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="center">
                                                            <?php echo '2';?>
                                                        </td>

                                                        <td>
                                                            <a href="#">วิศวกร-โฟร์แมน </a>
                                                        </td>
                                                        <td>บริษัท ไอริส กรุ๊ป จํากัด </td>
                                                        <td><?php echo '1';?></td> 
                                                        <td><?php echo date('d/m/Y');?></td>

                                                        <td class="hidden-480">
                                                            <span class="label label-sm label-danger">ด่วน</span>
                                                        </td>

                                                        <td>
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a class="blue" href="#">
                                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                </a>

                                                                <a class="green" href="#">
                                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                </a>

                                                                <a class="red" href="#">
                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                            </div>

                                                            <div class="hidden-md hidden-lg">
                                                                <div class="inline pos-rel">
                                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                    </button>

                                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                        <li>
                                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                <span class="blue">
                                                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                <span class="green">
                                                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                <span class="red">
                                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="center">
                                                            <?php echo '3';?>
                                                        </td>

                                                        <td>
                                                            <a href="#">เจ้าหน้าที่เขียนแบบ Draftsman </a>
                                                        </td>
                                                        <td>บริษัท ไอริส กรุ๊ป จํากัด </td>
                                                        <td><?php echo '1';?></td> 
                                                        <td><?php echo date('d/m/Y');?></td>

                                                        <td class="hidden-480">
                                                            <span class="label label-sm label-danger">ด่วน</span>
                                                        </td>

                                                        <td>
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a class="blue" href="#">
                                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                </a>

                                                                <a class="green" href="#">
                                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                </a>

                                                                <a class="red" href="#">
                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                            </div>

                                                            <div class="hidden-md hidden-lg">
                                                                <div class="inline pos-rel">
                                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                    </button>

                                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                        <li>
                                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                <span class="blue">
                                                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                <span class="green">
                                                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                <span class="red">
                                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                     
                                                    <tr>
                                                        <td class="center">
                                                            <?php echo '4';?>
                                                        </td>

                                                        <td>
                                                            <a href="#">เจ้าหน้าที่การเงิน </a>
                                                        </td>
                                                        <td>บริษัท ไอริส กรุ๊ป จํากัด </td>
                                                        <td><?php echo '1';?></td> 
                                                        <td><?php echo date('d/m/Y');?></td>

                                                        <td class="hidden-480">
                                                            <span class="label label-sm label-danger">ด่วน</span>
                                                        </td>

                                                        <td>
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a class="blue" href="#">
                                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                </a>

                                                                <a class="green" href="#">
                                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                </a>

                                                                <a class="red" href="#">
                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                            </div>

                                                            <div class="hidden-md hidden-lg">
                                                                <div class="inline pos-rel">
                                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                    </button>

                                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                        <li>
                                                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                <span class="blue">
                                                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                <span class="green">
                                                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                <span class="red">
                                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
<?php 

?>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.col -->
                        </div><!-- /.row -->
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
<script src="<?php echo base_url();?>assets/js/jquery.1.11.1.min.js"></script>
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
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.colVis.min.js"></script>
         <script src="<?php echo base_url();?>assets/js/daterangepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-timepicker.min.js"></script>        
        <!-- ace scripts -->
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                //initiate dataTables plugin
                var oTable1 = 
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .dataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                      { "bSortable": false },
                      null, null,null, null, null,
                      { "bSortable": false }
                    ],
                    "aaSorting": [],
            
                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,
            
                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element
            
                    //"iDisplayLength": 50
                } );
                //oTable1.fnAdjustColumnSizing();
            
            
                //TableTools settings
                TableTools.classes.container = "btn-group btn-overlap";
                TableTools.classes.print = {
                    "body": "DTTT_Print",
                    "info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
                    "message": "tableTools-print-navbar"
                }
            
                //initiate TableTools extension
                var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
                    "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",
                    
                    "sRowSelector": "td:not(:last-child)",
                    "sRowSelect": "multi",
                    "fnRowSelected": function(row) {
                        //check checkbox when row is selected
                        try { $(row).find('input[type=checkbox]').get(0).checked = true }
                        catch(e) {}
                    },
                    "fnRowDeselected": function(row) {
                        //uncheck checkbox
                        try { $(row).find('input[type=checkbox]').get(0).checked = false }
                        catch(e) {}
                    },
            
                    "sSelectedClass": "success",
                    "aButtons": [
                        {
                            "sExtends": "copy",
                            "sToolTip": "Copy to clipboard",
                            "sButtonClass": "btn btn-white btn-primary btn-bold",
                            "sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
                            "fnComplete": function() {
                                this.fnInfo( '<h3 class="no-margin-top smaller">Table copied</h3>\
                                    <p>Copied '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) to the clipboard.</p>',
                                    1500
                                );
                            }
                        },
                        
                        {
                            "sExtends": "csv",
                            "sToolTip": "Export to CSV",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
                        },
                        
                        {
                            "sExtends": "pdf",
                            "sToolTip": "Export to PDF",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
                        },
                        
                        {
                            "sExtends": "print",
                            "sToolTip": "Print view",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",
                            
                            "sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",
                            
                            "sInfo": "<h3 class='no-margin-top'>Print view</h3>\
                                      <p>Please use your browser's print function to\
                                      print this table.\
                                      <br />Press <b>escape</b> when finished.</p>",
                        }
                    ]
                } );
                //we put a container before our table and append TableTools element to it
                $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
                
                //also add tooltips to table tools buttons
                //addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
                //so we add tooltips to the "DIV" child after it becomes inserted
                //flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
                setTimeout(function() {
                    $(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
                        var div = $(this).find('> div');
                        if(div.length > 0) div.tooltip({container: 'body'});
                        else $(this).tooltip({container: 'body'});
                    });
                }, 200);
                
                
                
                //ColVis extension
                var colvis = new $.fn.dataTable.ColVis( oTable1, {
                    "buttonText": "<i class='fa fa-search'></i>",
                    "aiExclude": [0, 6],
                    "bShowAll": true,
                    //"bRestore": true,
                    "sAlign": "right",
                    "fnLabel": function(i, title, th) {
                        return $(th).text();//remove icons, etc
                    }
                    
                }); 
                
                //style it
                $(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
                
                //and append it to our table tools btn-group, also add tooltip
                $(colvis.button())
                .prependTo('.tableTools-container .btn-group')
                .attr('title', 'Show/hide columns').tooltip({container: 'body'});
                
                //and make the list, buttons and checkboxed Ace-like
                $(colvis.dom.collection)
                .addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
                .find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
                .find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');
            
            
                
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) tableTools_obj.fnSelect(row);
                        else tableTools_obj.fnDeselect(row);
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
                    var row = $(this).closest('tr').get(0);
                    if(!this.checked) tableTools_obj.fnSelect(row);
                    else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
                });
                
            
                
                
                    $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                
                
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
                    var $row = $(this).closest('tr');
                    if(this.checked) $row.addClass(active_class);
                    else $row.removeClass(active_class);
                });
            
                
            
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    //var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
            
            })
        </script>
        
    </body>
</html>
