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
                            <li class="active"><?php echo 'ศูนย์รวมข้อมูล';?></li>
                        </ul><!-- /.breadcrumb -->
                         <a herf=""></a>
                        <div class="nav-search" id="nav-search">
                            <a href="?lang=en" data-target="en"><img src="<?php echo base_url();?>images/en.png"></a> | <a href="?lang=local" data-target="th"><img src="<?php echo base_url();?>images/th.png"></a>
                        </div><!-- /.nav-search -->
                    </div>


                    <div class="page-content">
                    
                        <div class="row">
                        
                        <div class="row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="widget-box transparent">
                                                                <div class="widget-header widget-header-small">
                                                                    <h4 class="widget-title smaller">
                                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                        Little About Me
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main">
                                                                        <p>
                                                                            My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                                                        </p>
                                                                        <p>
                                                                            Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                                                        </p>
                                                                        <p>
                                                                            The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                                                        </p>
                                                                        <p>
                                                                            Thanks for visiting my profile.
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
                                                                        My Skills
                                                                    </h4>
                                                                </div>

                                                                <div class="widget-body">
                                                                    <div class="widget-main padding-16">
                                                                        <div class="clearfix">
                                                                            <div class="grid3 center">
                                                                                <div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
                                                                                    <span class="percent">45</span>%
                                                                                </div>

                                                                                <div class="space-2"></div>
                                                                                Graphic Design
                                                                            </div>

                                                                            <div class="grid3 center">
                                                                                <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                                                                    <span class="percent">90</span>%
                                                                                </div>

                                                                                <div class="space-2"></div>
                                                                                HTML5 & CSS3
                                                                            </div>

                                                                            <div class="grid3 center">
                                                                                <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
                                                                                    <span class="percent">80</span>%
                                                                                </div>

                                                                                <div class="space-2"></div>
                                                                                Javascript/jQuery
                                                                            </div>
                                                                        </div>

                                                                        <div class="hr hr-16"></div>

                                                                        <div class="profile-skills">
                                                                            <div class="progress">
                                                                                <div class="progress-bar" style="width:80%">
                                                                                    <span class="pull-left">HTML5 & CSS3</span>
                                                                                    <span class="pull-right">80%</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-success" style="width:72%">
                                                                                    <span class="pull-left">Javascript & jQuery</span>

                                                                                    <span class="pull-right">72%</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-purple" style="width:70%">
                                                                                    <span class="pull-left">PHP & MySQL</span>

                                                                                    <span class="pull-right">70%</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-warning" style="width:50%">
                                                                                    <span class="pull-left">Wordpress</span>

                                                                                    <span class="pull-right">50%</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="progress">
                                                                                <div class="progress-bar progress-bar-danger" style="width:38%">
                                                                                    <span class="pull-left">Photoshop</span>

                                                                                    <span class="pull-right">38%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                        
                        <div class="space-20"></div>                                                                                                           
                        
                        <div class="profile-feed row">
    <div class="col-sm-6">
                                        <div class="widget-box transparent" id="recent-box">
                                            <div class="widget-header">
                                                <h4 class="widget-title lighter smaller">
                                                    <i class="ace-icon fa fa-rss orange"></i>RECENT
                                                </h4>

                                                <div class="widget-toolbar no-border">
                                                    <ul class="nav nav-tabs" id="recent-tab">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#task-tab">Tasks</a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#member-tab">Members</a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#comment-tab">Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-4">
                                                    <div class="tab-content padding-8">
                                                        <div id="task-tab" class="tab-pane active">
                                                            <h4 class="smaller lighter green">
                                                                <i class="ace-icon fa fa-list"></i>
                                                                Sortable Lists
                                                            </h4>

                                                            <ul id="tasks" class="item-list">
                                                                <li class="item-orange clearfix">
                                                                    <label class="inline">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"> Answering customer questions</span>
                                                                    </label>

                                                                    <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                                                        <span class="percent">42</span>%
                                                                    </div>
                                                                </li>

                                                                <li class="item-red clearfix">
                                                                    <label class="inline">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"> Fixing bugs</span>
                                                                    </label>

                                                                    <div class="pull-right action-buttons">
                                                                        <a href="#" class="blue">
                                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                        </a>

                                                                        <span class="vbar"></span>

                                                                        <a href="#" class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                        </a>

                                                                        <span class="vbar"></span>

                                                                        <a href="#" class="green">
                                                                            <i class="ace-icon fa fa-flag bigger-130"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>

                                                                <li class="item-default clearfix">
                                                                    <label class="inline">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"> Adding new features</span>
                                                                    </label>

                                                                    <div class="inline pull-right position-relative dropdown-hover">
                                                                        <button class="btn btn-minier bigger btn-primary">
                                                                            <i class="ace-icon fa fa-cog icon-only bigger-120"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
                                                                            <li>
                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done">
                                                                                    <span class="green">
                                                                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                    <span class="red">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                                <li class="item-blue clearfix">
                                                                    <label class="inline">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"> Upgrading scripts used in template</span>
                                                                    </label>
                                                                </li>

                                                                <li class="item-grey clearfix">
                                                                    <label class="inline">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"> Adding new skins</span>
                                                                    </label>
                                                                </li>

                                                                <li class="item-green clearfix">
                                                                    <label class="inline">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"> Updating server software up</span>
                                                                    </label>
                                                                </li>

                                                                <li class="item-pink clearfix">
                                                                    <label class="inline">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"> Cleaning up</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div id="member-tab" class="tab-pane">
                                                            <div class="clearfix">
                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                        <img alt="Bob Doe's avatar" src="<?php echo base_url();?>assets/avatars/user.jpg" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Bob Doe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">20 min</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-warning label-sm">pending</span>

                                                                            <div class="inline position-relative">
                                                                                <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                    <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                                </button>

                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                    <li>
                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                            <span class="green">
                                                                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                            <span class="orange">
                                                                                                <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                            <span class="red">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                        <img alt="Joe Doe's avatar" src="<?php echo base_url();?>assets/avatars/avatar2.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Joe Doe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">1 hour</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-warning label-sm">pending</span>

                                                                            <div class="inline position-relative">
                                                                                <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                    <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                                </button>

                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                    <li>
                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                            <span class="green">
                                                                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                            <span class="orange">
                                                                                                <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                            <span class="red">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                        <img alt="Jim Doe's avatar" src="<?php echo base_url();?>assets/avatars/avatar.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Jim Doe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">2 hour</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-warning label-sm">pending</span>

                                                                            <div class="inline position-relative">
                                                                                <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                    <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                                </button>

                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                    <li>
                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                            <span class="green">
                                                                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                            <span class="orange">
                                                                                                <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                            <span class="red">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                        <img alt="Alex Doe's avatar" src="<?php echo base_url();?>assets/avatars/avatar5.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Alex Doe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">3 hour</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-danger label-sm">blocked</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                        <img alt="Bob Doe's avatar" src="<?php echo base_url();?>assets/avatars/avatar2.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Bob Doe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">6 hour</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-success label-sm arrowed-in">approved</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                        <img alt="Susan's avatar" src="<?php echo base_url();?>assets/avatars/avatar3.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Susan</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">yesterday</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-success label-sm arrowed-in">approved</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                        <img alt="Phil Doe's avatar" src="<?php echo base_url();?>assets/avatars/avatar4.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Phil Doe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">2 days ago</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv memberdiv">
                                                                    <div class="user">
                                                                        <img alt="Alexa Doe's avatar" src="<?php echo base_url();?>assets/avatars/avatar1.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Alexa Doe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">3 days ago</span>
                                                                        </div>

                                                                        <div>
                                                                            <span class="label label-success label-sm arrowed-in">approved</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-4"></div>

                                                            <div class="center">
                                                                <i class="ace-icon fa fa-users fa-2x green middle"></i>

                                                                &nbsp;
                                                                <a href="#" class="btn btn-sm btn-white btn-info">
                                                                    See all members &nbsp;
                                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                                </a>
                                                            </div>

                                                            <div class="hr hr-double hr8"></div>
                                                        </div><!-- /.#member-tab -->

                                                        <div id="comment-tab" class="tab-pane">
                                                            <div class="comments">
                                                                <div class="itemdiv commentdiv">
                                                                    <div class="user">
                                                                        <img alt="Bob Doe's Avatar" src="<?php echo base_url();?>assets/avatars/avatar.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Bob Doe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="green">6 min</span>
                                                                        </div>

                                                                        <div class="text">
                                                                            <i class="ace-icon fa fa-quote-left"></i>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                        </div>
                                                                    </div>

                                                                    <div class="tools">
                                                                        <div class="inline position-relative">
                                                                            <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                            </button>

                                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                        <span class="green">
                                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                        <span class="orange">
                                                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                        <span class="red">
                                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv commentdiv">
                                                                    <div class="user">
                                                                        <img alt="Jennifer's Avatar" src="<?php echo base_url();?>assets/avatars/avatar1.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Jennifer</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="blue">15 min</span>
                                                                        </div>

                                                                        <div class="text">
                                                                            <i class="ace-icon fa fa-quote-left"></i>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                        </div>
                                                                    </div>

                                                                    <div class="tools">
                                                                        <div class="action-buttons bigger-125">
                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-pencil blue"></i>
                                                                            </a>

                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-trash-o red"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv commentdiv">
                                                                    <div class="user">
                                                                        <img alt="Joe's Avatar" src="<?php echo base_url();?>assets/avatars/avatar2.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Joe</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="orange">22 min</span>
                                                                        </div>

                                                                        <div class="text">
                                                                            <i class="ace-icon fa fa-quote-left"></i>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                        </div>
                                                                    </div>

                                                                    <div class="tools">
                                                                        <div class="action-buttons bigger-125">
                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-pencil blue"></i>
                                                                            </a>

                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-trash-o red"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="itemdiv commentdiv">
                                                                    <div class="user">
                                                                        <img alt="Rita's Avatar" src="<?php echo base_url();?>assets/avatars/avatar3.png" />
                                                                    </div>

                                                                    <div class="body">
                                                                        <div class="name">
                                                                            <a href="#">Rita</a>
                                                                        </div>

                                                                        <div class="time">
                                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                                            <span class="red">50 min</span>
                                                                        </div>

                                                                        <div class="text">
                                                                            <i class="ace-icon fa fa-quote-left"></i>
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                        </div>
                                                                    </div>

                                                                    <div class="tools">
                                                                        <div class="action-buttons bigger-125">
                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-pencil blue"></i>
                                                                            </a>

                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-trash-o red"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="hr hr8"></div>

                                                            <div class="center">
                                                                <i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

                                                                &nbsp;
                                                                <a href="#" class="btn btn-sm btn-white btn-info">
                                                                    See all comments &nbsp;
                                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                                </a>
                                                            </div>

                                                            <div class="hr hr-double hr8"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.widget-main -->
                                            </div><!-- /.widget-body -->
                                        </div><!-- /.widget-box -->
                                    </div>

                                                        <div class="col-sm-6">
                                           <div class="widget-box transparent">
                                            <div class="widget-header">
                                                <h4 class="widget-title lighter">Tabs With Scroll</h4>

                                                <div class="widget-toolbar no-border">
                                                    <ul class="nav nav-tabs" id="myTab2">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#home2">Home</a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#profile2">Profile</a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#info2">Info</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-12 no-padding-left no-padding-right">
                                                    <div class="tab-content padding-4">
                                                        <div id="home2" class="tab-pane in active">
                                                            <div class="scrollable-horizontal" data-size="800">
                                                                <b>Horizontal Scroll</b>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                            </div>
                                                        </div>

                                                        <div id="profile2" class="tab-pane">
                                                            <div class="scrollable" data-size="100" data-position="left">
                                                                <b>Scroll on Left</b>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                            </div>
                                                        </div>

                                                        <div id="info2" class="tab-pane">
                                                            <div class="scrollable" data-size="100">
                                                                <b>Scroll # 3</b>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                        </div><!-- /.col -->
                                                    </div>                       
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
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.colVis.min.js"></script>

                
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
                    "sSwfPath": "<?php echo base_url();?>assets/swf/copy_csv_xls_pdf.swf",
                    
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
                            "sExtends": "print",
                            "sToolTip": "Print view",
                            "sButtonClass": "btn btn-white btn-primary  btn-bold",
                            "sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",
                            
                            "sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>รายงาน &amp;    Teenage Pregnancy Surveillance (ANC)</small></a></div></div>",
                            
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
