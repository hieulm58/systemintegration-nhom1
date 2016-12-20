<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo Yii::app()->name; ?>3</title>

        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

        <!-- bootstrap framework-->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
        <!-- todc-bootstrap -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/todc-bootstrap.min.css">
        <!-- font awesome -->        
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.min.css">
        <!-- flag icon set -->        
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/img/flags/flags.css">
        <!-- retina ready -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/retina.css">
        <!-- bootstrap switch -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/js/lib/bootstrap-switch/stylesheets/bootstrap-switch.css">
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/js/lib/bootstrap-switch/stylesheets/ebro_bootstrapSwitch.css">	
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/js/lib/datepicker/css/datepicker.css">
        <!-- aditional stylesheets -->


        <!-- ebro styles -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/style.css">
        <!-- ebro theme -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/theme/color_1.css" id="theme">
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/pages/country.js"></script>

        <link href='<?php echo yii::app()->request->baseUrl; ?>/http://fonts.googleapis.com/css?family=Roboto:300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    </head>
    <body class=" sidebar_hidden side_fixed">
        <div id="wrapper_all">
            <header id="top_header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-2">
                            <a href="dashboard1.html" class="logo_main" title="Ebro Admin Template:"><img src="/img/logo_main.png" alt=""></a>
                        </div>

                        <div class="col-xs-6 col-sm-push-7 col-sm-3">
                            <div class="pull-right dropdown">
                                <a href="#" class="user_info dropdown-toggle" title="Jonathan Hay" data-toggle="dropdown">
                                    <img src="<?php echo yii::app()->request->baseurl; ?>/img/user_avatar.png" alt="">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/user/profile">Profile</a></li>
                                    <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/user/profile/changepassword">Change password</a></li>
                                    <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/user/logout">Log Out</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </header>						

            <!-- mobile navigation -->
            <nav id="mobile_navigation"></nav>


            <?php echo $content; ?>
            <div id="footer_space"></div>
        </div>

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        © 2016. Elixir-Aid by GESCIS Technologies Pvt Ltd. V1
                    </div>
                    <div class="col-sm-8">
                       
                    </div>
                    
                </div>
            </div>
        </footer>

        <nav id="side_fixed_nav">
            <div class="slim_scroll">
                <div class="side_nav_actions">
                    <a href="javascript:void(0)" id="side_fixed_nav_toggle"><span class="icon-align-justify"></span></a>
                    <div id="toogle_nav_visible" class="make-switch switch-mini" data-on="success" data-on-label="<i class='icon-lock'></i>" data-off-label="<i class='icon-unlock-alt'></i>">
                        <input id="nav_visible_input" type="checkbox">
                    </div>
                </div>
                <ul id="text_nav_side_fixed">
                    <li>
                        <a href="<?php echo yii::app()->request->baseurl; ?>/index.php/site/index"><span class="icon-dashboard"></span>Dashboard</a>

                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="glyphicon glyphicon-wrench"></span>Settings</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/hospitallocation/create">Add buildings</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/hospitaldepartment/create"> Add Departments</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/employeetype/create">Add employee type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/buildingfloor/create">Add Floor</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="glyphicon icon-hospital"></span>Hospital details</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/hospitalregistration/create">Hospital Registration</a></li>


                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/staffregistration/create">Staff registration</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="glyphicon icon-user"></span>Doctor details</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/doctorspecialization/create">Specialization</a></li>


                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/doctordesignation/create">Designation</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/doctordetails/create">Doctor registration</a></li>

                        </ul>
                    </li>
 <li>
                        <a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress" ><span class="glyphicon glyphicon-usd"></span>Salary Settings</a>

                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Staff Payroll </a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Doctor Payroll</a></li>
                        </ul>

                    </li>



                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress" ><span class="glyphicon glyphicon-user"></span>Patient</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Patient Registration</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Inpatient Admission</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Outpatient Appointment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress" ><span class="glyphicon glyphicon-list-alt"></span>Leave Management</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Staff Leave Management</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Doctors Leave Management</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress" ><span class="icon-edit "></span>Billing</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Inpatient Billing</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Outpatient Billing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress" ><span class="icon-beaker "></span>Laboratory Management</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Laboratory Type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Laboratory Details</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Laboratory Test</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Laboratory Test Results</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress" ><span class="icon-building"></span>Store Management</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Stock Type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Stock Details</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Stock Arrangement</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Vendor Details</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Stock Payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress" ><span class="glyphicon glyphicon-tint"></span>Blood Bank</a>
                        <ul>
                           <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Blood Type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Donation Type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Blood Test Result</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Donor Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress" ><span class="icon-ambulance"></span>Transpotation</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Add Vehicle</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Add Driver</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Assign Route</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl;?>/index.php/site/progress">Assign Driver</a></li>
                        </ul>
                    </li>


                </ul>
                    				
                </ul>
            </div>
        </nav>


        <script src="<?php echo yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <!-- jQuery resize event -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/jquery.ba-resize.min.js"></script>
        <!-- jquery cookie -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/jquery_cookie.min.js"></script>
        <!-- retina ready -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/retina.min.js"></script>
        <!-- typeahead -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/typeahead.js/typeahead.min.js"></script>
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/typeahead.js/hogan-2.0.0.js"></script>

        <!-- tinyNav -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/tinynav.js"></script>
        <!-- slimscroll -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/jQuery-slimScroll/jquery.slimscroll.min.js"></script>

        <!-- bootstrap switch -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/bootstrap-switch/js/bootstrap-switch.min.js"></script>

        <!-- touchSwipe -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/TouchSwipe/jquery.touchSwipe.min.js"></script>

        <!-- Navgoco -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/navgoco/jquery.navgoco.min.js"></script>

        <!-- ebro common scripts/functions -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/ebro_common.js"></script>
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/datepicker/js/bootstrap-datepicker.js"></script>


        <!--[[ page specific plugins ]]-->

        <!-- bootbox.js -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/bootbox/bootbox.min.js"></script>

        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/pages/ebro_user_profile.js"></script>




    </body>
</html>