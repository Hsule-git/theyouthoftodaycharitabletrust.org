<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span><a href="index.php"><img src="assets/images/logo2.png" alt="" class="img-fluid"></a></span>&nbsp;<span>Youth Of Today Charitable Trust</span></a></h1>
          
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <?php
            if(isset($_SESSION['Bloog_user'])){
            ?>
            <li class="drop-down" id="man_id7"><a  class="" href = ""><?php echo $_SESSION['Bloog_user'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <ul>
            <li><a href="user details.php" name = "getdata">Account settings</a></li>
            <a href="logout.php" class="" style="top:0;">Logout</a>
            </ul>
            </li>
            <?php
            }
            ?>






          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
</header><!-- End Header -->