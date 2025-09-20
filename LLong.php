
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
                                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email" required />
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
                                <form role="form" class="form-horizontal" action="form-control" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                      Email</label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit"  name="reset-request" class="btn btn-primary btn-sm">
                                          <a href="password.php">Submit</button>
                                          </a></div>

                                         <div class="forget"><a herf="#fhj" class="log">Login</a></div>
                                </div>
                                </form>

                            </div>
                          </div>
                          </div>



		</p>
    </div>
</div>
<?php






if(isset($_POST['yes']))
{
	extract($_POST);

    $hash = "$2y$10$";
    $enc = "imakephpbettereachandeveryday";
    $hash_enc = $hash.$enc;
    $user_pass = crypt($user_pass,$hash_enc);



    
    
$query="INSERT INTO `user_detail`(`name`, `email`, `phone`, `password`) VALUES ('$user_name','$user_email','$user_phone','$user_pass')";
  $run=mysqli_query($connection,$query);

  if($run)
  {
    echo '<script> swal("Thanks !", "Details Has been Submitted..", "success");</script><meta http-equiv="refresh" content="5">';
  }else
  {
    echo '<script>sweetAlert("Oops...", "Email or password already exist!", "error");</script><meta http-equiv="refresh" content="5">';
  }

}






if(isset($_POST['okkk']))
{
	extract($_POST);
    $hash = "$2y$10$";
    $enc = "imakephpbettereachandeveryday";
    $hash_enc = $hash.$enc;
    $PASS = crypt($PASS,$hash_enc);

      $query ="SELECT * FROM `user_detail` WHERE email='$email' AND password='$PASS'";
      $run_schenck=mysqli_query($connection,$query);
      $row_schenck=$run_schenck->num_rows;
      $row_data=$run_schenck->fetch_assoc();

      if($row_schenck>0)
      {
       $_SESSION['Bloog_user']=$email;
       	echo '<script> swal("You Are Successfully Logged In");</script><meta http-equiv="refresh" content="1">';

     }else
     {

    echo '<script>sweetAlert("Your Username or Password is invalid!");</script><meta http-equiv="refresh" content="5">';

    }


}


?>
