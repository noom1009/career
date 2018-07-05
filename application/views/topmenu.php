<div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="fa fa-building-o "></i>
                            <?php echo $this->lang->line('lang_application_name');?>
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo base_url();?>image/logo.png" />
                                <span class="user-info">
                                    <small><?php echo $this->lang->line('lang_welcome');?>,</small>
                                    <?php echo iconv("tis-620", "UTF-8",$this->session->userdata('f_name'));?>  
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


                                <li>
                                    <a href="<?php echo base_url();?>index.php/user_profile">
                                        <i class="ace-icon fa fa-user"></i>
                                        <?php echo $this->lang->line('lang_more_pages');?> 
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?php echo base_url();?>index.php/login/logout">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        <?php echo $this->lang->line('lang_logout');?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>
