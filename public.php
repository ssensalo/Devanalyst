<?php
error_reporting(0);
$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data
include 'db.php';
include 'config.php';
mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));






if($_POST['blog']) {
    $blogTitle    = stripslashes(trim($_POST['blogTitle']));
    $date   = $_POST['date'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $thumbnails = "uploads/" . $_FILES["image"]["name"];
    $message = stripslashes(trim($_POST['message']));
    if (empty($blogTitle)) {
        $errors['blogTitle'] = 'BlogTitle is required.';
    }
    if (empty($date)) {
        $errors['email'] = 'Date  is required.';
    }
    if (empty($message)) {
        $errors['message'] = 'message is required.';
    }
    if (empty($image)) {
        $errors['image'] = 'image is required.';
    }
    // if there are any errors in our errors array, return a success boolean or false
    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
		$query2 = 'SELECT *  FROM  blog  where message="'.$message.'" AND date="'.$date.'" AND title="'.$blogTitle.'" AND image ="'.$thumbnails.'"';


$result = mysqli_query($db, $query2);

if($result){
}else{

$query = 'INSERT INTO blog 
            VALUES (0,"'.$message.'", "'.$blogTitle.'","'.$date.'", "'.$thumbnails.'" )';
					  


if($db->query($query) == TRUE){
	 	 $data['success'] = true;
        $data['message'] = 'Congratulations. Your message has been sent successfully';

	 }else{
	 	 $data['success'] = false;
		 $data['errors']  = "error in inserting in the db";
	 	//echo mysqli_error($db);
	 }
        
} 
    }
    // return all our data to an AJAX call
    //echo json_encode($data);
}

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="nicholas">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>DEV Analyst LTD</title>
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

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

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
    <div class="preloader">
        <div class="spinner"></div>
    </div>

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
                        <a class="navbar-brand" href="index.php#home-area"><img src="images/logoNew 1.jpg" alt="" width="150px" height="150px"></a>
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
                            <li><a href="index.php#home-area">Home</a></li>
                            <li class="dropdown"><a>About</a>
                                <ul class="dropdown-content">
                                
                                    <li><a href="team.php#team-area" style="text-transform: none;">Who we are</a></li>
                                    <li><a href="about.php#about-area" style="text-transform: none;">What we do</a></li>
                                    <li><a href="#footer-area" style="text-transform: none;">Where we are</a></li>
                                    <li><a href="profile.php#profile-area" style="text-transform: none;">Company Profile</a></li>
                                </ul></li>
                            <li><a href="projects.php#projects">Projects</a></li>
                            <li><a href="aid.php#aid-area">Analyst Aid</a></li>
                            <li class="dropdown active"><a>Services</a>
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
                            <h2 class="header-title wow fadeInUp upper" style="font-size:29px">Strategic Communications &amp; inovative management for an unpredictable<em style="color:#ff7605;"></em> world<span class="dot"></span></h2>
                            <!-- <div class="wow fadeInUp" data-wow-delay="0.5s"><q style="font-size:25px"></q></div> -->
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <a href="contact.php#contact-area" class="bttn bttn-sm bttn-primary">Contact Now</a>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
    </header>
    <!--Header-Area-/-->

  <!-- Blog-area -->
    <section class="section-padding" id="about-area">
        <div class="container">
            
            <!-- Services Area -->


    <!-- Portfolio-Area -->
    <section class="section-padding gray-bg" id="portfolio-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="page-title text-center">
                        <h2 style="font-size:25px" class="title">Portfolio Project</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- Mixitup controls -->
                    <ul class="filter-controls text-center">
                        <li class="active filter" data-filter="all">All</li>
                        <li class="active filter" data-filter=".graphics">Consultancy</li>
                        <li class="filter" data-filter=".ux_ui">Capacitating</li>
                        <li class="filter" data-filter=".web_design">Technical Assistance</li>
                        <li class="filter" data-filter=".coding">Institutional Strengthening</li>
                        <!-- <li class="filter" data-filter=".developing">Developing</li>
                        <li class="filter" data-filter=".photography">Photography</li> -->
                    </ul>
                </div>
            </div>
 <div class="row" id="filtering">
                <div class="col-xs-6 col-sm-4 col-md-3 mix graphics developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="images/imgn8.png" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Capacitating</h5>
                            <a href="images/conf2.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix ux_ui ">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="images/imgn3.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Training Services</h5>
                            <a href="images/imgq2.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix graphics ">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="images/imgn7.png" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Evaluation</h5>
                            <a href="images/img6.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix ux_ui developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="images/imgn9.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Consulting</h5>
                            <a href="images/img4.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix web_design photography">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="images/img7.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Training</h5>
                            <a href="images/imgq4.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix coding">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="images/imgn6.png" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Capacitating</h5>
                            <a href="images/imgn4.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix web_design developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="images/imgn8.png" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Evaluation</h5>
                            <a href="images/imgn10.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix coding photography">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="images/img5.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Project Management</h5>
                            <a href="images/imgq1.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-Area / -->
	
	<section class="section-padding">
        <div class="container">
            <div class="row" class="col-md-2 col-md-offset-5">

                <!--<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">-->
				<div class="col-xs-12">
                   <div class="title">
                       <p>The Development Analyst advises clients on content for press releases and media outreach efforts to ensure they are speaking to the sensibilities of their audience. We are not just a communications company.
We see ourselves as business consultants to our clients, making sure our clients’ communications objectives are aligned to their business goals. </p>
<p><h3>We offer:</h3>
<li>Press Release distribution</li>
<li>Press Release drafting</li>
<li>Media Relations</li>
<li>spokesperson positioning and thought leadership</li>
<li>Online and offline monitoring and tracking</li>
</p>  
                </div>
            </div>
        </div>
		</div>
    </section>
    <!-- Portfolio-Area / -->
<!-- Services Area -->
			
			
            
        </div>
    </section>
       <!-- Footer-Area -->
       <footer class="footer-area" id="footer-area">
        <div class="footer-top section-padding footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="footer-text">
                            <h4 class="upper">the development analyst</h4>
                            <p>P.O Box 26162,<br /> Kampala, Uganda<br />Suite 3, Guild Cateen, Makerere University
                            <br />    Tel: +256-785369829/ +256-700369829/ +266-68475203<br />
                                Email: info@devanalyst.org</p>
                            <div class="social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
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

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--Vendor-JS-->
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