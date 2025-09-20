<?php
@session_start();
include "admin/include/db.php";

?>
<!doctype html>

<html class="no-js" lang="">


<head>

<meta charset="utf-8">

<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

<title>Events | Youth of Today Welfare foundation - Yot</title>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,900%7CGentium+Basic:400italic&amp;subset=latin,latin" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="assets/css/extras.min.css">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<link rel="stylesheet" href="assets/css/corporate.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-touch-icon-57x57.png">

<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-touch-icon-60x60.png">

<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72.png">

<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-touch-icon-76x76.png">

<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114.png">

<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-touch-icon-120x120.png">

<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-touch-icon-144x144.png">

<link rel="icon" type="image/png" href="assets/images/favicons/favicon-32x32.png" sizes="32x32">

<link rel="icon" type="image/png" href="assets/images/favicons/favicon-96x96.png" sizes="96x96">

<link rel="icon" type="image/png" href="assets/images/favicons/favicon-16x16.png" sizes="16x16">

<link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
 <link rel="stylesheet" type="text/css" href="http://tristanedwards.me/u/SweetAlert//lib/sweet-alert.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />
   <script src="http://tristanedwards.me/u/SweetAlert//lib/sweet-alert.js"></script>



   
</head>



<body >

<div class="pace-overlay"></div>



<div class="menu navbar navbar-static-top header-logo-left-menu-right oxy-mega-menu navbar-sticky" id="masthead">

  <div class="container-fluid">

    <div class="col-md-3">

	<div class="navbar-header">

      <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <a class="navbar-brand" href="index.php"> <img src="assets/images/logo2.png"> <h2>Yot</h2></a> </div></div>
      <div class="col-md-3">



      </div>



    <div class="col-md-6">

	<div class="nav-container">

      <nav class="collapse navbar-collapse main-navbar logo-navbar navbar-right">

        <div class="menu-container">



        
		</div>
		</nav>
		</div> </div>

  </div>

</div>

<div id="content" role="main">

  <article>



   <section class="section">

      <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px"> </div>

      <div class="container">

        <div class="row">

          <div class="col-md-2 text-center"></div>

          <div class="col-md-8 text-center">

            <h1 class="banner-inner" data-os-animation="fadeIn" data-os-animation-delay="0s" style="color: #1c1c1c;">Events</h1>

          </div>

          <div class="col-md-2"></div>

        </div>

      </div>

    </section>


    <section class="section">

      <div class="background-overlay"></div>

      <div class="container">

        <div class="row">
		<div class="col-md-12">
	<div class="col-text-1 element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
		<div class="about-paira">

      <?php
      		if(!empty($_GET['data']))
      		{
      		$adaa=$_GET['data'];


      		$query="SELECT * FROM `blog` Where id='$adaa'" ;
      		$run= mysqli_query($connection,$query);
      		$row=$run->fetch_assoc();
            extract($row);

            }
        ?>
                        <div class="col-md-6">
                      <div class="blg-section">
                        <img src="admin/upload/<?= $Image;?>" alt="" class="">
                      </div>
                    </div>













		</div>
         </div>
			</div>



        </div>

      </div>

    </section>



	 <section>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="content">
	<div class="col-md-2">
	<h4>Comment</h4>

	</div>
	<form action="" method="POST">
	<div class="col-md-10">
	<div class="input-group">
	<textarea class="form-control" name="comment" style="float:left;"></textarea>





	<?php
		if(isset($_SESSION['Bloog_user']))
		{
			?>
		 <span class="input-group-btn com-btn">
    <button class="btn" type="submit" name="com_sub">Comment<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
    </span><?php
		}
		else
		{
			?>
		 <span class="input-group-btn com-btn">
    <button class="btn trigger_popup_fricc" type="button" name="com_sub" >Comment<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
    </span>
		<?php
		}

		?>







    </div>
	</div>

	</form>
	</div>
	</div>
	</div>
	</div>
	</section>

	<div class="container">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<div class="row">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		<h1>Comments</h1>
   <ul id="comments-list" class="comments-list">
	<?php
		   $com_quer="SELECT * FROM `comment` Where ses_id='".$_GET['data']."'";
		   $com_ran=mysqli_query($connection,$com_quer);
		   while($com_row=$com_ran->fetch_assoc())
		   {
		    ?>
		    <li>
				<div class="comment-main-level">
				<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><?php echo $com_row['user_email'];?></h6>
						<!---	<span>hace 20 minutos</span>-->
						</div>
						<div class="comment-content">
						<?php echo  $com_row['content'];?>
						</div>
					</div>
				</div>
				</li>
		    <?php
		   }
		  ?>
       </ul>
	</div>
	</div>
</div>









	</div>
	</div>
	</div>
	</section>
	</div>
</div>
<div class="go-to-top"><a class="go-top go-top-circle" href="javascript:void(0)"> <i class="fa fa-angle-up"></i> </a> </div>
<script type="text/javascript">

        var oxyThemeData = {

            navbarHeight: 100,

            navbarScrolled: 90,

            navbarScrolledPoint: 20,

            menuClose: 'off',

            scrollFinishedMessage: 'No more items to load.',

            hoverMenu:

            {

                hoverActive: false,

                hoverDelay: 1,

                hoverFadeDelay: 200

            },

            siteLoader: 'on'

        };

    </script>
	<script>

