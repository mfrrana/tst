<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Study Town | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
        <!-- Theme style -->
        <link href="<?php echo base_url() ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url() ?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url() ?>plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url() ?>plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url() ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url() ?>plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url() ?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url() ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jquery-2.1.3.js, tabulous.js, js.js and tabulous.css FOR CREATING DYNAMIC TAB OF ADMISSION FORM -->

        <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/tab_js/jquery-2.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/tab_js/tabulous.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/tab_js/js.js"></script>
        <link href='<?php echo base_url(); ?>dist/css/tab_css/tabulous.css' rel='stylesheet' type='text/css'>

        <!-- dynamic_textbox.js FOR CREATING DYNAMIC TEXT BOX OF ADMISSION FORM-->

        <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/dynamic_textbox.js"></script>

        <!-- start js FOR DATE PICKER-->

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>dp_css/jsDatePick_ltr.min.css" />

        <script type="text/javascript" src="<?php echo base_url(); ?>dp_js/jquery.1.4.2.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>dp_js/jsDatePick.jquery.min.1.3.js"></script>

        <script type="text/javascript">
            window.onload = function () {
                new JsDatePick({
                    useMode: 2,
                    target: "inputField",
                    dateFormat: "%d-%M-%Y"

                });
            };
        </script>
        <!-- end js FOR DATE PICKER-->

        <!--auto complete-->
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <style>
            /* Autocomplete
            ----------------------------------*/
            .ui-autocomplete { position: absolute; cursor: default; }   
            .ui-autocomplete-loading { background: white url('http://jquery-ui.googlecode.com/svn/tags/1.8.2/themes/flick/images/ui-anim_basic_16x16.gif') right center no-repeat; }

            /* workarounds */
            html .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */

            /* Menu
            ----------------------------------*/
            .ui-menu {
                list-style:none;
                padding: 2px;
                margin: 0;
                display:block;
            }
            .ui-menu .ui-menu {
                margin-top: -3px;
            }
            .ui-menu .ui-menu-item {
                margin:0;
                padding: 0;
                zoom: 1;
                float: left;
                clear: left;
                width: 100%;
                font-size:80%;
            }
            .ui-menu .ui-menu-item a {
                text-decoration:none;
                display:block;
                padding:.2em .4em;
                line-height:1.5;
                zoom:1;
            }
            .ui-menu .ui-menu-item a.ui-state-hover,
            .ui-menu .ui-menu-item a.ui-state-active {
                font-weight: normal;
                margin: -1px;
            }
        </style>

        <script type="text/javascript">
              var $jq = jQuery.noConflict();
            $jq(this).ready(function () {
                $jq("#stu_id").autocomplete({
                    minLength: 1,
                    source:
                            function (req, add) {
                                $jq.ajax({
                                    url: "<?php echo base_url(); ?>index.php/autocomplete/lookups",
                                    dataType: 'json',
                                    type: 'POST',
                                    data: req,
                                    success:
                                            function (data) {
                                                if (data.response == "true") {
//                                                    alert( JSON.stringify(data));
                                                    add(data.message);
                                                }
                                            },
                                });
                            },
                    select:
                            function (event, ui) {
                                $jq("#result").append(
                                        "<li>" + ui.item.value + "</li>"
                                        );
                            },
                });
            });
        </script>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="<?php echo base_url(); ?>welcome/home_page" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>TST</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>The Study Town</b></span>
                </a>


                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">

                    <!-- Sidebar toggle button (Shortcut toggle button)-->
                    <a href="<?php echo base_url(); ?>welcome/" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url() ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs">
                                        <?php
                                        $name = $this->session->userdata('user_name');
                                        if ($name) {
                                            ?>
                                            <strong><?php echo $name; ?></strong>
                                        <?php } ?>    
                                    </span>
                                </a>
                                <ul class="dropdown-menu">

                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url() ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                        <p>
                                            Md. Fazlur Rahman - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url(); ?>welcome/logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>



            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url() ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>
                                <span class="hidden-xs">
                                    <?php
                                    $name = $this->session->userdata('user_name');
                                    if ($name) {
                                        ?>
                                        <strong><?php echo $name; ?></strong>
                                    <?php } ?>    
                                </span>
                            </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <!--<form name="search_form" action="<?php echo base_url(); ?>welcome/search_student_details" method="post">
                         <input type="text" id="stu_id" name="stu_name" size="18px">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </form>-->
                            <input type="text" id="stu_id" name="stu_id" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>

                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span><b>Administrator Panel</b></span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>welcome/user_form"><i class="fa fa-circle-o"></i> User</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/teacher_form"><i class="fa fa-circle-o"></i> Teacher</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/level_form"><i class="fa fa-circle-o"></i> Level</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/class_form"><i class="fa fa-circle-o"></i> Class</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/section_form"><i class="fa fa-circle-o"></i> Section</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/batch_form"><i class="fa fa-circle-o"></i> Batch</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/subject_form"><i class="fa fa-circle-o"></i> Subject</a></li>  
                            </ul>
                        </li>

                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span><b>Operator Panel</b></span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>welcome/admission_form"><i class="fa fa-circle-o"></i> Admission</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/stu_subject_form"><i class="fa fa-circle-o"></i> Student Subject</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/collection_form"><i class="fa fa-circle-o"></i> Collection</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/payment_form"><i class="fa fa-circle-o"></i> Payment</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>welcome/attendance_form"><i class="fa fa-th"></i> <span>Attendance</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>welcome/result_form"><i class="fa fa-th"></i> <span>Result</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>welcome/report_form"><i class="fa fa-th"></i> <span>Report</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>welcome/search_form"><i class="fa fa-th"></i> <span>Search</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>welcome/utility_form"><i class="fa fa-th"></i> <span>Utility</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>welcome/rm_card_form"><i class="fa fa-th"></i> <span>RM Card</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>welcome/enrollment_form"><i class="fa fa-th"></i> <span>Enrollment</span></a>
                        </li>

                        <!-- /.sidebar -->
                        </aside>

                        <!-- Content Wrapper. Contains page content -->
                        <div class="content-wrapper">
                            <!-- Content Header (Page header) -->


                            <!-- Main content -->
                            <section class="content">

                                <?php echo $maincontent ?>



                            </section><!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->

                        </div><!-- /.row (main row) -->

                </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->      
        <aside class="control-sidebar control-sidebar-dark">                
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class='control-sidebar-menu'>
                        <li>
                            <a href='javascript::;'>
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href='javascript::;'>
                                <i class="menu-icon fa fa-user bg-yellow"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href='javascript::;'>
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href='javascript::;'>
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul><!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3> 
                    <ul class='control-sidebar-menu'>
                        <li>
                            <a href='javascript::;'>               
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>                                    
                            </a>
                        </li> 
                        <li>
                            <a href='javascript::;'>               
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>                                    
                            </a>
                        </li> 
                        <li>
                            <a href='javascript::;'>               
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-waring pull-right">50%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>                                    
                            </a>
                        </li> 
                        <li>
                            <a href='javascript::;'>               
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>                                    
                            </a>
                        </li>               
                    </ul><!-- /.control-sidebar-menu -->         

                </div><!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">            
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                            <p>
                                Some information about this general settings option
                            </p>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                            <p>
                                Other sets of options are available
                            </p>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div><!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked />
                            </label>                
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right" />
                            </label>                
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>                
                        </div><!-- /.form-group -->
                    </form>
                </div><!-- /.tab-pane -->
            </div>
        </aside><!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url() ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
            $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url() ?>plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url() ?>plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url() ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url() ?>plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url() ?>plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url() ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url() ?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url() ?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>dist/js/app.min.js" type="text/javascript"></script>    

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url() ?>dist/js/pages/dashboard.js" type="text/javascript"></script>    

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>dist/js/demo.js" type="text/javascript"></script>
</body>
</html>