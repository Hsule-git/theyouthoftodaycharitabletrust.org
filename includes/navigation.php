<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span><a href="index.php"><img src="assets/images/logo2.png" alt="" class="img-fluid"></a></span>&nbsp;<span>Youth Of Today Charitable &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trust</span></a></h1>
          
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#donate">  Donate US</a></li>
            <li class="drop-down"><a href="#portfolio">Events</a>
              <ul>
                <li><a href="#portfolio">Past Events</a></li>
                <li><a href="#portfolio">Future Events</a>

              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            <li class="get-started"><a href="#getinvolved">Get Involved</a></li>

            
            <?php
            if(isset($_SESSION['Bloog_user'])){
            ?>
            <li class="drop-down"  id="man_id7"><a  style="text-transform: none;" href = ""><?php echo $_SESSION['Bloog_user'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <ul>

            <?php

            $query = " SELECT * FROM user_detail";
            $result = mysqli_query($connection,$query);

            $row = mysqli_fetch_assoc($result);

            $user_id = $row['id'];
            ?>
            
            
            <li><a href="user details.php" name = "getdata">Account settings</a></li>
            <a href="logout.php" class="" style="top:0;">Logout</a>
            </ul>
            </li>
            <?php
            }else{
            ?>
            <li class="active"><a class="trigger_popup_fricc">Login</a></li>
            <?php
            }

            ?>






          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
</header><!-- End Header -->