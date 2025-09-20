<?php include "includes/header.php";?>

<body>

 <?php include "includes/navigation2.php";?>

 <br>
 <br>
 
 <section id="charity3" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Check on our Events.</h1>
      <h2>Welcome to our family</h2>
      
    </div>
  </section><!-- End charity3 -->

  <?php
      		if(!empty($_GET['data']))
      		{
      		$adaa=$_GET['data'];


      		$query="SELECT * FROM `futureevents` Where id='$adaa'" ;
      		$run= mysqli_query($connection,$query);
      		$row=$run->fetch_assoc();
            extract($row);

            }
        ?>

<section><!---eventphotos and blogs-->

<div class="container">
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<img class="media-object"src="admin/futureevents/<?= $Image;?>" width = "400" height = "300">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading"><?php echo $title?></h4>
          <p class="text-right">By<?php echo $Author?></p>
          <p><?php echo $Content?></p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i><?php
	                                        $data_date=strtotime($Date);
	                                        echo date('M d,Y',$data_date);
	                                        ?></span></li>
           
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
         
       </div>
    </div>
  </div>
   
   </section><!---section events end-->

   <section>

   <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="d-flex flex-column col-md-8">
            <div class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">
                <div class="profile-image"><img class="rounded-circle" src="admin/futureevents/<?= $Image;?>" width="70"></div>
                <div class="d-flex flex-column-reverse flex-grow-0 align-items-center votings ml-1"></div>
                <div class="d-flex flex-column ml-3">
                    <div class="d-flex flex-row post-title">
                        
                    </div>
                    <div class="d-flex flex-row align-items-center align-content-center post-title"><span class="bdge mr-1">Comments</span></div>
                </div>
            </div>
            <div class="coment-bottom bg-white p-2 px-4">
                <div class="d-flex flex-row add-comment-section mt-4 mb-4"><img class="img-fluid img-responsive rounded-circle mr-2" src="admin/futureevents/<?= $Image;?>" width="38"><input type="text" class="form-control mr-3" placeholder="Add comment">
                
                
                <?php if(isset($_SESSION['bloog_user']))
                
                {?>
                <button class="btn btn-primary" type="submit" name = "submit">Comment</button>
                <?php  }else
                
                {?>
                <button class="btn trigger_popup_fricc" type="button" name = "submit">Comment</button>


                <?php
                }
                ?>
                </div>

                <?php
                $com_quer="SELECT * FROM `comment` Where ses_id='".$_GET['data']."'";
                $com_ran=mysqli_query($connection,$com_quer);
                while($com_row=$com_ran->fetch_assoc())
                {
                  ?>



                <div class="commented-section mt-2">
                    <div class="d-flex flex-row align-items-center commented-user">
                        <h5 class="mr-2"><?php echo $com_row['user_email'];?></h5><span class="dot mb-1"></span>
                    </div>
                    <div class="comment-text-sm"><span><?php echo  $com_row['content'];?> </span></div>
                    <div class="reply-section">
                        <div class="d-flex flex-row align-items-center voting-icons"><span class="ml-2">
                            <h6 class="ml-2 mt-1"></h6>
                        </div>
                    </div>
                </div>
                <?php }?>
                
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



   
  </section>















 

     




<?php
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




</body>


<?php include "includes/footer.php";?>



















