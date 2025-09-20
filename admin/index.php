<?php
@session_start();
include("include/connect.php");
$db=new Database();
?>
<?php
if(!empty($_SESSION['chenck_user']))
{


}
else
{
	 echo "<script>window.open('login.php','_self');</script>";
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">DashBoard</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">


                        <ul class="nav pull-right">


                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">

                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="#"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="blogs.php"><i class="menu-icon icon-bullhorn"></i>Manage Events</a>
                                </li>
																<li><a href="pastevent.php"><i class="menu-icon icon-bullhorn"></i>PastEvents</a>
																</li>
																<li><a href="futureevent.php"><i class="menu-icon icon-bullhorn"></i>Future Events</a>
																</li>
                                <li><a href="write-for.php"><i class="menu-icon icon-bullhorn"></i>Volunteer Details</a>
                                </li>
								<li><a href="subscrib.php"><i class="menu-icon icon-bullhorn"></i>Manage Subscribs</a>
                                </li>
                                <li><a href="regist.php"><i class="menu-icon icon-bullhorn"></i>Manage Registration</a>
                              </li>
                              <li><a href="contact-us.php"><i class="menu-icon icon-bullhorn"></i>Manage Contact</a>
                              </li>
                            </ul>

                            <ul class="widget widget-menu unstyled">

                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><!--<b>65%</b>
                                        <p class="text-muted">
                                            Growth</p>-->
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><!--<b>15</b>
                                        <p class="text-muted">
                                            New Users</p>-->
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><!--<b>15,152</b>
                                        <p class="text-muted">
                                            Profit</p>-->
                                    </a>
                                </div>

                            </div>


                            <p><br></p>
							<p><br></p>

                            <p><br></p>
							<p><br></p>
                            <p><br></p>
							<p><br></p>
                            <p><br></p>
							<p><br></p>
                            <p><br></p>
							<p><br></p>




                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">

            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
