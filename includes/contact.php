<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <div class="section-title">
            <h2>Contact</h2>
            <p>It's not how much we give but how much love we put into giving.</p>
            <img src="assets/images/children2.jpg"style="border:0;width:100%; height:270px;">
            <img src="assets/images/animalshelp.jpg"style="border:0;width:100%; height:270px;">
            <img src="assets/images/saniterypads.jpg"style="border:0;width:100%; height:300px;">
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0852766857156!2d153.02722321410218!3d-27.46660438289218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a1d064dcb2f%3A0x7f3aed61f0bfd9e3!2sJames+Cook+University%2C+Brisbane+Campus!5e0!3m2!1sen!2sau!4v1559366568485!5m2!1sen!2sauhttps://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0852766857156!2d153.02722321410218!3d-27.46660438289218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a1d064dcb2f%3A0x7f3aed61f0bfd9e3!2sJames+Cook+University%2C+Brisbane+Campus!5e0!3m2!1sen!2sau!4v1559366568485!5m2!1sen!2sau" frameborder="0" allowfullscreen></iframe>
          <div class="info mt-4">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>Mumbai</p>
          </div>
          <div class="row">
            <div class="col-lg-6 mt-4">
              <div class="info">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>youthoftoday.foun@gmail.com</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info w-100 mt-4">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+919004813842</p>
              </div>
            </div>
          </div>
          <form  action="" method="POST" role="form" class="" >
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group form-icon-group"> <i class="fa fa-user"></i>

                      <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required>

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group form-icon-group"> <i class="fa fa-envelope"></i>

                      <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required>

                    </div>

                  </div>

                </div>

				<div class="row">

                  <div class="col-md-6">

                    <div class="form-group form-icon-group"> <i class="fa fa-phone"></i>

                      <input class="form-control" id="phone" name="phone" placeholder="Your Contact No. *" type="text" required>

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group form-icon-group"></i>

                      <input class="form-control" id="Subject" name="Subject" placeholder="Your Subject *" type="text" required>

                    </div>

                  </div>

                </div>

                <div class="form-group form-icon-group"> <i class="fa fa-pencil"></i>

                  <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required></textarea>

                </div>

                <div class="text-center">

                  <input type="submit" value="Send Message" name="action2" class="btn btn-primary">

                </div>

                <div class="messages text-center"></div>

              </form>

              <?php
									if(isset($_POST['action2']))
									{
										extract($_POST);
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $subject = $_POST['subject'];
                    $contenting = $_POST['message'];

										

										$query="INSERT INTO `contact`(`name`, `email`, `phone`, `subject`, `message`) VALUES('$name','$email','$phone','$Subject','$contenting')";
										$run= mysqli_query($connection,$query);
										if($run)
										{
										echo '<script> swal("Thanks For your Message!....",);</script><meta http-equiv="refresh" content="1">';
										}
										else
										{
                      echo '<script>sweetAlert("Oops...", "Something went wrong!", "error");</script><meta http-equiv="refresh" content="1">';

										}
									}
                  ?>


                </div>
      </div>

    </div>
</section><!-- End Contact Section -->