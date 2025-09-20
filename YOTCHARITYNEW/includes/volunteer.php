<section class="section" id="getinvolved"><!--get involved section-->

         <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px"> </div>

         <div class="container">

           <div class="row">

             <div class="col-md-2 text-center"></div>

             <div class="col-md-8 text-center">

       <h1 class="banner-inner" data-aos="fade-left" data-os-animation-delay="0s" style="color: #1c1c1c;">Volunteer with us</h1>

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
                               <img src="assets/images/volunteer.jpg" style="width:30%">
                               <h2 class="py-3">Registration</h2>
                               <p>Volunteers dont get paid,not because they are worthless,but because they are priceless</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-8 py-5 border">
                       <h4 class="pb-4">Please fill with your details</h4>
                       <form action="" method="POST" >
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                 <input id="Full Name" name="name" placeholder="Full Name" class="form-control" type="text">
                               </div>
                               <div class="form-group col-md-6">
                                 <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                               </div>
                             </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <input id="Mobile No." name="title" placeholder="Mobile No." class="form-control" required="required" type="text">
                               </div>

                               <div class="form-group col-md-12">
                                         <textarea id="comment" name="message" placeholder="Let us know if you have any specific field to volunteer" cols="40" rows="5" class="form-control"></textarea>
                               </div>
                           </div>
                           <div class="form-row">
                               <div class="form-group">
                                   <div class="form-group">

                                     </div>

                                 </div>
                           </div>

                           <div class="form-row">
                                 <button class="btn btn-primary" name="action1" type="submit">Submit</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </section><!--form section closed-->

    <?php

    if(isset($_POST['action1']))
    {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $title = $_POST['title'];
      $message = $_POST['message'];
      $query="INSERT INTO `write_for`(`name`, `email`, `title`, `message`) VALUES ('$name','$email','$title','$message')";
      $run= mysqli_query($connection,$query);
      
      if($run){
        echo '<script> swal("Thanks !", "Your Details Has Been Submitted Successfully....", "success");</script><meta http-equiv="refresh" content="5">';
      }else{
        echo '<script>sweetAlert("Oops...", "Something went wrong!", "error");</script><meta http-equiv="refresh" content="5">';
      }
    }
    
    ?>