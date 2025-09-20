

<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-hed">
                <div class="section-title" data-aos="fade-left">
                    <h2>Events</h2>
                    <h3><p>A single act of kindness is like a drop of oil on a patch of dry skin—seeping, spreading, and affecting more than the original need.</p></h3>
                    <br>
                    
                    <div class="blg-section-service"data-aos="fade-right">
                        <div class="col-md-12">

                        <?php

                            if(isset($_POST['ok']))
                            {

                                $query="SELECT * FROM `blog`";
                                $run=$db->select($query);

                                while($row=$run->fetch_assoc())
                                {
                                    extract($row);
                                }

                            }else{
                                $query="SELECT * FROM `blog`";
                                $run=$db->select($query);
                                                            
                                while($row=$run->fetch_assoc())
                            {
                                extract($row);
                                ?>

                            <div class="col-md-8">
                                <div class="blg-section">

                                    <a href="blog-detail.php?data=<?php echo $id;?>">
                                    <img src="admin/upload/<?php echo $Image;?>" alt="" class="img-fluid">
                                    <h3><p> <a href="blog-detail.php?data=<?php echo $id?>"><?php echo $title;?></a></p></h3>
                                    <br>
                                    <h6><span class="slide-meta-author">
                                    <span class="td-post-author-name1"><a href="#"><?php echo $Author;?></a></span>
                                    <span class="span-dash">-</span> 
                                    <span class="td-post-date">
                                    <time class="td-module-date">
                                            <?php
	                                        $data_date=strtotime($Date);
	                                        echo date('M d,Y',$data_date);
	                                        ?>

                                    </time>

                                   
                                    </span>
                                    <span class="span-space"></span>
                                    <span class="td-slide-comments1"><i class="fa fa-comment" style="font-size:16px"></i><a href="#">

                                    <?php
                                    $com_quer="SELECT * FROM `comment` Where ses_id='$id'";
                                    $com_ran=$db->select($com_quer);
                                    echo $_data=$com_ran->num_rows;
                                    ?>
                                    </a></span>
                                    <span class="td-slide-comments1"><i class="fa fa-thumbs-up" style="font-size:16px" ></i><a href="#"></span>
                                     </span>
                                     </h6>
                                     </a>
  

                                
                                
                                
                                
                                
                                
                                </div>
                            
                            
                            
                            
                            
                            
                            
                            </div>
























                             <?php

                            }
                        }
                            ?>


                        
                        
                        
                        
                        
                        
                        
                        
                        
                        </div>


                    
                    </div>





                </div>
                


            </div>



        </div>
    </div>











</section>



