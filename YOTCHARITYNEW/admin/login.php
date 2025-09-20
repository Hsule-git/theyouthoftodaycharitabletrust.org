<?php
session_start();
include ("include/db.php");

?>

<html>
  <head>
<link href="style-login.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  </head>
<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
  </div>

    <form id="Login" action="" method="post">

        <div class="form-group">


            <input type="text" class="form-control" id="inputEmail" name="username"  placeholder="Enter User Name" autocomplete="off" required>

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" name="password"  placeholder="Password"  required>

        </div>
        <div class="forgot">
        <!--<a href="reset.html">Forgot password?</a>--->
</div>
        <button type="submit" class="btn btn-primary"  name="Login" id="go">Authorize</button>


    </form>
       <?php

    $msg="";
    if(isset($_POST['Login']))
    {


      $username = $_POST['username'];
      $password = $_POST['password'];




      $query_schenck="SELECT * FROM `login` WHERE user_name='$username' AND password='$password'";
      $run_schenck=mysqli_query($connection,$query_schenck);
      $row_schenck=$run_schenck->num_rows;
      $row_data=$run_schenck->fetch_assoc();
      $hghdhh=$row_data['user_type'];
      if($row_schenck>0)
      {

     $_SESSION['chenck_user']=$username;

     echo "<script>window.open('blogs.php','_self');</script>";
    
    }else
       {

        echo "<div class='error_msg' style='color:red;'>Something Went Wrong,Please Try Again..</div>";

       }
    }
    ?>

    
    </div>

</div></div></div>


</body>
</html>