$(document).ready(function()
{
$(".active").addClass("LLLL_MMM");
$("#man_id1").mouseover(function()
{
$(this).addClass("active");
$("#man_id2").removeClass("active");
$("#man_id3").removeClass("active");
$("#man_id4").removeClass("active");
$("#man_id5").removeClass("active");

});

$("#man_id2").mouseover(function()
{
$(this).addClass("active");
$("#man_id1").removeClass("active");
$("#man_id3").removeClass("active");
$("#man_id4").removeClass("active");
$("#man_id5").removeClass("active");

});

$("#man_id3").mouseover(function()
{
$(this).addClass("active");
$("#man_id1").removeClass("active");
$("#man_id2").removeClass("active");
$("#man_id4").removeClass("active");
$("#man_id5").removeClass("active");

});

$("#man_id4").mouseover(function()
{
$(this).addClass("active");
$("#man_id1").removeClass("active");
$("#man_id2").removeClass("active");
$("#man_id3").removeClass("active");
$("#man_id5").removeClass("active");

});
$("#man_id5").mouseover(function()
{
$(this).addClass("active");
$("#man_id1").removeClass("active");
$("#man_id2").removeClass("active");
$("#man_id3").removeClass("active");
$("#man_id4").removeClass("active");

});

$(document).delegate("#man_id1","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});


$(document).delegate("#man_id2","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});

$(document).delegate("#man_id3","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});

$(document).delegate("#man_id4","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});
$(document).delegate("#man_id5","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});
});

</script>

<script src="assets/js/theme.min.js"></script>
 <script src="http://tristanedwards.me/u/SweetAlert//lib/sweet-alert.js"></script>

</body>





</html>

<script>
$(document).ready(function()
{

    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });

    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });


		$(".log").click(function()
	{
		$("#Login").show();
		$("#Registration").hide();
			$("#Login_forgot").hide();
	});
		$(".sign").click(function()
	{
		$("#Login").hide();
		$("#Registration").show();
			$("#Login_forgot").hide();


	});

		$(".forgootingiii").click(function()
	{
		$("#Login").hide();
		$("#Registration").hide();
			$("#Login_forgot").show();


	});
});

</script>
<style>
/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */
.forget{
    float: left;
    margin-left: 5px;

}
</style>
<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">X</div>
        <p><div class="container">
		<div class="row">

		<button type="button" class="log" style="float:left;">Login</button>
		&nbsp;
		<button type="button" class="sign" style="float:left;">Sign Up</button>

		</div>
		</div>

		<div class="tab-content">
                            <div class="tab-pane" id="Login" style="display:block">
                                <form role="form" class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="Password" name="PASS" placeholder="Password" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit"  name="okkk" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        </div>
                                        <div class="forget"><a herf="#poiu" class="forgootingiii">Forgot password?</a></div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration" style="display:none">
                                <form role="form" class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
										 <div class="col-sm-10">
                                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name" required />
                                    </div>
                                 </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="user_phone" name="user_phone" maxlength="14" minlength="10" placeholder="Mobile" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" name="yes" class="btn btn-primary btn-sm">
                                            Save </button>
                                      </div>
                                </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="Login_forgot" style="display:none">
                                <form role="form" class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit"  name="okkkL" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        </div>

                                         <div class="forget"><a herf="#fhj" class="log">Login</a></div>
                                </div>
                                </form>
                            </div>
                        </div>

		</p>
    </div>
</div>
<?php
if(isset($_POST['yes']))
{
	$user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];
    $user_pass = $_POST['user_pass'];

	$query="INSERT INTO `user_detail`(`name`, `email`, `phone`, `password`) VALUES ('$user_name','$user_email','$user_phone','$user_pass')";
	$run= mysqli_query($connection,$query);
	if($run)
	{
	echo '<script> swal("Thanks !", "Details Has been Submitted..", "success");</script><meta http-equiv="refresh" content="1">';
	
}else
{
echo '<script>sweetAlert("Oops...", "Something went wrong!", "error");</script><meta http-equiv="refresh" content="1">';

}


}


if(isset($_POST['okkk']))
{
	$Email = $_POST['Email'];
    $PASS = $_POST['password'];

      $query_schenck="SELECT * FROM `user_detail` WHERE email='$Email' AND password='$PASS'";
      $run_schenck=mysqli_query($connection,$query_schenck);
      $row_schenck=$run_schenck->num_rows;
      $row_data=$run_schenck->fetch_assoc();

      if($row_schenck>0)
      {
       $_SESSION['Bloog_user']=$Email;
	  	echo '<script> swal("Thanks !", "You Are Successfully Logged In..", "success");</script><meta http-equiv="refresh" content="1">';
     }
      else
       {

        echo '<script>sweetAlert("Oops...", "Your Username or Password is invalid!", "error");</script><meta http-equiv="refresh" content="1">';

       }


}


if(isset($_POST['com_sub']))
{
	extract($_POST);
	$name=$comment;
	$user_id=$_SESSION['Bloog_user'];
	$data_id=$_GET['data'];

	$query="INSERT INTO `comment`(`user_email`, `ses_id`, `content`) VALUES ('$user_id','$data_id','$name')";
	$run=mysqli_query($connection,$query);
	if($run)
	{
        echo '<script> swal("Thanks !", "Details Has been Submitted..", "success");</script><meta http-equiv="refresh" content="1">';
	}
	else
	{
	echo '<script>sweetAlert("Oops...", "Something went wrong!", "error");</script><meta http-equiv="refresh" content="1">';

	}


}
?>
