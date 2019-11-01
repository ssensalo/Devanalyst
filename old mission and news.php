
        <!-- New Row -->
           <div class="row">
            <div class="col-lg-8">
            <div class="section-padding  ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-5">
                            
                                <div class="blog-box">
                                <div class="blog-image">
                                    
                                    <div class="video-box">
                                    <img src="images/conf2.jpg" class="img-rounded" alt="">
                                <a href="https://www.youtube.com/watch?v=xlUbOVcZrHM" class="video-bttn"><img src="images/video-button.png" alt=""></a>
                            </div>
                                </div>
                                <div class="blog-details">
                                    <h4 ><a href="#">Business Consultance Meetup and Trainings</a></h4>
                                    <p >We organize briefings and trainings for the interviewers of all projects as these meetings provide better understanding and quality standards compliance. <br> <br>We conduct trainings, abroad study programs and technical support in various fields in conjunction with institutes within and outside Africa</p>
                                </div>
                            </div>
                        
                        </div>

                        <div class="col-xs-12 col-lg-4  wow fadeInUp">
                         <div class="page-title text-center">
                                
                                <ul class="tabs-list-2">
                                    <li class="active"><a data-toggle="pill" href="#our_mission" style="color:#0d0d0d">Mission</a></li>
                                    <li><a data-toggle="pill" href="#our_vission" style="color:#0d0d0d">Vision</a></li>
                                    <li><a data-toggle="pill" href="#our_support" style="color:#0d0d0d">Support</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="our_mission" class="tab-pane fade in active">
                                
                                    <p><q><em style="color:#0d0d0d">To Achieve an outstanding customer satisfaction.</em></q></p>
                                    <p style="color:#0d0d0d">Our cross functional approach allows us to understand issues from multiple angles and thereby enables us to create innovative marketing and events solutions for your business.</p>
                                   
                                </div>
                                <div id="our_vission" class="tab-pane fade">
                                   
                                    <p><q><em style="color:#0d0d0d" >To be the preferred One-Stop Shop provider for  Strategic, Development Communication, Public Relations, Marketing Communication, Management and Monitoring and Evaluation  Solutions.</em></q></p>
                                    <p style="color:#0d0d0d" >Through Setting Yardstick for Growth. </p>
                                    <!-- Left-aligned -->
                                    
                                </div>
                                <div id="our_support" class="tab-pane fade">
                                   
                                    <p><q><em style="color:#0d0d0d">We focus on sectors like: Good  Governance & democracy, Institutional Development, Capacity building, Strategic and Development Communication, Organizational Assessment and Development, Governance, Political Monitoring,  and  Resource mobilization. </em></q></p>
                                    <p style="color:#0d0d0d">We provide our clients with strategic policies and operating processes and provide international advisory services. </p>
                                    <!-- Left-aligned -->
                                    <!-- <div class="media">
                                        <div class="media-left">
                                            <img src="images/testimonial-2.png" class="media-object">
                                        </div>
                                        <div class="media-right media-middle">
                                            <h5 class="media-heading satisfy">John Doe</h5>
                                            <h6>ceo of Classic.</h6>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
        <div class="col-lg-4 gray-bg" style="margin-top:35px; float:right" >
        
            
                
                
        <div id=blog-area>
        <h4 style="margin-down:30px;" class="text-center">Latest News</h4>
        </div>
                        <?php
                        error_reporting(E_ERROR);


                        include 'db.php';
                        include 'config.php';
                        mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));

                        $query1 = 'SELECT *  FROM  blog  ORDER BY blog_id DESC limit 3';


                        $result = mysqli_query($db, $query1);

                        if($result){
                            while($row=mysqli_fetch_array($result)){
                                
                            ?>
                            
                            <div class="blog-lists">
                                    <div class="blog-list wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="blog-list-image">
                                            <img src="<?php echo $row['image'];?>" class="img-rounded" alt="">
                                        </div>
                                        <h5 ><a href="#" style="color:#0d0d0d;"><?php echo $row['title'];?> <i class="icofont icofont-ui-calendar blog-list-meta"></i> <?php echo $row['date'];?></a></h5>
                                        <div class=""> </div>
                                        <p style="color:#0d0d0d;"><?php echo $row['message'];?></p>
                                    </div>
                                
                                </div>
                        <?php	
                            }
                        }
                            ?>
                            
                        
                    

        </div>	
        </div>