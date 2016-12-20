<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo Yii::app()->name; ?></title>

        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo yii::app()->request->baseUrl; ?>favicon.ico">

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

        <!-- aditional stylesheets -->
        <!-- vector map -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/js/lib/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- owl carousel -->        
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/js/lib/owl-carousel/owl.carousel.css">
        <!-- responsive lightbox -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/js/lib/magnific-popup/magnific-popup.css">
        <!-- linecons -->        
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/linecons/style.css">
        <!-- fullcalendar -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/js/lib/fullcalendar/fullcalendar.css">

        <!-- ebro styles -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/style.css">
        <!-- ebro theme -->
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/theme/color_1.css" id="theme">
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.min.css">

        <!--[if lt IE 9]>
                <link rel="stylesheet" href="css/ie.css">
                <script src="js/ie/html5shiv.js"></script>
                <script src="js/ie/respond.min.js"></script>
                <script src="js/ie/excanvas.min.js"></script>
        <![endif]-->

        <!-- custom fonts -->
        <link href='<?php echo yii::app()->request->baseUrl; ?>/http://fonts.googleapis.com/css?family=Roboto:300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    </head>
    <body class=" sidebar_hidden side_fixed">
        <div id="wrapper_all">
            <header id="top_header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-2">
                            <?php
                            //! Displaying hospital details
//                                $hospital = Hospitalregistration::model()->findByPk(Yii::app()->user->hospitalregistrationid);
//                                if ($hospital->logo == "") { //! If hospital logo is null
//                                    
                            ?>
<!--                            <a href="#" class="logo_main" title="Ebro Admin Template:"><img src="img/logo_main.png" alt=""></a>-->
                        </div><?php //} else {              ?>
