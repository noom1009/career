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
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.min.css" />
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

            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">หน้าหลัก</a>
                            </li>
                            <li class="active"><?php echo 'ปฏิทินการลางาน';?></li>
                        </ul><!-- /.breadcrumb -->
                         <a herf=""></a>
                        <div class="nav-search" id="nav-search">
                            <a href="?lang=en" data-target="en"><img src="<?php echo base_url();?>images/en.png"></a> | <a href="?lang=local" data-target="th"><img src="<?php echo base_url();?>images/th.png"></a>
                        </div><!-- /.nav-search -->
                    </div>

                      <div class="page-content">
                            <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="space"></div>

                                        <div id="calendar"></div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="widget-box transparent">
                                            <div class="widget-header">
                                                <h4>ประเภทการลา</h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
                                                    <div id="external-events">
                                                        <div class="external-event label-grey" data-class="label-grey">
                                                            <i class="ace-icon fa fa-arrows"></i>
                                                            ลาป่วย
                                                        </div>

                                                        <div class="external-event label-success" data-class="label-success">
                                                            <i class="ace-icon fa fa-arrows"></i>
                                                            ลากิจ
                                                        </div>

                                                        <div class="external-event label-danger" data-class="label-danger">
                                                            <i class="ace-icon fa fa-arrows"></i>
                                                            ลาคลอด
                                                        </div>

                                                        <div class="external-event label-purple" data-class="label-purple">
                                                            <i class="ace-icon fa fa-arrows"></i>
                                                            ลาบวช
                                                        </div>

                                                        <div class="external-event label-yellow" data-class="label-yellow">
                                                            <i class="ace-icon fa fa-arrows"></i>
                                                            ลาไม่เอาเงินเดือน
                                                        </div>

                                                        <div class="external-event label-pink" data-class="label-pink">
                                                            <i class="ace-icon fa fa-arrows"></i>
                                                            ลาอื่นๆ
                                                        </div>

                                                        <div class="external-event label-info" data-class="label-info">
                                                            <i class="ace-icon fa fa-arrows"></i>
                                                            ลาพักร้อน
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
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
        <script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {

/* initialize the external events
    -----------------------------------------------------------------*/

    $('#external-events div.external-event').each(function() {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });
        
    });




    /* initialize the calendar
    -----------------------------------------------------------------*/

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();


    var calendar = $('#calendar').fullCalendar({
        //isRTL: true,
         buttonHtml: {
            prev: '<i class="ace-icon fa fa-chevron-left"></i>',
            next: '<i class="ace-icon fa fa-chevron-right"></i>'
        },
    
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: [
          {
            title: 'All Day Event',
            start: new Date(y, m, 1),
            className: 'label-important'
          },
          {
            title: 'Long Event',
            start: moment().subtract(5, 'days').format('YYYY-MM-DD'),
            end: moment().subtract(1, 'days').format('YYYY-MM-DD'),
            className: 'label-success'
          },
          {
            title: 'Some Event',
            start: new Date(y, m, d-3, 16, 0),
            allDay: false,
            className: 'label-info'
          }
        ]
        ,
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped
        
            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');
            var $extraEventClass = $(this).attr('data-class');
            
            
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            
            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];
            
            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
            
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
            
        }
        ,
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            
            bootbox.prompt("New Event Title:", function(title) {
                if (title !== null) {
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay,
                            className: 'label-info'
                        },
                        true // make the event "stick"
                    );
                }
            });
            

            calendar.fullCalendar('unselect');
        }
        ,
        eventClick: function(calEvent, jsEvent, view) {

            //display a modal
            var modal = 
            '<div class="modal fade">\
              <div class="modal-dialog">\
               <div class="modal-content">\
                 <div class="modal-body">\
                   <button type="button" class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>\
                   <form class="no-margin">\
                      <label>Change event name &nbsp;</label>\
                      <input class="middle" autocomplete="off" type="text" value="' + calEvent.title + '" />\
                     <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Save</button>\
                   </form>\
                 </div>\
                 <div class="modal-footer">\
                    <button type="button" class="btn btn-sm btn-danger" data-action="delete"><i class="ace-icon fa fa-trash-o"></i> Delete Event</button>\
                    <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                 </div>\
              </div>\
             </div>\
            </div>';
        
        
            var modal = $(modal).appendTo('body');
            modal.find('form').on('submit', function(ev){
                ev.preventDefault();

                calEvent.title = $(this).find("input[type=text]").val();
                calendar.fullCalendar('updateEvent', calEvent);
                modal.modal("hide");
            });
            modal.find('button[data-action=delete]').on('click', function() {
                calendar.fullCalendar('removeEvents' , function(ev){
                    return (ev._id == calEvent._id);
                })
                modal.modal("hide");
            });
            
            modal.modal('show').on('hidden', function(){
                modal.remove();
            });


            //console.log(calEvent.id);
            //console.log(jsEvent);
            //console.log(view);

            // change the border color just for fun
            //$(this).css('border-color', 'red');

        }
        
    });


})
        </script>
    </body>
</html>
