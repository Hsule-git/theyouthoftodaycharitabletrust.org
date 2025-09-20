<?php
@session_start();
include ("include/db.php");

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
                               <!-- <li ><a href="#"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>-->
                                <li class="active"><a href="blogs.php"><i class="menu-icon icon-bullhorn"></i>Manage Events</a>
                                </li>
																<li><a href="pastevent.php"><i class="menu-icon icon-bullhorn"></i>PastEvents</a>
																</li>
																<li><a href="futureevent.php"><i class="menu-icon icon-bullhorn"></i>Future Events</a>
																</li>
                                <li><a href="write-for.php"><i class="menu-icon icon-bullhorn"></i>Volunteer Details</a>
                                </li>
								<li><a href="subscrib.php"><i class="menu-icon icon-bullhorn"></i>Manage subscribes</a>
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
								<h3>Add Events</h3>
							</div>
							<div class="module-body">
			<?php

									if(isset($_POST['action']))
									{
									$data_set=$_GET['get_id'];
									extract($_POST);
									   $content = $_POST['content'];
										$title =$_POST['title'];
										$name = $_POST['name'];
										$file=$_FILES['img']['name'];
										$file_tmp=$_FILES['img']['tmp_name'];
										$check_ing=$text_img;
										$img="";
										if(empty($file))
									     {
									       $img=$check_ing;
									     }
										else
										{
										 $img=$file;

										}

										move_uploaded_file($file_tmp,"pastevents/".$img);

										$query="Update `pastevents` Set `title`='$title', `Image`='$img', `Content`='$content', `Author`='$name' Where id='$data_set'";
										$run=$db->update($query);
										if($run)
										{
											echo '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Success !</strong> Data Has Been Updated...
									</div>
									<meta http-equiv="refresh" content="30">';
										}
										else
										{
											echo '<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Somthing Went Wrong Please Try Agian...
									</div><meta http-equiv="refresh" content="30">';

										}

									}




									?>

									<form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
									    	<?php
									$query="SELECT * FROM `pastevents` Where id='".$_GET['get_id']."'";
									$run= mysqli_query($connection,$query);
									while($row=$run->fetch_assoc())
									{
									    extract($row);
									    ?>
									<div class="control-group">
											<label class="control-label" for="basicinput">Title</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="title" value="<?= $title;?>" required>

											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Image</label>
											<div class="controls">
												<input type="file" id="basicinput"  class="span8" name="img" >
												<input type="text" name="text_img" value="<?= $Image;?>">

											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Content</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="content" required> <?= $Content;?></textarea>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Author</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="name" value="<?= $Author;?>" required>

											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" name="action">Submit Form</button>
											</div>
										</div>

										<?php
									}
									?>
									</form>




							</div>
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
</body>
