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
                        <p class="navbar-brand" href="#home-area"><img src="images/logoNew 1.jpg" alt="" width="150px" height="150px"></p>
                    </div>


                   
                   <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <!-- <li><a href=""><i class="icofont icofont-user-alt-4"></i></a></li> -->
                            <li><a href="#search-box" data-toggle="collapse"><i class="icofont icofont-search-alt-2"></i></a></li>
                            <li class="select-cuntry">
                                <select name="counter" id="counter">
                                    <option value="ENG">Eng</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li class=""><a href="index.php#home-area">Home</a></li>
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
                                    <li><a href="services.php#service-area" style="text-transform: none;">Agribusiness</a></li>
                                </ul></li>
                            <li><a href="publish.php">Publications</a></li>
                            <li class="active"><a href="contact.php#contact-area">Contact</a></li>
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
                            <h2 class="header-title wow fadeInUp upper" style="font-size:29px">Strategic Communications &amp; inovative management for an <em style="color:#ff7605;">unpredictable</em> world<span class="dot"></span></h2>
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
    
      <!-- Contact-Area -->
    <section class="section-padding" id="contact-area">
        <div class="contact-area">
            <div class="container">
               <div class="row">
                    <div class="col-xs-12 col-md-12">
					<div class="page-title">
                            <h3 class="bar-title">Blog Form</h3>
                        </div>
                        <div class="contact-form">
                            <form   action="blog.php" method="post" enctype="multipart/form-data">
                                <div class="form-double">
                                    <input type="text" id="form-name" name="blogTitle" placeholder="blog Title" required="required">
                                    <input type="file" name="image" placeholder="select image">
                                </div>
                                <div class="form-double">
                                    <input type="date" name="date" style="width: calc(50% - 15px);float:left;outline:none;padding: 15px; margin-bottom: 20px; width: 100%; display: block; border: none; border-bottom: 1px solid #e8e8e8;"  id="form-name" name="form-name" placeholder="Your Email" required="required">
                                   
                                </div>
                                <textarea  name="message" id="form-message" rows="2" maxlength="100" required="required" placeholder="Blog Message"></textarea>
                                <input type="submit" name="blog" class="bttn bttn-primary" value="Send Now">
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
	 <!-- Blog-area -->
    <section class="section-padding" id="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 style="font-size:1.5em;" class="title">Latest Blog</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="blog-box">
                        <div class="blog-image">
                            <img src="images/conf2.jpg" alt="">
                        </div>
                        <div class="blog-details">
                            <h4><a href="#">Business Consultance Meetup and Trainings, 10 Jan, 2018</a></h4>
                            <p>We organize briefings and trainings for the interviewers of all projects as these meetings provide better understanding and quality standards compliance. we conduct trainings, abroad study programs and technical support in various fields in conjunction with institutes within and outside Africa</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
				<?php
				error_reporting(E_ERROR);


				include 'db.php';
				include 'config.php';
				mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));

				$query1 = 'SELECT *  FROM  blog  ORDER BY blog_id DESC limit 4';


				$result = mysqli_query($db, $query1);

				if($result){
					while($row=mysqli_fetch_array($result)){
						
					?>
					
					<div class="blog-lists">
							<div class="blog-list wow fadeInUp" data-wow-delay="0.4s">
								<div class="blog-list-image">
									<img src="<?php echo $row['image'];?>" alt="">
								</div>
								<h5><a href="#"><?php echo $row['title'];?></a></h5>
								<div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i> <?php echo $row['date'];?></div>
								<p><?php echo $row['message'];?></p>
							</div>
						   
						</div>
				<?php	
					}
				}
					?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-area / -->

	

   
    <!-- Contact-Area / -->
    <div id="maps"></div>


      <!-- Footer
 ================================================== -->
 <?php include_once("footer-area.php"); ?>

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
</body>

</html>