<?php
@session_start();
include ("include/db.php");

?>


<?php
if(!empty($_GET['val']))
{
$query_data="DELETE FROM `write_for` WHERE id='".$_GET['val']."'";
$run_deleted=mysqli_query($connection,$query_data);
	if($run_deleted)
	{
		echo '<script>alert("Data Has Been Deleted..."); history.go(-1);</script>';
	}
	else
	{
	echo '<script>alert("Please Try Again.."); history.go(-1);</script>';

	}
}

if(!empty($_GET['val5']))
{
$query_data="DELETE FROM `subscriber` WHERE id='".$_GET['val5']."'";
$run_deleted=mysqli_query($connection,$query_data);
	if($run_deleted)
	{
		echo '<script>alert("Data Has Been Deleted..."); history.go(-1);</script>';
	}
	else
	{
	echo '<script>alert("Please Try Again.."); history.go(-1);</script>';

	}
}

if(!empty($_GET['val2']))
{
$query_data="DELETE FROM `blog` WHERE id='".$_GET['val2']."'";
$run_deleted=mysqli_query($connection,$query_data);
	if($run_deleted)
	{
		echo '<script>alert("Data Has Been Deleted..."); history.go(-1);</script>';
	}
	else
	{
	echo '<script>alert("Please Try Again.."); history.go(-1);</script>';

	}
}



if(!empty($_GET['val3']))
{
$query_data="DELETE FROM `pastevents` WHERE id='".$_GET['val3']."'";
$run_deleted=mysqli_query($connection,$query_data);
	if($run_deleted)
	{
		echo '<script>alert("Data Has Been Deleted..."); history.go(-1);</script>';
	}
	else
	{
	echo '<script>alert("Please Try Again.."); history.go(-1);</script>';

	}
}

if(!empty($_GET['val4']))
{
$query_data="DELETE FROM `futureevents` WHERE id='".$_GET['val4']."'";
$run_deleted=mysqli_query($connection,$query_data);
	if($run_deleted)
	{
		echo '<script>alert("Data Has Been Deleted..."); history.go(-1);</script>';
	}
	else
	{
	echo '<script>alert("Please Try Again.."); history.go(-1);</script>';

	}
}








if(!empty($_GET['cont']))
{
$query_data="DELETE FROM `comment` WHERE id='".$_GET['cont']."'";
$run_deleted=mysqli_query($connection,$query_data);
	if($run_deleted)
	{
		echo '<script>alert("Data Has Been Deleted..."); history.go(-1);</script>';
	}
	else
	{
	echo '<script>alert("Please Try Again.."); history.go(-1);</script>';

	}
}

if(!empty($_GET['reg']))
{
$query_data="DELETE FROM `user_detail` WHERE id='".$_GET['reg']."'";
$run_deleted=mysqli_query($connection,$query_data);
	if($run_deleted)
	{
		echo '<script>alert("Data Has Been Deleted..."); history.go(-1);</script>';
	}
	else
	{
	echo '<script>alert("Please Try Again.."); history.go(-1);</script>';

	}
}

if(!empty($_GET['contect']))
{
$query_data="DELETE FROM `contact` WHERE id='".$_GET['contect']."'";
$run_deleted=mysqli_query($connection,$query_data);
	if($run_deleted)
	{
		echo '<script>alert("Data Has Been Deleted..."); history.go(-1);</script>';
	}
	else
	{
	echo '<script>alert("Please Try Again.."); history.go(-1);</script>';

	}
}
?>
