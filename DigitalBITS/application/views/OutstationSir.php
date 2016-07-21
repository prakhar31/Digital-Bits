<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITS DIGITAL | Outstation</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div id= "wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php { echo $pass_row['name'];}?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata('user_type');?><b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo base_url(); ?>main/members">Home/a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>main/logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="http://www.bits-pilani.ac.in"><i class="fa fa-edit"></i> <span class="nav-label">BITS Pilani</span><span class="fa arow"></span></a>
                   
                </li>
                <li class="active">
                    <a href="<?php echo base_url(); ?>main/members"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span> <span class="fa arow"></span></a>  
                </li>
              
                <li>
                    <a href="<?php echo base_url(); ?>outstation"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Outstation Form</span><span class="fa rrow"></span></a>
                   
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>rootmail"><i class="fa fa-envelope"></i> <span class="nav-label">Root Mail </span></a>
                    
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>messsigning"><i class="fa fa-pie-chart"></i> <span class="nav-label">Mess Signing</span> </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>roombooking"><i class="fa fa-flask"></i> <span class="nav-label">Room Booking</span></a>
                </li>
                
                <li>
                    <a href="http://www.bits-pilani.ac.in:12349/"><i class="fa fa-desktop"></i> <span class="nav-label">Student Welfare Department</span>  </a>
                    
                </li>
                <li>
                    <a href="http://nalanda.bits-pilani.ac.in/"><i class="fa fa-files-o"></i> <span class="nav-label">Nalanda</span><span class="fa rrow"></span></a>
                   
                </li>
                <li>
                    <a href="http://id.bits-pilani.ac.in/"><i class="fa fa-globe"></i> <span class="nav-label">Instruction Division</span></a>
                    
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>main/logout"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                    
                </li>
               
            </ul>

        </div>
    </nav>

    <div id= "page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"><?php echo $this->session->userdata('email');?></span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo base_url(); ?>main/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
		<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Outstation Form</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Forms</a>
                        </li>
                        <li class="active">
                            <strong>Outstation Form</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
			 <div class= "wrapper wrapper-content animated fadeInRight">
            <?php 
    echo form_open('Outstation/req_submit');
    foreach($outstidata as $mediator){?>
             <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            
                            <h5>Outstation Request by <label id="username"><?php  echo $mediator['bitsid'];?></label> <small></small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-rench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-ties"></i>
                                </a>
                            </div>
                        </div>
                        <div class= "ibox-content">
                          
							<div class="first">
							<div class="row">
                                <div class="form-group col-sm-4"><label class="col-sm-1 control-label">Name</label>
<div style="padding-left:13%;">
                                    <div class="col-sm-10"><input type="text" class="form-control disabled-result" id="name"  value ="<?php  echo $mediator['name'];?>"disabled="disabled"></div>
                                </div>
                               </div> 
								<div class="form-group col-sm-4" style="margin-left:-30px;"><label class="col-sm-2 control-label">Room</label>
<div style="padding-left:18%;">
                                    <div class="col-sm-10"><input type="text" class="form-control" id="roomnumber" value ="<?php  echo $mediator['room_no'];?>"disabled="disabled"></div>
                                </div>
                               </div>
								<div class="form-group col-sm-4"><label class="col-sm-5 control-label">Fathers Name</label>
<div style="padding-left:25%;">
                                    <div class="col-sm-9"><input type="text" class="form-control" id="destination" value ="<?php  echo $mediator['f_email'];?>" disabled="disabled"></div>
                                </div></div>
                               
								<div class="form-group col-sm-4"><label class="col-sm-1 control-label">Father's Number</label>
<div style="padding-left:18%;">
                                    <div class="col-sm-10"><input type="text" class="form-control" id="destination"  value ="<?php  echo $mediator['f_mobile'];?>"disabled="disabled"></div>
                                </div></div></div></div>
                                <div class="hr-line-dashed"></div>
								<div class="form-group"><label class="col-sm-2 control-label">Destination</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" value ="<?php  echo $mediator['destination'];?>" id="destination" disabled="disabled"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Expected Exit Time</label>
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" class="form-control" value="09:30" value ="<?php  echo $mediator['exit_time'];?>"disabled="disabled">
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                      
                                </div>
                                <div class="hr-line-dashed"></div>
								<div class="form-group" id="data_5">
                                <label class="col-sm-2 control-label">Entry - Exit Date</label>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="start" value ="<?php  echo $mediator['exit_date'];?>" disabled="disabled"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="input-sm form-control" name="end" value ="<?php  echo $mediator['return_date'];?>" disabled="disabled"/>
                                </div>
                            </div>
							<div class="hr-line-dashed"></div>
                               <div class="form-group"><label class="col-sm-2 control-label">Expected Entry Time</label>
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" class="form-control" value="09:30" disabled="disabled">
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                      
                                </div>
                                <div class="hr-line-dashed"></div>
                               <div class="form-group"><label class="col-sm-2 control-label"><br/><small class="text-navy"></small></label>
                                    <div class="col-sm-10">
                                        <div class="i-checks" class="active"><label> <input type="radio" value="<?php  echo $mediator['id'];?>" name="requests[]" class="active"> <i></i> Accept </label></div>
                                        <div class="i-checks"><label> <input type="radio" value="<?php  echo (-1*(int)$mediator['id']);?>" name="requests[]"> <i></i> Reject </label></div>
                                       
            </div>
        </div>
		<div> 
                                    </div>
									
                            
                        </div>
                    </div>
                </div>
		</div>
		<?php } ?>
        </div>
		<br><br><br><br><br><br><br><br>
		 <div class="footer">
		  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                     <div class="form-group"><label class="col-sm-12 control-label" name="req_pass"><br>Enter Passcode</label>
<br>
                                    <div class="col-sm-10"><input type="password" class="form-control" id="passcode" name="req_pass"><br></div>
									  <div class="col-sm-2"> <button class="btn btn-primary" type="submit" name="submit" >Submit</button></div> <?php
                                      echo form_close();
    ?>
                                </div>
					 </div>
					
            </div>
            <div class="pull-right">
                <strog style="font-size:18px;">Developers</strong>
            </div>
            <div>
                <strong></strong> BITS DIGITAL &copy; 2016-2017
            </div>
        </div>
        </div>
	    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="<?php echo base_url(); ?>assets/js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="<?php echo base_url(); ?>assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="<?php echo base_url(); ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="<?php echo base_url(); ?>assets/js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="<?php echo base_url(); ?>assets/js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>

    <script>
        $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });


        });
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "�",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });
    </script>
</body>
</html>

