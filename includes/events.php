 <!-- ======= Event Section ======= -->
 <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Events</h2>
          <p>A single act of kindness is like a drop of oil on a patch of dry skin—seeping, spreading, and affecting more than the original need.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
              <li data-filter="*" class="filter-app">All</li>
             
              <li data-filter=".filter-card">Past Events</li>
              <li data-filter=".filter-web">Future Events</li>
             
            </ul>
           
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php

        // Taking data from blog and displaying at front end

                            if(isset($_POST['ok']))
                            {

                                $query="SELECT * FROM `blog`";
                                $run= mysqli_query($connection,$query);

                                while($row=$run->fetch_assoc())
                                {
                                    extract($row);
                                }

                            }else{
                                $query="SELECT * FROM `blog`";
                                $run= mysqli_query($connection,$query);
                                                            
                                while($row=$run->fetch_assoc())
                            {
                                extract($row);
                                ?>





          <div class="col-lg-6 col-md-4 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="admin/upload/<?php echo $Image;?>" class="img-fluid"  alt="">
              <div class="portfolio-info">
                <h4><p> <a href="blog-detail.php?data=<?php echo $id?>"><?php echo $title;?></a></p></h4>
                <p><span class="td-post-author-name1"><a href="#"><?php echo $Author;?></a></span></p>
                <p><time class="td-module-date">
                                            <?php
	                                        $data_date=strtotime($Date);
	                                        echo date('M d,Y',$data_date);
	                                        ?>

                                    </time></p>
                <div class="portfolio-links">
                  <a href="admin/upload/<?php echo $Image;?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="blog-detail.php?data=<?php echo $id?>" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
        }
      ?>

<?php

// Taking data from pastevents and displaying on front end

                        if(isset($_POST['ok']))
                        {

                        $query="SELECT * FROM `pastevents`";
                        $run=mysqli_query($connection,$query);

                        while($row=$run->fetch_assoc())
                        {
                            extract($row);
                        }

                    }else{
                        $query="SELECT * FROM `pastevents`";
                        $run= mysqli_query($connection,$query);
                                                    
                        while($row=$run->fetch_assoc())
                    {
                        extract($row);
                        ?>
                        
          <div class="col-lg-6 col-md-4 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="admin/pastevents/<?php echo $Image;?>" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4><p> <a href="past-events.php?data=<?php echo $id?>"><?php echo $title;?></a></p></h4>
                <p><span class="td-post-author-name1"><a href="#"><?php echo $Author;?></a></span></p>
                <p><time class="td-module-date">
                                            <?php
	                                        $data_date=strtotime($Date);
	                                        echo date('M d,Y',$data_date);
	                                        ?>

                                    </time></p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="past-events.php?data=<?php echo $id?> title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <?php
          
        }
      
      }
      
      ?>



<?php

// Taking data from future events and displaying on front end

                            if(isset($_POST['ok']))
                            {

                                $query="SELECT * FROM `futureevents`";
                                $run= mysqli_query($connection,$query);

                                while($row=$run->fetch_assoc())
                                {
                                    extract($row);
                                }

                            }else{
                                $query="SELECT * FROM `futureevents`";
                                $run=mysqli_query($connection,$query);
                                                            
                                while($row=$run->fetch_assoc())
                            {
                                extract($row);
                                ?>








       <div class="col-lg-6 col-md-4 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="admin/futureevents/<?php echo $Image;?>" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4><p> <a href="future-events.php?data=<?php echo $id?>"><?php echo $title;?></a></p></h4>
                <p><span class="td-post-author-name1"><a href="#"><?php echo $Author;?></a></span></p>
                <p><time class="td-module-date">
                                            <?php
	                                        $data_date=strtotime($Date);
	                                        echo date('M d,Y',$data_date);
	                                        ?>

                                    </time></p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="future-events.php?data=<?php echo $id?> title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


<?php

                            }
                          }

                          ?>






























      
      </div>
      
        



       
      </div>
     
    </section><!-- End Event Section -->