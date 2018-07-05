   <?php

    //print_r($this->session->all_userdata());
?>
   <ul class="nav nav-list">

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/main">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> <?php echo $this->lang->line('lang_dashboard');?> </span>
                        </a>

                        <b class="arrow"></b>
                    </li> 
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-cogs"></i>
                            <span class="menu-text">
                                ข้อมูลเบื้องต้น
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                                    บริหารงานบุคคล
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="<?php echo base_url();?>index.php/career/position"> 
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            ตำแหน่ง
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="two-menu-1.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            หน่วยงาน
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="two-menu-2.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            พนักงาน
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="two-menu-2.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            ตารางการเข้างาน
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                </ul>
                            </li>

                            <li class="">
                                <a href="<?php echo base_url();?>index.php/calendar/cheaptickets"> 
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    กำหนดปฏิทินวันหยุด
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                                    ระบบลาออนไลน์
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-leaf green"></i>
                                            ประเภทการลา
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-pencil orange"></i>

                                            กำหนดสิทธิ์
                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>

                                        <ul class="submenu">
                                            <li class="">
                                                <a href="#">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    เงื่อนไขการลา
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="#">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    นำเข้าเครื่องสแกนนิ้ว
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">
                                <?php echo 'ปฏิทิน';?>
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo base_url();?>index.php/calendar/leaveonline">
                                    <i class="menu-icon fa fa-calendar red"></i>
                                    <?php echo 'ปฏิทินการลา';?>
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul> 
                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo base_url();?>index.php/calendar/timeline">
                                    <i class="menu-icon fa fa-calendar red"></i>
                                    <?php echo 'ตารางแผนงาน';?>
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul> 
                      </li>  
                      
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> ประกาศรับสมัคร </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo base_url();?>index.php/job/register"> 
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    ข้อมูลผู้สมัคร
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo base_url();?>index.php/career/position">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    ตำแหน่งที่เปิดรับ
                                </a>

                                <b class="arrow"></b>
                            </li>
                            
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                                    รายงาน
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="<?php echo base_url();?>index.php/report" target="_blank">
                                            <i class="menu-icon fa fa-leaf green"></i>
                                            ทดสอบการออกรายงาน
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-pencil orange"></i>

                                            4th level
                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>

                                        <ul class="submenu">
                                            <li class="">
                                                <a href="#">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Add Product
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="#">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    View Products
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li> 
                    
                    <li class="active open">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> ระบบลาออนไลน์ </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="active">
                                <a href="<?php echo base_url();?>index.php/calendar/leaveonline"> 
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    ตารางการลา
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo base_url();?>index.php/leaveonline"> 
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    ตรวจสอบประวัติการลา
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                                                               
                </ul>
