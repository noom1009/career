<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>IRISGROUP | Career</title>

        <meta name="description" content="Mailbox with some customizations as described in docs" />
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
        <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="index.html" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            IRISGROUP
                        </small>
                    </a>
                </div>

            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container" id="main-container">                  

            <div id="sidebar" class="sidebar                  responsive">
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                         <button class="btn btn-success">
                            <i class="ace-icon fa fa-home"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-home"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li class="">
                        <a href="http://www.iris.co.th">
                            <i class="menu-icon fa fa-home"></i>
                            <span class="menu-text"> เว็บหลัก </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                     <li class="active">
                        <a href="http://webapp.iris.co.th:443/career">
                            <i class="menu-icon fa fa-pencil-square-o"></i>   
                            <span class="menu-text"> สมัครงาน </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                                        
                     <li class="">
                        <a href="<?php echo base_url();?>index.php/infomation">
                            <i class="menu-icon fa fa-bullhorn"></i>
                            <span class="menu-text"> ข่าวประกาศ </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                                        
                     <li class="">
                        <a href="<?php echo base_url();?>index.php/login">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> เข้าสู่ระบบ </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul><!-- /.nav-list -->

            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Career</li>
                        </ul><!-- /.breadcrumb -->

                    </div>

                    <div class="page-content">    
                        <div class="page-header">
                            <h1>
                                บริษัท ไอริส กรุ๊ป จํากัด
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    ตำแหน่งงาน
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tabbable">
                                            <ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
                                                <li class="li-new-mail pull-right">
                                                    <a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
                                                        <span class="btn btn-purple no-border">
                                                            <i class="ace-icon fa fa-envelope bigger-130"></i>
                                                            <span class="bigger-110">สมัครงาน</span>
                                                        </span>
                                                    </a>
                                                </li><!-- /.li-new-mail -->

                                                <li class="active">
                                                    <a data-toggle="tab" href="#inbox" data-target="inbox">
                                                        <i class="blue ace-icon fa fa-inbox bigger-130"></i>
                                                        <span class="bigger-110">ตำแหน่งงานงานทั้งหมด</span>
                                                    </a>
                                                </li>

                                            </ul>

                                            <div class="tab-content no-border no-padding">
                                                <div id="inbox" class="tab-pane in active">
                                                    <div class="message-container">
                                                        <div id="id-message-list-navbar" class="message-navbar clearfix">

                                                        </div>

                                                        <div id="id-message-item-navbar" class="hide message-navbar clearfix">
                                                            <div class="message-bar">
                                                                <div class="message-toolbar">
                                                                    <div class="inline position-relative align-left">

                                                                    </div>

                                                                    <div class="inline position-relative align-left">

                                                                    </div>


                                                                </div>
                                                            </div> 

                                                            <div>
                                                                <div class="messagebar-item-left">
                                                                    <a href="#" class="btn-back-message-list">
                                                                        <i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>
                                                                        <b class="bigger-110 middle">กลับ</b>
                                                                    </a>
                                                                </div>

                                                                <div class="messagebar-item-right">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110 orange"></i>
                                                                    <span class="grey"><?php echo date('d/m/Y');?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="id-message-new-navbar" class="hide message-navbar clearfix">
                                                            <div class="message-bar">
                                                                <div class="message-toolbar">

                                                                </div>
                                                            </div>

                                                            <div>
                                                                <div class="messagebar-item-left">
                                                                    <a href="#" class="btn-back-message-list">
                                                                        <i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
                                                                        <b class="middle bigger-110">กลับ</b>
                                                                    </a>
                                                                </div>

                                                                <div class="messagebar-item-right">
                                                                    <span class="inline btn-send-message">

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="message-list-container">
                                                            <div class="message-list" id="message-list">
                                                            
                                                                <div class="message-item message-unread">
                                                                    <label class="inline">
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                                    <span class="sender" title="irisgroup">บริษัท ไอริส กรุ๊ป จํากัด </span>
                                                                    <span class="time"><?php echo date('d/m/Y');?></span>
                                                                    <span class="summary">
                                                                        <span class="text">
                                                                            เจ้าหน้าที่การเงิน
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            
                                                                <div class="message-item message-unread">
                                                                    <label class="inline">
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                                    <span class="sender" title="irisgroup">บริษัท ไอริส กรุ๊ป จํากัด </span>
                                                                    <span class="time"><?php echo date('d/m/Y');?></span>
                                                                    <span class="summary">
                                                                        <span class="text">
                                                                            เจ้าหน้าที่เขียนแบบ Draftsman
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            
                                                                <div class="message-item message-unread">
                                                                    <label class="inline">
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                                    <span class="sender" title="irisgroup">บริษัท ไอริส กรุ๊ป จํากัด </span>
                                                                    <span class="time"><?php echo date('d/m/Y');?></span>
                                                                    <span class="summary">
                                                                        <span class="text">
                                                                            วิศวกร-โฟร์แมน
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            
                                                                <div class="message-item message-unread">
                                                                    <label class="inline">
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                                    <span class="sender" title="irisgroup">บริษัท ไอริส กรุ๊ป จํากัด </span>
                                                                    <span class="time"><?php echo date('d/m/Y');?></span>
                                                                    <span class="summary">
                                                                        <span class="text">
                                                                            ผู้อำนวยการฝ่ายการตลาด
                                                                        </span>
                                                                    </span>
                                                                </div>

                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- /.tab-content -->
                                        </div><!-- /.tabbable -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <form id="id-message-form" class="hide form-horizontal message-form col-xs-12" action="<?php echo base_url();?>index.php/upload" method="post">
                                    <div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">ชื่อ - นามสกุล :</label>

                                            <div class="col-sm-9">
                                                <span class="input-icon">
                                                    <input type="email" name="recipient" id="form-field-recipient" data-value="" value="" placeholder="Recipient(s)" />
                                                    <i class="ace-icon fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="hr hr-18 dotted"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-subject">เบอร์ติดต่อ :</label>

                                            <div class="col-sm-6 col-xs-12">
                                                <div class="input-icon block col-xs-12 no-padding">
                                                    <input maxlength="100" type="text" name="subject" id="form-field-subject" placeholder="Subject" />
                                                    <i class="ace-icon fa fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr-18 dotted"></div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-subject">อีเมล์ :</label>

                                            <div class="col-sm-6 col-xs-12">
                                                <div class="input-icon block col-xs-12 no-padding">
                                                    <input maxlength="100" type="text" name="subject" id="form-field-subject" placeholder="Subject" />
                                                    <i class="ace-icon fa fa-at"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr-18 dotted"></div>

                                        <div class="form-group no-margin-bottom">
                                            <label class="col-sm-3 control-label no-padding-right">แนบไฟล์:</label>

                                            <div class="col-sm-9">
                                                <div id="form-attachments">
                                                    <input type="file" name="attachment[]" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="align-right">
                                            <button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
                                                <i class="ace-icon fa fa-paperclip bigger-140"></i>
                                                แนบไฟล์
                                            </button>
                                            <button id="id-add-attachment" type="submit" class="btn btn-sm btn-danger">
                                                <i class="ace-icon fa fa-paperclip bigger-140"></i>
                                                ส่งใบสมัครงาน
                                            </button>
                                        </div>

                                        <div class="space"></div>
                                    </div>
                                </form>

                                <div class="hide message-content" id="id-message-content0">
                                         <div class="tabbable">
                                            <div id="home" class="tab-pane in active">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-3 center">
                                                            <span class="profile-picture">
                                                                <img class="editable img-responsive" alt="irisgroup" id="irisgroup" src="<?php echo base_url();?>image/logoiris.jpg" />
                                                            </span>

                                                            <div class="space space-4"></div>
       
                                                            <a href="#" class="btn btn-sm btn-block btn-primary">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                                <span class="bigger-110">เจ้าหน้าที่การเงิน</span>
                                                            </a>       
                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeU9RcMIcYOLU08BRvlxwZ4hO-neFdQvlLRRR3okmyxXkuzdA/viewform" class="btn btn-sm btn-block btn-danger">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-110"></i>
                                                                <span class="bigger-110">สมัครงานตำแหน่งนี้</span>
                                                            </a>
                                                        </div><!-- /.col -->

                                                        <div class="col-xs-12 col-sm-9">
                                                             <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        หน้าที่และความรับผิดชอบ
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                         <p>
                                                                            1. บันทึกและตรวจสอบความถูกต้องของรายละเอียดเงินจอง สัญญาจะซื้อจะขาย การโอนกรรมสิทธิ์
                                                                        </p>
                                                                        <p>
                                                                            2. บันทึกและตรวจสอบการออกใบเสร็จรับเงินสำหรับรายการทางการเงินที่เกี่ยวข้องกับการขายโครงการ (เงินจอง สัญญา ค่างวด ค่าโอนกรรมสิทธิ์ อื่นๆ)
                                                                        </p>
                                                                        <p>
                                                                           3. จัดทำสรุปรายงานค่าใช้จ่ายในการโอนกรรมสิทธิ์
                                                                        </p>
                                                                        <p>
                                                                           4. กระทบยอดรับกับ Bank Statement
                                                                        </p>
                                                                        <p>
                                                                          5. ออกใบแจ้งหนี้ค่างวดให้แก่ลูกค้า
                                                                        </p>
                                                                        <p>
                                                                         6. จัดทำหนังสือแจ้งผลการชำระเงินหักบัญชีอัตโนมัติ (SCB)
                                                                        </p>
                                                                        <p>
                                                                         7. ประสานงานกับฝ่ายนิติกรรมเพื่อจัดทำเอกสารที่เกี่ยวข้องกับการขายให้สมบูรณ์
                                                                        </p>
                                                                    </div>  
                                                                </div>
                                                            </div>                                                             
                                                            <div class="hr hr-8 dotted"></div>

                                                        </div><!-- /.col -->
                                                    </div><!-- /.row -->

                                                    <div class="space-20"></div>

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        คุณสมบัติ
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                        <p>
                                                                            - วุฒิการศึกษาปริญญาตรี สาขาการเงิน-บัญชีAR
                                                                        </p>
                                                                        <p>
                                                                            - ประสบการณฺ์ในสายงาน 1-2 ปี
                                                                        </p>
                                                                        <p>
                                                                            - มีความรู้ด้านภาษีอสังหาริมทรัพย์
                                                                        </p>
                                                                        <p>
                                                                            - สามารถใช้โปรแกรม ORACLE E1
                                                                        </p>
                                                                        <p>
                                                                            - สามารถใช้ Word,Excel ได้คล่อง
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small header-color-blue2">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                                        สมัครงาน
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-map-marker bigger-150 blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        สถานที่ปฏบัติงาน  <?php echo 'กรุงเทพมหานคร';?> 
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-at bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        hr@iris.co.th
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-phone bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        02 196 1100
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-fax bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        02-5304475
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /#home -->
                                        </div>

                                    <div class="hr hr-double"></div>
    
                                </div>
                                
                                <div class="hide message-content" id="id-message-content1">
                                         <div class="tabbable">
                                            <div id="home" class="tab-pane in active">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-3 center">
                                                            <span class="profile-picture">
                                                                <img class="editable img-responsive" alt="irisgroup" id="irisgroup" src="<?php echo base_url();?>image/logoiris.jpg" />
                                                            </span>

                                                            <div class="space space-4"></div>
       
                                                            <a href="#" class="btn btn-sm btn-block btn-primary">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                                <span class="bigger-110">เจ้าหน้าที่เขียนแบบ Draftsman</span>
                                                            </a>
       
                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeU9RcMIcYOLU08BRvlxwZ4hO-neFdQvlLRRR3okmyxXkuzdA/viewform" class="btn btn-sm btn-block btn-danger">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-110"></i>
                                                                <span class="bigger-110">สมัครงานตำแหน่งนี้</span>
                                                            </a>                                                            
                                                        </div><!-- /.col -->

                                                        <div class="col-xs-12 col-sm-9">
                                                             <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        หน้าที่และความรับผิดชอบ
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                         <p>
                                                                            1.รับผิดชอบงานถอดแบบ ออกแบบและเขียนแบบโครงการก่อสร้าง
                                                                        </p>
                                                                        <p>
                                                                            2.ทำ Shop Drawing/ As Build
                                                                        </p>
                                                                        <p>
                                                                           3.ประสานงานผู้เกี่ยวข้องเพื่อแจ้งแก้ไขและหาข้อสรุปร่วมกัน
                                                                        </p>
                                                                    </div>  
                                                                </div>
                                                            </div>                                                             
                                                            <div class="hr hr-8 dotted"></div>

                                                        </div><!-- /.col -->
                                                    </div><!-- /.row -->

                                                    <div class="space-20"></div>

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        คุณสมบัติ
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                        <p>
                                                                            -จบการศึกษาขั้นต่ำระดับ ปวช. สาขาออกแบบ,สถาปัตย์ หรือสาขาที่เกี่ยวข้อง
                                                                        </p>
                                                                        <p>
                                                                            -หากมีประสบการณ์ในการเขียนแบบโครงการก่อสร้าง แนบราบและแนวสูง
                                                                        </p>
                                                                        <p>
                                                                            -มีความอดทนและมีมนุษย์สัมพันธ์ดี ทำงานร่วมกับผู้อื่นได้
                                                                        </p>
                                                                        <p>
                                                                            -ทำงาน 6 วัน/สัปดาห์ (วันจันทร์-เสาร์)
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small header-color-blue2">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                                        สมัครงาน
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-map-marker bigger-150 blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        สถานที่ปฏบัติงาน  <?php echo 'กรุงเทพมหานคร';?> 
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-at bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        hr@iris.co.th
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-phone bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        02 196 1100
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-fax bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        02-5304475
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /#home -->
                                        </div>

                                    <div class="hr hr-double"></div>
    
                                </div>
                                                                
                                <div class="hide message-content" id="id-message-content2">
                                         <div class="tabbable">
                                            <div id="home" class="tab-pane in active">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-3 center">
                                                            <span class="profile-picture">
                                                                <img class="editable img-responsive" alt="irisgroup" id="irisgroup" src="<?php echo base_url();?>image/logoiris.jpg" />
                                                            </span>

                                                            <div class="space space-4"></div>
       
                                                            <a href="#" class="btn btn-sm btn-block btn-primary">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                                <span class="bigger-110">วิศวกร-โฟร์แมน</span>
                                                            </a>
       
                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeU9RcMIcYOLU08BRvlxwZ4hO-neFdQvlLRRR3okmyxXkuzdA/viewform" class="btn btn-sm btn-block btn-danger">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-110"></i>
                                                                <span class="bigger-110">สมัครงานตำแหน่งนี้</span>
                                                            </a>                                                            
                                                        </div><!-- /.col -->

                                                        <div class="col-xs-12 col-sm-9">
                                                             <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        หน้าที่และความรับผิดชอบ
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                         <p>
                                                                            1.จัดทำกระบวนการวิเคราะห์ปริมาณงานและวางแผนงาน
                                                                        </p>
                                                                        <p>
                                                                            2.ออกแบบและวางระเบียบขั้นตอนเครื่องมือและอุปกรณ์ให้สอดคล้องกับแผนงาน
                                                                        </p>
                                                                        <p>
                                                                           3.วิเคราะห์และปรับปรุง การวางผังอาคาร การวางผังติดตั้งเครื่องจักรและอุปกรณ์ต่าง ๆ การขนย้ายวัสดุอุปกรณ์เก็บวัตถุดิบ
                                                                        </p>
                                                                        <p>
                                                                           4.การวิเคราะห์และพัฒนาระบบควบคุมต้นทุน ควบคุมงบประมาณ และจัดตั้งระบบต้นทุนมาตรฐาน
                                                                        </p>
                                                                        <p>
                                                                          5.จัดทำงบประมาณการกำลังการผลิตและะร่างงบประมาณงานที่สอดคล้องกัน
                                                                        </p>
                                                                        <p>
                                                                         6.วิเคราะห์และปรับปรุง การคำนวนจุดคุ้มทุนของการใช้ทรัพยากร ภายใต้แผนงานที่กำหนด
                                                                        </p>
                                                                        <p>
                                                                         7.วิเคราะห์และวิจัย และนำเสนอกรรมวิธีการผลิตที่ก่อให้เกิดประสิทธิภาพสูงสุด
                                                                        </p>
                                                                        <p>
                                                                         8.การพัฒนาวิธีวัดผลงานและมาตรฐานในการทำงาน รวมทั้งการวัดผลงานและประเมินค่าผลงาน
                                                                        </p>
                                                                        <p>
                                                                        9.รับผิดชอบการตรวจสอบดูแลปรับปรุงแก้ไข วางแผนงานในโครงการ เช่น การเลือกวัสดุ การประสานงานและแก้ไขปัญหางาน ในส่วนที่รับผิดชอบการวิเคราะห์ต้นทุนเครื่องจักรแรงงานและระบบงานต่างๆเพื่อปรับปรุงแก้ไข
                                                                        </p>
                                                                        <p>
                                                                        10.สามารถเคลียร์แบบก่อสร้างและเจรจากับผู้ว่าจ้างได้ 
                                                                        </p>
                                                                    </div>  
                                                                </div>
                                                            </div>                                                             
                                                            <div class="hr hr-8 dotted"></div>

                                                        </div><!-- /.col -->
                                                    </div><!-- /.row -->

                                                    <div class="space-20"></div>

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        คุณสมบัติ
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                        <p>
                                                                            - เพศ ชาย/หญิง
                                                                        </p>
                                                                        <p>
                                                                            - อายุ 25-35 ปี
                                                                        </p>
                                                                        <p>
                                                                            - ระดับการศึกษาปริญญาตรีขึ้นไป สาขาวิศวกรรมโยธา และสาขาที่เกี่ยวข้อง
                                                                        </p>
                                                                        <p>
                                                                            - สามารถใช้งานโปรแกรม Auto CAD ได้เป็นอย่างดี
                                                                        </p>
                                                                        <p>
                                                                            - สามารถปฏิบัติงาน 6 วัน/สัปดาห์
                                                                        </p>
                                                                        <p>
                                                                            - หากมีประสบการณ์ในโรงงานผลิตแผ่นคอนกรีตสำเร็จรูปจะพิจารณาเป็นพิเศษ
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small header-color-blue2">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                                        สมัครงาน
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-map-marker bigger-150 blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        สถานที่ปฏบัติงาน  <?php echo 'กรุงเทพมหานคร';?> 
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-at bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        hr@iris.co.th
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-phone bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        02 196 1100
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-fax bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        02-5304475
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /#home -->
                                        </div>

                                    <div class="hr hr-double"></div>
    
                                </div>
                                                                                             
                                <div class="hide message-content" id="id-message-content3">
                                         <div class="tabbable">
                                            <div id="home" class="tab-pane in active">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-3 center">
                                                            <span class="profile-picture">
                                                                <img class="editable img-responsive" alt="irisgroup" id="irisgroup" src="<?php echo base_url();?>image/logoiris.jpg" />
                                                            </span>

                                                            <div class="space space-4"></div>
       
                                                            <a href="#" class="btn btn-sm btn-block btn-primary">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                                <span class="bigger-110">ผู้อำนวยการฝ่ายการตลาด</span>
                                                            </a>
       
                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeU9RcMIcYOLU08BRvlxwZ4hO-neFdQvlLRRR3okmyxXkuzdA/viewform" class="btn btn-sm btn-block btn-danger">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-110"></i>
                                                                <span class="bigger-110">สมัครงานตำแหน่งนี้</span>
                                                            </a>                                                            
                                                        </div><!-- /.col -->

                                                        <div class="col-xs-12 col-sm-9">
                                                             <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        หน้าที่และความรับผิดชอบ
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                         <p>
                                                                            1. รับผิดชอบการวางแผนกลยุทธ์ด้านการตลาดบ้านและคอนโด
                                                                        </p>
                                                                        <p>
                                                                           2. วางแผนช่องทางการบริการด้านธุรกิจอสังหาริมทรัพย์
                                                                        </p>
                                                                        <p>
                                                                           3. ศึกษาและวิเคราะห์ วิจัย ความต้องการของตลาด เพื่อนำมาปรับปรุง พัฒนาให้ตรงกับความต้องการของลูกค้า
                                                                        </p>
                                                                        <p>
                                                                           4. สร้างความได้เปรียบทางการแข่งขันและสรา้งความเป็นเลิศด้านคุณภาพดดยรวมทุกด้านภายใต้วัตถุประสงค์ของบริษัท
                                                                        </p>
                                                                        <p>
                                                                         5. สามารถสร้าง Brand ให้เป็นที่ยอมรับ และนำเสนอผลการดำเนินงานได้
                                                                        </p>
                                                                        <p>
                                                                        6. งานอื่นๆที่ได้รับมอบหมาย
                                                                        </p>
                                                                    </div>  
                                                                </div>
                                                            </div>                                                             
                                                            <div class="hr hr-8 dotted"></div>

                                                        </div><!-- /.col -->
                                                    </div><!-- /.row -->

                                                    <div class="space-20"></div>

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        คุณสมบัติ
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                        <p>
                                                                            1. จบการศึกษาระดับปริญญาตรีขึ้นไป สาขาการตลาด หรือสาขาอื่นที่เกี่ยวข้อง
                                                                        </p>
                                                                        <p>
                                                                            2. มีประสบการณ์ด้านบริหารงานการตลาดในธุรกิจอสังหาริมทรัพย์อย่างน้อย 5 ปี
                                                                        </p>
                                                                        <p>
                                                                            3. มีประสบการณ์บริหารการตลาดทั้ง Online และ Offline 
                                                                        </p>
                                                                        <p>
                                                                            4. มีประสบการณ์ด้านการบริหารทีมการตลาด สามารถสร้าง Brand ให้เป็นที่ยอมรับ
                                                                        </p>
                                                                        <p>
                                                                            5. สามารถบริหารทีมงานได้เป็นอย่างดี บุคลิกดี มีภาวะผู้นำ และมีมนุษย์สัมพันธ์ดี
                                                                        </p>
                                                                        <p>
                                                                           6. สามารถสื่อสารภาษาอังกฤษได้ดี
                                                                        </p>
                                                                        <p>
                                                                           7. มีพาหนะเป็นของตนเอง
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small header-color-blue2">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                                        สมัครงาน
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-map-marker bigger-150 blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        สถานที่ปฏบัติงาน  <?php echo 'กรุงเทพมหานคร';?> 
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-at bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        hr@iris.co.th
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-phone bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        02 196 1100
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        <i class="middle ace-icon fa fa-fax bigger-150 light-blue"></i>
                                                                    </div>

                                                                    <div class="profile-info-value">
                                                                        02-5304475
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /#home -->
                                        </div>

                                    <div class="hr hr-double"></div>
    
                                </div>
                                
                                <!-- /.message-content -->

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">IRISGROUP</span>
                            Web Application &copy; 2018
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="assets/js/jquery.2.1.1.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="assets/js/bootstrap-tag.min.js"></script>
        <script src="assets/js/jquery.hotkeys.min.js"></script>
        <script src="assets/js/bootstrap-wysiwyg.min.js"></script>

        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($){
            
                //handling tabs and loading/displaying relevant messages and forms
                //not needed if using the alternative view, as described in docs
                $('#inbox-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                    var currentTab = $(e.target).data('target');
                    if(currentTab == 'write') {
                        Inbox.show_form();
                    }
                    else if(currentTab == 'inbox') {
                        Inbox.show_list();
                    }
                })
            
            
                
                //basic initializations
                $('.message-list .message-item input[type=checkbox]').removeAttr('checked');
                $('.message-list').on('click', '.message-item input[type=checkbox]' , function() {
                    $(this).closest('.message-item').toggleClass('selected');
                    if(this.checked) Inbox.display_bar(1);//display action toolbar when a message is selected
                    else {
                        Inbox.display_bar($('.message-list input[type=checkbox]:checked').length);
                        //determine number of selected messages and display/hide action toolbar accordingly
                    }        
                });
            
            
                //check/uncheck all messages
                $('#id-toggle-all').removeAttr('checked').on('click', function(){
                    if(this.checked) {
                        Inbox.select_all();
                    } else Inbox.select_none();
                });
                
                //select all
                $('#id-select-message-all').on('click', function(e) {
                    e.preventDefault();
                    Inbox.select_all();
                });
                
                //select none
                $('#id-select-message-none').on('click', function(e) {
                    e.preventDefault();
                    Inbox.select_none();
                });
                
                //select read
                $('#id-select-message-read').on('click', function(e) {
                    e.preventDefault();
                    Inbox.select_read();
                });
            
                //select unread
                $('#id-select-message-unread').on('click', function(e) {
                    e.preventDefault();
                    Inbox.select_unread();
                });
            
                /////////
            
                //display second message right inside the message list
                $('.message-list .message-item:eq(0) .text').on('click', function(){
                    var message = $(this).closest('.message-item');
            
                    //if message is open, then close it
                    if(message.hasClass('message-inline-open')) {
                        message.removeClass('message-inline-open').find('.message-content').remove();
                        return;
                    }
            
                    $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
                    setTimeout(function() {
                        $('.message-container').find('.message-loading-overlay').remove();
                        message
                            .addClass('message-inline-open')
                            .append('<div class="message-content" />')
                        var content = message.find('.message-content:last').html( $('#id-message-content0').html() );
            
                        //remove scrollbar elements
                        content.find('.scroll-track').remove();
                        content.find('.scroll-content').children().unwrap();
                        
                        content.find('.message-body').ace_scroll({
                            size: 150,
                            mouseWheelLock: true,
                            styleClass: 'scroll-visible'
                        });
                
                    }, 500 + parseInt(Math.random() * 500));
                    
                });
            
                
                //display second message right inside the message list
                $('.message-list .message-item:eq(1) .text').on('click', function(){
                    var message = $(this).closest('.message-item');
            
                    //if message is open, then close it
                    if(message.hasClass('message-inline-open')) {
                        message.removeClass('message-inline-open').find('.message-content').remove();
                        return;
                    }
            
                    $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
                    setTimeout(function() {
                        $('.message-container').find('.message-loading-overlay').remove();
                        message
                            .addClass('message-inline-open')
                            .append('<div class="message-content" />')
                        var content = message.find('.message-content:last').html( $('#id-message-content1').html() );
            
                        //remove scrollbar elements
                        content.find('.scroll-track').remove();
                        content.find('.scroll-content').children().unwrap();
                        
                        content.find('.message-body').ace_scroll({
                            size: 150,
                            mouseWheelLock: true,
                            styleClass: 'scroll-visible'
                        });
                
                    }, 500 + parseInt(Math.random() * 500));
                    
                });
            
            
                       
                //display second message right inside the message list
                $('.message-list .message-item:eq(2) .text').on('click', function(){
                    var message = $(this).closest('.message-item');
            
                    //if message is open, then close it
                    if(message.hasClass('message-inline-open')) {
                        message.removeClass('message-inline-open').find('.message-content').remove();
                        return;
                    }
            
                    $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
                    setTimeout(function() {
                        $('.message-container').find('.message-loading-overlay').remove();
                        message
                            .addClass('message-inline-open')
                            .append('<div class="message-content" />')
                        var content = message.find('.message-content:last').html( $('#id-message-content2').html() );
            
                        //remove scrollbar elements
                        content.find('.scroll-track').remove();
                        content.find('.scroll-content').children().unwrap();
                        
                        content.find('.message-body').ace_scroll({
                            size: 150,
                            mouseWheelLock: true,
                            styleClass: 'scroll-visible'
                        });
                
                    }, 500 + parseInt(Math.random() * 500));
                    
                });
            
            
                         
                //display second message right inside the message list
                $('.message-list .message-item:eq(3) .text').on('click', function(){
                    var message = $(this).closest('.message-item');
            
                    //if message is open, then close it
                    if(message.hasClass('message-inline-open')) {
                        message.removeClass('message-inline-open').find('.message-content').remove();
                        return;
                    }
            
                    $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
                    setTimeout(function() {
                        $('.message-container').find('.message-loading-overlay').remove();
                        message
                            .addClass('message-inline-open')
                            .append('<div class="message-content" />')
                        var content = message.find('.message-content:last').html( $('#id-message-content3').html() );
            
                        //remove scrollbar elements
                        content.find('.scroll-track').remove();
                        content.find('.scroll-content').children().unwrap();
                        
                        content.find('.message-body').ace_scroll({
                            size: 150,
                            mouseWheelLock: true,
                            styleClass: 'scroll-visible'
                        });
                
                    }, 500 + parseInt(Math.random() * 500));
                    
                });
            
            
            
                //back to message list
                $('.btn-back-message-list').on('click', function(e) {
                    
                    e.preventDefault();
                    $('#inbox-tabs a[href="#inbox"]').tab('show');
                });
            
            
            
                //hide message list and display new message form
                /**
                $('.btn-new-mail').on('click', function(e){
                    e.preventDefault();
                    Inbox.show_form();
                });
                */
            
            
            
            
                var Inbox = {
                    //displays a toolbar according to the number of selected messages
                    display_bar : function (count) {
                        if(count == 0) {
                            $('#id-toggle-all').removeAttr('checked');
                            $('#id-message-list-navbar .message-toolbar').addClass('hide');
                            $('#id-message-list-navbar .message-infobar').removeClass('hide');
                        }
                        else {
                            $('#id-message-list-navbar .message-infobar').addClass('hide');
                            $('#id-message-list-navbar .message-toolbar').removeClass('hide');
                        }
                    }
                    ,
                    select_all : function() {
                        var count = 0;
                        $('.message-item input[type=checkbox]').each(function(){
                            this.checked = true;
                            $(this).closest('.message-item').addClass('selected');
                            count++;
                        });
                        
                        $('#id-toggle-all').get(0).checked = true;
                        
                        Inbox.display_bar(count);
                    }
                    ,
                    select_none : function() {
                        $('.message-item input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
                        $('#id-toggle-all').get(0).checked = false;
                        
                        Inbox.display_bar(0);
                    }
                    ,
                    select_read : function() {
                        $('.message-unread input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
                        
                        var count = 0;
                        $('.message-item:not(.message-unread) input[type=checkbox]').each(function(){
                            this.checked = true;
                            $(this).closest('.message-item').addClass('selected');
                            count++;
                        });
                        Inbox.display_bar(count);
                    }
                    ,
                    select_unread : function() {
                        $('.message-item:not(.message-unread) input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
                        
                        var count = 0;
                        $('.message-unread input[type=checkbox]').each(function(){
                            this.checked = true;
                            $(this).closest('.message-item').addClass('selected');
                            count++;
                        });
                        
                        Inbox.display_bar(count);
                    }
                }
            
                //show message list (back from writing mail or reading a message)
                Inbox.show_list = function() {
                    $('.message-navbar').addClass('hide');
                    $('#id-message-list-navbar').removeClass('hide');
            
                    $('.message-footer').addClass('hide');
                    $('.message-footer:not(.message-footer-style2)').removeClass('hide');
            
                    $('.message-list').removeClass('hide').next().addClass('hide');
                    //hide the message item / new message window and go back to list
                }
            
                //show write mail form
                Inbox.show_form = function() {
                    if($('.message-form').is(':visible')) return;
                    if(!form_initialized) {
                        initialize_form();
                    }
                    
                    
                    var message = $('.message-list');
                    $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
                    
                    setTimeout(function() {
                        message.next().addClass('hide');
                        
                        $('.message-container').find('.message-loading-overlay').remove();
                        
                        $('.message-list').addClass('hide');
                        $('.message-footer').addClass('hide');
                        $('.message-form').removeClass('hide').insertAfter('.message-list');
                        
                        $('.message-navbar').addClass('hide');
                        $('#id-message-new-navbar').removeClass('hide');
                        
                        
                        //reset form??
                        $('.message-form .wysiwyg-editor').empty();
                    
                        $('.message-form .ace-file-input').closest('.file-input-container:not(:first-child)').remove();
                        $('.message-form input[type=file]').ace_file_input('reset_input');
                        
                        $('.message-form').get(0).reset();
                        
                    }, 300 + parseInt(Math.random() * 300));
                }
            
            
            
            
                var form_initialized = false;
                function initialize_form() {
                    if(form_initialized) return;
                    form_initialized = true;
                    
                    //intialize wysiwyg editor
                    $('.message-form .wysiwyg-editor').ace_wysiwyg({
                        toolbar:
                        [
                            'bold',
                            'italic',
                            'strikethrough',
                            'underline',
                            null,
                            'justifyleft',
                            'justifycenter',
                            'justifyright',
                            null,
                            'createLink',
                            'unlink',
                            null,
                            'undo',
                            'redo'
                        ]
                    }).prev().addClass('wysiwyg-style1');
            
            
            
                    //file input
                    $('.message-form input[type=file]').ace_file_input()
                    .closest('.ace-file-input')
                    .addClass('width-90 inline')
                    .wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>');
            
                    //Add Attachment
                    //the button to add a new file input
                    $('#id-add-attachment')
                    .on('click', function(){
                        var file = $('<input type="file" name="attachment[]" />').appendTo('#form-attachments');
                        file.ace_file_input();
                        
                        file.closest('.ace-file-input')
                        .addClass('width-90 inline')
                        .wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>')
                        .parent().append('<div class="action-buttons pull-right col-xs-1">\
                            <a href="#" data-action="delete" class="middle">\
                                <i class="ace-icon fa fa-trash-o red bigger-130 middle"></i>\
                            </a>\
                        </div>')
                        .find('a[data-action=delete]').on('click', function(e){
                            //the button that removes the newly inserted file input
                            e.preventDefault();
                            $(this).closest('.file-input-container').hide(300, function(){ $(this).remove() });
                        });
                    });
                }
            
            });
        </script>
    </body>
</html>
