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
    <meta name="author" content="nicholas, Daniel, Edgar">
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
    <script type="text/javascript">
			$(function() {

				$('#carousel').carouFredSel({
					width: '100%',
					auto: {
						items: 1
					},
					prev: '#prev',
					next: '#next'
				});

			});
		</script>
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
p{
    color:#0d0d0d;
}
/* slider CSS */
#wrapper, #prev, #next {
				border-top: 1px solid #999;
				border-bottom: 1px solid #999;
				height: 170px;
				position: absolute;
				top: 220%;
				margin-top: -85px;
			}
			#wrapper {
				width: 90%;
				left: 5%;
				overflow: hidden;
				box-shadow: 0 0 10px #ccc;
			}

			#carousel img {
				margin: 10px 5px;
				border: none;
				display: block;
				float: left;
			}
			
			#prev, #next {
				background: center center no-repeat #ccc;
				width: 5%;
			}
			#prev:hover, #next:hover {
				background-color: #bbb;
			}
			#prev {
				background-image: url( img/gui-prev.png );
				left: 0;
			}
			#next {
				background-image: url( img/gui-next.png );
				right: 0;
			}
			
			#donate-spacer {
				height: 100%;
				margin-bottom: -70px;
			}
			#donate {
				border-top: 1px solid #999;
				width: 750px;
				padding: 50px 75px;
				margin: 0 auto;
				overflow: hidden;
			}
			#donate p, #donate form {
				margin: 0;
				float: left;
			}
			#donate p {
				width: 650px;
			}
			#donate form {
				width: 100px;
			}
    </style>

</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!--Preloader-->
    <!-- <div class="preloader">
        <div class="spinner"></div>
    </div>
 -->
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
                        <p class="navbar-brand" href="index.php#home-area"><img src="images/logoNew 1.jpg" alt="" width="150px" height="150px"></p>
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
                            <li class="active"><a href="publish.php">Publications</a></li>
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
    <!-- <section class="section-padding" id="about-area">
        <div class="container"> -->
            
            <!-- Services Area -->
<section class="section-padding" id="service-area">
        <div class="container">
            <div class="row" class="col-md-2 col-md-offset-5">

                <!--<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">-->
				<div class="col-xs-12">
                   <div class="page-title text-center">
                       <strong><h2 class="upper" id="capacitating" style="color:#0d0d0d">DEVANALYST PUBLISHING </h2></strong>
                        <!-- <p>The Strategic Communications segment of Devanalyst Consulting is one of the world’s most highly regarded communications consultancies with a 30-year track record of designing and executing communications strategies for clients managing financial, regulatory and reputational challenges. The Strategic Communications segment serves as trusted advisors to management teams and Boards of Directors seeking to seize opportunities, manage crises, navigate market disruptions, articulate their brand, stake a competitive position, and preserve their permission to operate. Services of the Strategic Communications segment include financial communications, corporate reputation and public affairs, with specialty offerings that include M&A communications, crisis communications, issues management, litigation communications, corporate governance, shareholder activism, proxy advisory, restructuring communications, employee engagement, change communications, strategy consulting, research, as well as digital and creative communications.</p> -->
                               </div>                     <!-- Left-aligned -->
						<div class="container">
						
							 <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <!-- <img src="images/Stakeholder.jpg" alt="" height="600px"> -->
                        </div>
                       
                        <div class="box-text ">
                        <img src="images/edit.png" class="media-object" width=30%>
                            <h4>Editorial Services</h4>
                            <p style="color:#0d0d0d;">Devanalyst combines strategic procurement consulting services, cutting-edge technology...
            <ul>
                <li>Editorial Assessment </li>
                <li>Copy Editing </li>
                <li>Line Editing</li>
                <li>Content Editing</li>
                <li>Developmental Editing</li>
            </ul>
            </p>
            <a href="contact.php#contact-area" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <!-- <img src="images/meeting.png" alt=""  height="600px"> -->
                            
                        </div>
                        <div class="box-text">
                        <img src="images/book.png" class="media-object" width=30%>
                            <h4>Book-to-Film Adaptation</h4>
                            <p style="color:#0d0d0d;">Have you ever considered your book to be adapted into a movie or television series? We can help you, click on the link below to find out more..
            </p><br/>
            <a href="contact.php#contact-area" class="read-more">Read More</a>
                                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <!-- <img src="images/conf2.jpg" alt=""><br/> -->
                           
                        </div>
                        <div class="box-text">
                        <img src="images/mech.png" class="media-object" width=30%>
                            <h4>Production Services</h4>
                            <p style="color:#0d0d0d;">Not into computers and have written your manuscript by hand? We can help you convert it into a usable file. Got a blurry picture you want to use for your book? We can fix that...
            </p><br/>
            <a href="contact.php#contact-area" class="read-more">Read More</a>
                                    </div>
						    </div>
                </div>
				      </div>
            </div> <br/>
			      <div class="container">
            <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <!-- <img src="images/conf2.jpg" alt=""><br/> -->
                           
                        </div>
                        <div class="box-text">
                        <img src="images/mech.png" class="media-object" width=30%>
                            <h4>Multi-Media Services</h4>
                            <p style="color:#0d0d0d;">We are here to plan and place broadcast and cable television, radio, print, digital, and outdoor advertising for your campaign. The basis for all successful media campaigns are plans that...

            </p>
            <a href="contact.php#contact-area" class="read-more">Read More</a>
                                    </div>
							      </div>
            </div>
							<div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <!-- <img src="images/conf2.jpg" alt=""><br/> -->
                           
                        </div>
                        <div class="box-text">
                        <img src="images/publish.png" class="media-object" width=30%>
                            <h4>Publishing</h4>
                            <p style="color:#0d0d0d;">Want to turn your manuscript into a book? Browse our publishing services and select the best option that meets the needs of your book, your goals as an author, and your budget...

                </p>
                <a href="contact.php#contact-area" class="read-more">Read More</a>
                        </div>
						      </div>
            </div>
						<div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <!-- <img src="images/conf2.jpg" alt=""><br/> -->
                           
                        </div>
                        <div class="box-text">
                        <img src="images/market.png" class="media-object" width=30%>
                            <h4>Marketing</h4>
                            <p style="color:#0d0d0d;">Don’t know how to reach your target audience? Let us help you figure out the best marketing strategy for your book...
                            </p><br/>
                            <a href="contact.php#contact-area" class="read-more">Read More</a>
                            </div>
							      </div>
            </div>
			</div>
			</div>
					
                       
                   
                </div>
            </div>
        </div>
    </section>
<!-- 
    <div class="page-title text-center">
    <h3 class="upper" id="capacitating" style="color:#fcc512">Resize your browser.</h3>
        </div> -->

<!-- Magazine Slider -->
    <section class="section-padding">

<div class="container">
            <div class="row">


		<div id="wrapper">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="images/confrence.jpg" alt="Chania">
                  <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                  </div>
                </div>

                <div class="item">
                  <img src="img/dakar-3.jpg" alt="Chicago">
                  <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                  </div>
                </div>

                <div class="item">
                  <img src="img/dakar-4.jpg" alt="New York">
                  <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>





		</div>



        </div>
        </div> 



    </div><br/><br/><br/>
        </section>
       <!-- Footer
 ================================================== -->
 <?php include_once("footer-area.php"); ?>
    <!-- Footer-Area / -->

    <!-- magazine js -->
    <!-- <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script> -->
		<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
		

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