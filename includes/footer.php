<!-- ======= Footer ======= -->
<footer id="footer"data-aos="fade-up">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Youth of Today Charitable Trust</h3>
          <p>
            Mumbai <br><br>
            <strong>Phone:</strong>+919004813842<br>
            <strong>Email:</strong>youthoftoday.foun@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Navigations</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#donate">Donate Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Events</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Past Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Future Events</a></li>
            </ul>
          </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>JOIN OUR Event Alerts</h4>
          <p>Subscribe to our Events to Stay Updated</p>
          <form action="" method="post">
            <input type="email" name="email" placeholder="type your email" ><input type="submit" name="action" value="Subscribe">
          </form>
        </div>

        <?php
									if(isset($_POST['action']))
									{

                    $email = $_POST['email'];



										$query="INSERT INTO `subscriber`(`email`) VALUES ('$email')";
										$run= mysqli_query($connection,$query);
										if($run)
										{
												echo '<script> swal("Thanks !", "For Subscribing..", "success");</script><meta http-equiv="refresh" content="5">';
										}
										else
										{
												echo '<script>sweetAlert("Oops...", "Email Already Exist!", "error");</script><meta http-equiv="refresh" content="5">';

										}
									}




									?>







      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>Youth of Today Charitable Trust</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
        Designed by <a> ICT Team 1</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="https://twitter.com/YouthOfTodayWe1/status/1336271085780807682?s=19" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="https://www.facebook.com/youthoftoday10/" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="https://youtube.com/channel/UCBaPxzFe-131TsSFN1Bx1xA" class="youtube"><i class="bx bxl-youtube"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->
















<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="assets/js/theme.min.js"></script>

    <script src="assets/js/revolution.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>





</body>

</html>







</body>

</html>
<?php include "LLong.php";?>