<!--                        <a href="dashboard1.html" class="logo_main" title="Ebro Admin Template:"><img src="<?php // echo Yii::app()->request->baseUrl . "/logos/" . $hospital->logo;             ?>" alt=""></a>-->
                        <?php // }  ?>
                        <div class="col-xs-6 col-sm-push-7 col-sm-3">
                            <div class="pull-right dropdown">
                                <a href="#" class="user_info dropdown-toggle" title="" data-toggle="dropdown">
                                    <img src="img/user_avatar.png" alt="">
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

            <nav id="mobile_navigation"></nav>


            <section id="breadcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="#">Elixir Aid</a></li>
                        <li><span>Dashboard</span></li>						
                    </ul>
                </div>
            </section>
            <section class="container clearfix main_section">
                <div id="main_content_outer" class="clearfix">
                    <div id="main_content">

                        <!-- main content -->
                        <div class="row">
                            <!--                            <div class="col-lg-3 col-md-6">
                                                            <div class="box_stat box_ico">
                                                                <span class="stat_ico stat_ico_1"><i class="li_vallet"></i></span>
                                                                <h4>1 045$</h4>
                                                                <small>Sale (7 days)</small>
                                                            </div>
                                                        </div>-->
                            <?php
                            $id = Yii::app()->user->hospitalregistrationid;
                           $sql = "SELECT COUNT(*) FROM staffregistration WHERE hospitalregistrationid=$id";
                            $count = Yii::app()->db->createCommand($sql)->queryScalar();
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="box_stat box_ico">
                                    <span class="stat_ico stat_ico_2"><i class="li_user"></i></span>
                                    <center> <b><h4> Total Employees </h4></b></center>
                                    <center>  <median><?php echo $count; ?></median></center>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="box_stat box_ico">
                                    <span class="stat_ico stat_ico_3"><i class="li_search"></i></span>
                                    <center>  <h4> Total Doctors</h4></center>
                                    <?php
                                    $id = Yii::app()->user->hospitalregistrationid;
									if(isset($id)){
                                    $sql1 = "SELECT COUNT(*) FROM doctordetails WHERE hospitalregistrationid=$id";
                                    $doctors = Yii::app()->db->createCommand($sql1)->queryScalar();
                                    ?>
                                    <center><median><?php echo $doctors; ?></median></center>
									<?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="box_stat box_ico">
                                    <span class="stat_ico stat_ico_4"><i class="li_note"></i></span>
                                    <center> <h4>Total Departments</h4></center>
                                    <?php
                                    $id = Yii::app()->user->hospitalregistrationid;
                                    $dep = "SELECT COUNT(*) FROM hospitaldepartment WHERE hospitalregistrationid=$id";
                                    $department = Yii::app()->db->createCommand($dep)->queryScalar();
                                    ?>
                                    <center> <median><?php echo $department; ?></median></center>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-12">
                                <div class="box_stat_circular">
                                    <div class="box_stat_circular_a color_a">
                                        <?php
                                        $id = Yii::app()->user->hospitalregistrationid;

                                     //   $sql = "SELECT COUNT(*) FROM staffregistration WHERE hospitalregistrationid='$id'";

                                    //    $sql2 = "SELECT COUNT(*) FROM doctordetails WHERE hospitalregistrationid=$id";
                                      //  $count1 = Yii::app()->db->createCommand($sql)->queryScalar();

                                       // $count2 = Yii::app()->db->createCommand($sql2)->queryScalar();
                                      //  $countsum = $count1 + $count2;
                                        ?>
                                        <h4><?php // echo $countsum; ?></h4>
                                        <small>Total Users</small>
                                    </div>
                                    <div class="box_stat_circular_middle">
                                        <div class="easy_chart easy_chart_a" data-percent="42"><i class="glyphicon glyphicon-user"></i></div>
                                    </div>
                                    <div class="box_stat_circular_b">
                                        <p></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Users</h4>
                                    </div>
                                    <div class="chart_wrapper">
                                        <div class="chart_wrapper">
                                            <div id="chart_bars" class="chart_a">

                                                <?php
//                                                $username = array();
//                                                $time = array();
//                                                $data2 = User::model()->findAll();
//                                                foreach ($data2 as $data) {
//                                                    array_push($username, $data->username);
//                                                    array_push($time, $data->create_at);
//                                                }
//                                                $username = implode(',', $username);
//                                                $time = implode(',', $time);
//
//
//
                                                $data = "SELECT COUNT(*) FROM staffregistration WHERE hospitalregistrationid='$id'";
                                                $staff = Yii::app()->db->createCommand($data)->queryScalar();
                                                $data1 = "SELECT COUNT(*) FROM doctordetails WHERE hospitalregistrationid='$id'";
                                                $doctor = Yii::app()->db->createCommand($data1)->queryScalar();
                                                $tot = "SELECT COUNT(*) FROM users WHERE hospitalregistrationid='$id'";
                                                $total = Yii::app()->db->createCommand($tot)->queryScalar();
                                                $this->renderPartial('graph1', array('staff' => $staff, 'doctor' => $doctor, 'total' => $total));
//                                                print_r($username);
//                                                exit;
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>
                                    <div id="ebro_cal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                        <a href="javascript:void(0)"><span class="glyphicon  icon-hospital"></span>Hospital </a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/hospitalregistration/create">Hospital Registration</a></li>


                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/staffregistration/create">Staff registration</a></li>



                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="icon-user-md"></span>Doctor details</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/doctorspecialization/create">Specialization</a></li>


                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/doctordesignation/create">Designation</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/core/doctordetails/create">Doctor registration</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress" ><span class="glyphicon glyphicon-usd"></span>Salary Settings</a>

                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Staff Payroll </a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Doctor Payroll</a></li>
                        </ul>

                    </li>



                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress" ><span class="glyphicon glyphicon-user"></span>Patient</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Patient Registration</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Inpatient Admission</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Outpatient Appointment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress" ><span class="glyphicon glyphicon-list-alt"></span>Leave Management</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Staff Leave Management</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Doctors Leave Management</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress" ><span class="icon-edit "></span>Billing</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Inpatient Billing</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Outpatient Billing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress" ><span class="icon-beaker "></span>Laboratory Management</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Laboratory Type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Laboratory Details</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Laboratory Test</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Laboratory Test Results</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress" ><span class="icon-building"></span>Store Management</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Stock Type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Stock Details</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Stock Arrangement</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Vendor Details</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Stock Payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress" ><span class="glyphicon glyphicon-tint"></span>Blood Bank</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Blood Type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Donation Type</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Blood Test Result</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Donor Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress" ><span class="icon-ambulance"></span>Transportation</a>
                        <ul>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Add Vehicle</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Add Driver</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Assign Route</a></li>
                            <li><a href="<?php echo yii::app()->request->baseUrl; ?>/index.php/site/progress">Assign Driver</a></li>
                        </ul>
                    </li>


                </ul>
            </div>

        </nav>


        <!-- jQuery -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
        <!-- bootstrap framework -->
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


        <!--[[ page specific plugins ]]-->

        <!-- peity (small charts) -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/peity/jquery.peity.min.js"></script>
        <!-- vector map -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- easy pie chart -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <!-- charts -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/flot/jquery.flot.min.js"></script>
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/flot/jquery.flot.resize.js"></script>
        <!-- video embed -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/FitVids/jquery.fitvids.js"></script>
        <!-- carousel -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <!-- responsive lightbox -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- jQueryUi -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/jquery_ui/jquery-ui-1.10.3.custom.min.js"></script>
        <!-- fullcalendar -->
        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/lib/fullcalendar/fullcalendar.js"></script>

        <script src="<?php echo yii::app()->request->baseUrl; ?>/js/pages/ebro_dashboard.js"></script>

    </body>

</html>
