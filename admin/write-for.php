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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                               <!-- <li><a href="#"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>--->
                                <li><a href="blogs.php"><i class="menu-icon icon-bullhorn"></i>Manage Events</a>
                                </li>
																<li><a href="pastevent.php"><i class="menu-icon icon-bullhorn"></i>PastEvents</a>
																</li>
																<li><a href="futureevent.php"><i class="menu-icon icon-bullhorn"></i>Future Events</a>
																</li>
                                 <li  class="active"><a href="write-for.php"><i class="menu-icon icon-bullhorn"></i>Volunteer Details</a>
                                </li>
								<li><a href="subscrib.php"><i class="menu-icon icon-bullhorn"></i>Manage Subscribes</a>
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


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Manage Volunteer's List</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Contact Number</th>
											<th>Comments</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

									<?php
									$query="SELECT * FROM `write_for`";
									$run=$db->select($query);
									while($row=$run->fetch_assoc())
									{
										extract($row);
									?>
                                     <tr class="odd gradeX">
											<td><?= $name;?></td>
											<td><?= $email;?></td>
											<td><?= $title;?></td>
											<td class="center"><?= $message;?></td>
											<td class="center"><a href="delete.php?val=<?= $id;?>" class="btn btn-default">Delete</a></td>
										</tr>
                                 <?php
									}
									?>




									</tbody>

								</table>
							</div>
						</div><!--/.module-->
						</div>



					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">



		</div>
	</div>
<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<script>
			CKEDITOR.replace( 'content' );
		</script>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
