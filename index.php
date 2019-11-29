<?php 
include 'db.php';
include 'config.php';
mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));
$sub_name = "";
$sub_email = "";
$message = "";
if(isset($_POST["subscribe"])){
    $sub_name    = stripslashes(trim($_POST['sub_name']));
    $sub_email    = stripslashes(trim($_POST['sub_email']));

    $sub_existing = $db->query("SELECT * FROM subscribers WHERE email ='$sub_email'");
    if ($sub_existing->num_rows == 0) {
        $query = 'INSERT INTO subscribers 
        VALUES (null, "'.$sub_name.'", "'.$sub_email.'")';
            
        if($db->query($query) == TRUE){
        $message = "Congratulations. You have subscribed to our news letter";

        }else{
        $message  = "Error adding to subscribers: Connection Error";
        // echo mysqli_error($db);
        }
    }else{
        $message= "Already subscribed";
    }

}

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>The Development Analyst</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
  <link href="css/mdb.min.css" rel="stylesheet">

	<!--Main-Stylesheets for the subscription popup-box-->
	<link rel="stylesheet" href="styles.css" />
    <!--<script src="onsubmit_event.js"></script>-->
	<link rel="stylesheet" href="styleslide.css" />

  

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style rel="stylesheet">
        .data{
            font-size: 13px;
            border-left: 1px solid grey;
        }
        .thead{
            font-size: 15px;
            border-left: 2px solid grey;
            border-radius: 5px;
            padding-bottom: 5px;
        }
       
        .leftborder{
            
        }
         .data-in{
            font-size: 13px;
        }

        /* * {
  box-sizing: border-box;
} */

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 10px;
  /* Should be removed. Only for demonstration */
}
.column-inner {
  float: right;
  width: 50%;
  padding: 10px;
  /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a{
    color: #ffffff;
}
.footer-text h4{
    color: #ffffff;
}
.footer-single h4{
    color: #ffffff;
}
    </style>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!--Preloader-->
    <!-- <div class="preloader">
        <div class="spinner"></div>
    </div> -->

	 <!-- Mainmenu-Area -->
    <nav class="navbar mainmenu-area" data-spy="affix" data-offset-top="197">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="search-box" class="collapse">
                        <form action="#">
                            <input type="search" class="form-control" placeholder="What do you want to know?">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="navbar-header smoth">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand"><img href="index.php#home-area" src="images/logoNew 1.jpg" alt="" width="150px" height="150px"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <!-- <li><a href=""><i class="icofont icofont-user-alt-4"></i></a></li> -->
                            <li><a href="#search-box" data-toggle="collapse"><i class="icofont icofont-search-alt-2"></i></a></li>
                            <li class="select-cuntry">
                                <select name="counter" id="counter">
                                    <option value="ENG">ENG</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li class="active"><a href="index.php#home-area">Home</a></li>
                            <li class="dropdown"><a>About</a>
                                <ul class="dropdown-content">
                                
                                    <li><a href="team.php#team-area" style="text-transform: none;">Who we are</a></li>
                                    <li><a href="about.php#about-area" style="text-transform: none;">What we do</a></li>
                                    <li><a href="#footer-area" style="text-transform: none;">Where we are</a></li>
                                    <li><a href="profile.php#profile-area" style="text-transform: none;">Company Profile</a></li>
                                </ul></li>
                            <li><a href="projects.php#projects">Projects</a></li>
                            <li><a href="aid.php#aid-area">Analyst Aid</a></li>
                            <li class="dropdown"><a>Services</a>
                                <ul class="dropdown-content">
                                    <li><a href="hosting.php#service-area" style="text-transform: none;">Web Hosting</a></li>
                                    <li><a href="trainings.php#service-area" style="text-transform: none;">Training</a></li>
                                    <li><a href="stratcomm.php#service-area" style="text-transform: none;">Communication</a></li>
                                    <li><a href="public.php#service-area" style="text-transform: none;">Public Relations</a></li>
                                    <li><a href="services.php#service-area" style="text-transform: none;">Other services</a></li>
                                    <li><a href="agribusiness.php#service-area" style="text-transform: none;">Agribusiness</a></li>
                                </ul></li>
                            <li><a href="publish.php">Publications</a></li>
                            <li><a href="contact.php#contact-area">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area-/ -->




    <!--Header-Area-->
    <header class="header-area overlay" id="home-area">
    
        <div class="vcenter">
            <div class="container">
                <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8"><br /><br /><br /><br />
                        <div class="header-text">
                            <h2 class="header-title wow fadeInUp upper" style="font-size:29px">Strategic Communications &amp; inovative management for an unpredictable world<span class="dot"></span></h2>
                            <!-- <div class="wow fadeInUp" data-wow-delay="0.5s"><q style="font-size:25px"></q></div> -->
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <a href="contact.php#contact-area" class="bttn bttn-sm bttn-primary">Contact Now</a>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
	</div>
    </header>
    <!--Header-Area-/-->


    <!-- About-Area -->
    <section class="section-padding" id="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="page-title">
                        <h2 class="title wow fadeInUp text-center" style="font-size:20px"><strong>THE DEVELOPMENT ANALYST LTD INTERNATIONAL</strong></h2>
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p style="color:#0d0d0d">Is a leading Strategic Management, Governance, Development Communications, Public Relations and Marketing  and Monitoring and Evaluation consultancy firm in the region. <br> <br>We have offices in Uganda, Kenya, South Sudan and Rwanda, with a reputation for delivering quality ‘alternative’ marketing solutions to clients in Government, the Private and NGO sectors.</p>
                        </div>
                    
                    <div class="wow fadeInUp" data-wow-delay="0.7s">
                        <a href="about.php#service-area" class="bttn bttn-primary bttn-sm ">Learn More</a>
                    </div></div>
                </div>
                <!--START SLIDER -->
             <div class="hidden-xs col-sm-6 col-md-8">
                <div  class="row" style="width:95%; height:95%;">

                                                    <!-- <div id="wrapper"> -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item img-rounded active">
                          <img src="images/imgn10_i.jpg" class="img-rounded" alt="Chania">
                          <div class="carousel-caption">
                            <h3 style="color:ghostwhite;"><b>Northern Nigeria ( 2009-2011)</b></h3>
                            <p>The Communication campaigns conducted in NIGERIA to promote Routine Immunisation and polio eradication.</p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="images/imgn5_i.jpg" class="img-rounded" alt="Chicago">
                          <div class="carousel-caption">
                            <h3 style="color:ghostwhite;"><b>EAC Region</b></h3>
                            <p>Music/ Dace Recorded, Multiplied and demystified to reach millions in the region!</p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="images/comn stratgy_i.jpg" class="img-rounded" alt="New York">
                          <div class="carousel-caption">
                            <h3 style="color:ghostwhite;"><b>Communications Strategy </b></h3>
                            <p>Reviewing Short-term  Reforms Communications Strategy and its implementations</p>
                          </div>
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <a class="left carousel-control img-rounded" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control img-rounded" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    
                </div>
             </div>
             <!--END SLIDER -->
          </div>
        </div>


  <section class="section-padding gray-bg" style=" padding: 10px 0;" id="services">
        <div class="container">
            <div class="row" style=" padding: 0px;">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" >
                    <div class="page-title text-center">
                        <h2 class="title"style="color:#0d0d0d;font-size:20px" >Our Best Services</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/Stakeholder.jpg" class="img-rounded" alt="" height="600px">
                            <a href="stratcomm.php#service-area" class="box-plus">
                                <i class="icofont icofont-plus"></i>
                            </a>
                        </div>
                        <div class="box-text">
                            <h4>Strategic Communication</h4>
                            <p style="color:#0d0d0d;">We offer integrated advisory and consulting services to companies, institutions and governments, development partners. Providing our clients with strategic policies, operating processes and provide international advisory services  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/imgn8.png" class="img-rounded" alt="" height="600px">
                            <a href="public.php#service-area" class="box-plus">
                                <i class="icofont icofont-plus"></i>
                            </a>
                        </div>
                        <div class="box-text">
                            <h4>Public Relations Consultancy</h4>
                            <p style="color:#0d0d0d;">Public relations support services including training in development and implementation of communication strategy, public awareness campaigns and so much more. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/meeting.png" class="img-rounded" alt=""  height="600px">
                            <a href="trainings.php#service-area" class="box-plus">
                                <i class="icofont icofont-plus"></i>
                            </a>
                        </div>
                        <div class="box-text">
                            <h4>Capacity Building</h4>
                            <p style="color:#0d0d0d;">We have comprehensive experience in training and in know-how transference within the field of Organizational Development, Governance, Communication, Public Relations and Outreach Campaigns. </p> <!-- This background allows us to constantly perfect the working methods we use in workshops and seminars. -->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/webhost.jpg" class="img-rounded" alt=""  height="600px">
                            <a href="trainings.php#service-area" class="box-plus">
                                <i class="icofont icofont-plus"></i>
                            </a>
                        </div>
                        <div class="box-text">
                            <h4>Web-Development &amp; Hosting</h4>
                            <p style="color:#0d0d0d;">This ranges from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services.</p><br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    



  

   <div class="container cta-100 ">
        <div class="container">
                <br>
                            <div class="col-xs-4 col-md-4 col-lg-8 pull-left">
                                <div class="title">
                                    <span> <h2 class="title"style="color:#0d0d0d;font-size:20px" >LATEST NEWS.</h2></span>
                                  
                                </div>
                            </div>
                            <div class="col-xs-2 col-md-3 col-lg-3 pull-right">
                                <!-- <button type="button" class="btn big " ><h2 class="title"style="color:#0d0d0d;font-size:10px" >SEE ALL NEWS</h2></button>
                            </div> -->
                             <div class="wow fadeInUp" data-wow-delay="0.7s">
                        <a href="blog/posts.php" class="bttn bttn-primary bttn-sm ">SEE ALL NEWS</a>
                    </div>
                        </div>
             <div class="row">


          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">







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



                    <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <img  src="<?php echo $row['image'];?>" class="img-rounded" alt=""  height="490px" width="354px">
                            <!-- <a href="#" class="box-plus"> -->

                                <!-- <i class="icofont icofont-plus"> </i> -->
                            <!-- </a> -->
                        </div>
                        <div class="box-text">
                            <h4><?php echo $row['title'];?></h4>
                             <p><i class="icofont icofont-ui-calendar blog-list-meta"></i> <?php echo $row['date'];?></p>
                            <p style="color:#0d0d0d; width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" maxlength="10"><?php echo $row['message'];?></p>
                        <a href="blog/posts.php" class="read-more ">Read More</a>
                               </a> 
                        </div>
                    </div>
                </div>

 <!-- &amp; Hosting -->

                     
                        <?php   
                            }
                        }
                            ?>
                            




                    </div>
                    <!--.row-->
                    <br/><br/>
                     <div class="row">
                            <div class="col-xs-8 col-md-9 col-lg-10 tiny">
                                <div class="title">
                                     <div class="title">
                                    <h2 class="title"style="color:#0d0d0d;font-size:20px" > <span>Subscribe to our Weekly Job Newsletter and receive the latest</span>
                                    300 job opportunities.</h2>
                                  
                                </div>
                                    
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-3 col-lg-2 tiny">
                             <div class="wow fadeInUp" data-wow-delay="0.7s">
                        <a data-toggle="modal" data-target="#exampleModal"  data-whatever="@mdo" href="#" class="bttn bttn-primary bttn-sm ">Subscribe Now</a>
                        <!-- DATA MODAL-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel"><b>Subscribe to Our news letter</b>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="index.php">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" name="sub_name" class="form-control" id="recipient-name" required>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Email:</label>
                <input type="email" name="sub_email" class="form-control" id="recipient-email" required>
              </div>
                <!-- <input type="submit" class="form-control" value="Send message" id="recipient-name"> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <!-- <button></button>  -->
            <!-- <button type="button" class="btn btn-primary">Send message</button> -->
            <button type="submit" name="subscribe" class="btn btn-primary">Subscribe</button>
          </div>
         </form>
         <!-- <script> alert('<?php //echo $message; ?>')</script> -->
        </div>
      </div>
    </div>
                        <!-- END MODAL -->
                    </div>

                                <!-- <button type="button" class="btn big " ></button> -->
                            </div>
                        </div>

                  </div>
                
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
      </div>
   



    </section>
    <!-- About-Area / -->

  

    <!-- Skill-Area -->
     <section class="section-padding" id="skill-area" style="margin-down:0px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Our Working Process</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row process text-center">
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-process">
                        <div class="process-icon">
                            <i class="icofont icofont-pie"></i>
                        </div>
                        <h3>Research</h3>
                       
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-process">
                        <div class="process-icon">
                            <i class="icofont icofont-users-alt-1"></i>
                        </div>
                        <h3>Planning</h3>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-process">
                        <div class="process-icon">
                            <i class="icofont icofont-brainstorming"></i>
                        </div>
                        <h3>Strategy Development</h3>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-process">
                        <div class="process-icon">
                            <i class="icofont icofont-settings-alt"></i>
                        </div>
                        <h3>Execution</h3>
                        
                    </div>
                </div>

                   <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-process">
                        <div class="process-icon">
                            <i class="icofont icofont-settings-alt"></i>
                        </div>
                        <h3>Monitoring and Evaluation</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skill-Area / -->
   
   
    <!-- Contact-Area / -->
     <div class="section-padding">
     <div class="container">
                <div class="row"><br/> </div>
     </div>
     </div> 


    <!-- Footer-Area -->
    <footer class="footer-area" id="footer-area">
        <div class="footer-top section-padding footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="footer-text" >
                            <h4 class="upper" align="center">The Development Analyst</h4>
                            <p align="center">P.O Box 26162,<br /> Block 28, Plot 951/952 Bombo Road, Opposite Kubiri Round-About <br/> (Former URA Building Lvl 3)<br/> Kampala, Uganda<br/>
                               Tel:<br /> +256-776 895 620<br /> +256-754 896 405<br /> +256-756 528 176<br />
                                Email: info@devanalyst.org</p>
                            <div class="social-menu">
                                <a href="https://www.facebook.com/thedevelopmentanalyst/"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 col-md-offset-1">
                        <div class="footer-single">
                            <h4 class="upper">News</h4>
                            <ul>
                                <li><a href="team.php#team-area">Team</a></li>
                                <li><a href="about.php#projects">Completed Projects</a></li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Company</h4>
                            <ul>
                                
                                <li><a href="about.php#about-area">About</a></li>
                                <li><a href="index.php#services">Services</a></li>
                                <li><a href="#">Development Aid</a></li>
                                <!-- <li><a href="#">Price</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Resources</h4>
                            <ul>
                                <li><a href="contact.php#contact-area">Support</a></li>
                                <li><a href="contact.php#contact-area">Contact</a></li>
                                <!-- <li><a href="#">Privacy &amp; Term</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Services</h4>
                            <ul>
                                <li><a href="trainings.php#service-area">Trainings</a></li>
                                <li><a href="stratcomm.php#service-area">Strategic Communication</a></li>
                                <li><a href="hosting.php#service-area">Web Development &amp; Hosting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Devanalyst.</p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-Area / -->

    <!--Subscription popup form-->
	<div style="margin: auto;width: 60%;">
	
    <div id="list-builder"></div>
    <div id="popup-box">
       <img src="close.svg" id="popup-close" />
       <div id="popup-box-content">
        <h1>Subscribe to The DevAnalyst Newsletter</h1>
           <p>
               Stay up to date on the latest in web, mobile development, plus receive exclusive content by
               subscribing to our newsletter.
           </p>
<form id="fupForm" action="save.php" name="form1" method="post">
   <div class="form-group">
     <!-- <label for="name">Name:</label> -->
       <input type="text" class="form-control" id="name" placeholder="Name" name="name">
   </div>
   <div class="form-group">
       <!-- <label for="email">Email:</label>  -->
       <input type="email" class="form-control" id="email" placeholder="Email" name="email">
   </div>
   
   <input type="button" name="save" class="bttn bttn-sm bttn-primary" value="Subscribe" id="butsave">
</form>
  </div>
</div> 

      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--Vendor-JS-->
    <script src="/js/bootstrap.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bars.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/easypiechart.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script>
    <script src="js/maps.js"></script>

    <!--Subsciption popup JS-->
	<script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/list-builder1.js"></script>
</body>

</html>