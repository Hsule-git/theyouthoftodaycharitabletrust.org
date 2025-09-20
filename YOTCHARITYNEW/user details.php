<?php include "includes/header.php";?>
<body>

 <br>
 <br>

 <script type="text/javascript">
     function allnumeric(inputtxt)
   {
      var numbers = /^[0-9]+$/;
      if(inputtxt.value.match(numbers))
      {
      alert('Your Registration number has accepted....');
      document.form1.pass2.focus();
      return true;
      }
      else
      {
      alert('Please input numeric characters only');
      document.form1.pass2.focus();
      return false;
      }
   } 

 </script>
  
  
    
<!-- ======= Counts Section ======= -->
 

<!-- End Counts Section -->

<section class="section" id="getinvolved"><!--get involved section-->

         <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px"> </div>

         <div class="container">

           <div class="row">

             <div class="col-md-2 text-center"></div>

             <div class="col-md-8 text-center">

       <h1 class="banner-inner" data-aos="fade-left" data-os-animation-delay="0s" style="color: #1c1c1c;">User Details</h1>

             </div>

             <div class="col-md-2"></div>

           </div>

         </div>

       </section><!--get involved header section closed-->

       <section class="testimonial py-5" id="testimonial" data-aos="fade-up"><!--get involved form-->
           <div class="container">
               <div class="row ">
                   <div class="col-md-4 py-5 bg-primary text-white text-center ">
                       <div class=" ">
                           <div class="card-body">
                               <img src="" style="width:30%">
                               <h2 class="py-3"></h2>
                               <p></p>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-8 py-5 border">
                       <h4 class="pb-4">Account Details</h4>
                       <form action="" method="POST" name="form1">
                           <div class="form-row">
                               <?php
                                if(isset($_SESSION['Bloog_user'])){
                                ?>
                               <div class="form-group col-md-6">
                                 <input type="email" class="form-control" name="email" id="inputEmail4" readonly value = <?php echo $_SESSION['Bloog_user'];?>>
                               </div>

                               <?php
                               }
                               ?>
                             </div>
                              <div class="form-row">
                               <div class="form-group col-md-6">
                                   <input id="Mobile No." name="pass" placeholder='Enter Your current password' class="form-control" required="required" type="password">
                               </div>
                               <div class="form-group col-md-6">
                                   <input id="Mobile No." name="pass1" placeholder='Enter new password' class="form-control" required="required" type="password">
                               </div>
                               <div class="form-group col-md-6">
                                   <input id="Mobile No." name="pass2" placeholder='Confirm Your new password' class="form-control" required="required" type="password">
                               </div>
                               </div>
                           <div class="form-row">
                               <div class="form-group">
                                   <div class="form-group">

                                     </div>

                                 </div>
                           </div>

                           <div class="form-row">
                                 <button class="btn btn-primary" name="update" type="submit">Update</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </section><!--form section closed-->


    <?php

    if(isset($_POST['update']))
    {
      $email = $_POST['email'];
      
      $password = $_POST['pass'];
      $password_new = $_POST['pass1'];
      $password_confirm = $_POST['pass2'];
      

     $hash = "$2y$10$";
        $enc = "imakephpbettereachandeveryday";
        $hash_enc = $hash . $enc;
        
        $password = crypt($password,$hash_enc);


      
      $query= "SELECT * FROM user_detail WHERE  email = '$email' AND password = '$password'";
      $runmain= mysqli_query($connection,$query);
   
     if ( mysqli_num_rows( $runmain )==0 ) {
		    echo '<script>sweetAlert("Oops...", "current password did not matched!", "error");</script><meta http-equiv="refresh" content="5">';

	}
	else{
    if($password_new == $password_confirm){

        $hash = "$2y$10$";
        $enc = "imakephpbettereachandeveryday";
        $hash_enc = $hash . $enc;
        
        $password_confirm = crypt($password_confirm,$hash_enc);

        $query = "UPDATE user_detail SET password='$password_confirm' where email='$email'";
        $run = mysqli_query($connection,$query);
        

        if($run){
          echo '<script>sweetAlert("password has been updated!");window.location.href="index.php";</script><meta http-equiv="" content="5">';

          
          session_destroy();
          

        }else{
          echo '<script>sweetAlert("Oops...", "password do not match!", "error");</script><meta http-equiv="refresh" content="5">';
          
        }
      }
	}
	
	
      




    }
    
    ?>












<?php include "includes/footer.php";?>

































