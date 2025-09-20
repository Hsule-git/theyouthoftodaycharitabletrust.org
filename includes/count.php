





<section id="counts" class="counts">
    <div class="container">
        <div class="row counters">
            <div class="col-md-2">
                <div class="counter">


                            <?php
                            $query_comment1="SELECT * FROM `blog`";
                            $run_coment1=mysqli_query($connection,$query_comment1);
                            $count_comment1=$run_coment1->num_rows;
                            ?>

                    <h2 class="timer count-title count-number"data-toggle="counter-up" data-to="<?php echo $count_comment1;?>" data-speed="100"></h2>
                    <p class="count-text ">Events</p>
                  </div>
              </div>
              <div class="col-md-2">
                <div class="counter">


                            <?php
                            $query_comment1="SELECT * FROM `futureevents`";
                            $run_coment1=mysqli_query($connection,$query_comment1);
                            $count_comment1=$run_coment1->num_rows;
                            ?>

                    <h2 class="timer count-title count-number"data-toggle="counter-up" data-to="<?php echo $count_comment1;?>" data-speed="100"></h2>
                    <p class="count-text ">Future Events</p>
                  </div>
              </div>

              <div class="col-md-2">
                <div class="counter">


                            <?php
                            $query_comment1="SELECT * FROM `pastevents`";
                            $run_coment1=mysqli_query($connection,$query_comment1);
                            $count_comment1=$run_coment1->num_rows;
                            ?>

                    <h2 class="timer count-title count-number"data-toggle="counter-up" data-to="<?php echo $count_comment1;?>" data-speed="100"></h2>
                    <p class="count-text ">Past Events</p>
                  </div>
              </div>

              

            <div class="col-md-2">
              <div class="counter">
	                          <?php
	                          $query_comment="SELECT * FROM `comment`";
	                          $run_coment=mysqli_query($connection,$query_comment);
	                          $count_comment=$run_coment->num_rows;
                            ?>


                            <h2 class="timer count-title count-number"data-toggle="counter-up" data-to="<?php echo $count_comment;?>" data-speed="1500"></h2>
                            <p class="count-text ">Total Comments</p>
                  </div>
              </div>

            <div class="col-md-2">
              <div class="counter">







                <h2 class="timer count-title count-number"data-toggle="counter-up" data-to="1" data-speed="1500"></h2>
                <p class="count-text ">Total Likes</p>
              </div>
	          </div>
        </div>
      </div>
</section>