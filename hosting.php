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
                            <li class="dropdown active"><a>About</a>
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
                                    <li><a href="services.php#service-area" style="text-transform: none;">Agribusiness</a></li>
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


            <!-- Services Area -->
<section class="section-padding" id="service-area">
        <div class="container">
            <div class="row" class="col-md-2 col-md-offset-5">

                <!--<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">-->
				<div class="col-xs-12">
                   <center> <div class="page-title">
                       <h3 class="upper" id="capacitating">Web Services</h3>
                        
                   
                            <!--<h4 class="upper thing">SINCE WE HAVE 25 YEARS </h4>-->
                            
                            <p>Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services. Including a list of tasks such as  web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development.

                            </p>
                               </div></center>                     <!-- Left-aligned -->
						<div class="container">
							<!--<div class="row">
							<div class="servive-box">
							<div class="col-md-4" class="box-text">
							<h3 class="upper" id="capacitating">Communication Strategy</h3>
							<p>ACG works with local public relations/communications firms and the 
                                communications leads of African corporations, governments, and non-governmental organisations 
                                to provide training in communications principles.</p> <p>The goal is to upscale the communications capabilities of 
                                local communications firms and give communications professionals in private and public sector organisations the
                                tools they need to succeed.</p> <p>ACG works with clients to identify strengths and weaknesses as well as the challenges and 
                                opportunities presented in their markets.</p> <p>Tailored training is then prepared to meet the client’s specific needs, pairing 
                                them up with an ACG training consultant who is an expert in the identified area that requires up-scaling.

                            </p>
							</div>
							</div>
							<div class="col-md-4">
							<h3 class="upper" id="capacitating">Digital Communication</h3>
							<p>ACG works with local public relations/communications firms and the 
                                communications leads of African corporations, governments, and non-governmental organisations 
                                to provide training in communications principles.</p> <p>The goal is to upscale the communications capabilities of 
                                local communications firms and give communications professionals in private and public sector organisations the
                                tools they need to succeed.</p> <p>ACG works with clients to identify strengths and weaknesses as well as the challenges and 
                                opportunities presented in their markets.</p> <p>Tailored training is then prepared to meet the client’s specific needs, pairing 
                                them up with an ACG training consultant who is an expert in the identified area that requires up-scaling.

                            </p></div>
							<div class="col-md-4">
							<h3 class="upper" id="capacitating">Political Reporting</h3>
							<p>ACG works with local public relations/communications firms and the 
                                communications leads of African corporations, governments, and non-governmental organisations 
                                to provide training in communications principles.</p> <p>The goal is to upscale the communications capabilities of 
                                local communications firms and give communications professionals in private and public sector organisations the
                                tools they need to succeed.</p> <p>ACG works with clients to identify strengths and weaknesses as well as the challenges and 
                                opportunities presented in their markets.</p> <p>Tailored training is then prepared to meet the client’s specific needs, pairing 
                                them up with an ACG training consultant who is an expert in the identified area that requires up-scaling.

                            </p></div>
							</div>-->
							
							 <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/host.png" alt="" height="600px">
                            
                        </div>
                        <div class="box-text ">
                            <h4>Web Hosting</h4>
                            <p style="color:#0d0d0d;">Whether you are just starting a website, or already have a few projects, our hosting plans are the perfect place to accommodate them all. Every shared hosting plan can be effortlessly upgraded to a more powerful one. Thus we promise easy scaling, carefully selected features, and powerful hosting server infrastructure. Let's make your websites stand out on the world wide web!</p>
                        </div>
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/domain.jpg" alt=""  height="600px">
                            
                        </div>
                        <div class="box-text">
                            <h4>Domain Registration</h4>
                            <p style="color:#0d0d0d;">We manage the reservation of Internet domain names, registering a domain name, which identifies one or more IP addresses with a name that is easier to remember and use in URLs to identify particular Web pages.</p><br/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/web design.jpg" alt="">
                           
                        </div>
                        <div class="box-text">
                            <h4>Web design and Development</h4>
                            <p style="color:#0d0d0d;">Become a professional web designer, our comprehensive Web Design and Web Development courses can take you from a beginner designer to an advanced developer. We offer training in CMS, HTML, Flash, Photoshop, MySQL, Dreamweaver and CSS. As an Accredited Centre, we can also offer CIW, ADOBE and MySQL professional qualifications. </p><br/>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/digital.jpg" alt="" height="600px">
                            
                        </div>
                        <div class="box-text ">
                            <h4>Digital Marketing</h4>
                            <p style="color:#0d0d0d;">Marketing of products or services using digital technologies, mainly on the Internet, but also including mobile phones, display advertising, and any other digital medium.
Digital marketing methods such as search engine optimization (SEO), search engine marketing (SEM), content marketing, influencer marketing, content automation, campaign marketing, data-driven marketing, e-commerce marketing, social media marketing, social media optimization, e-mail direct marketing, Display advertising, e–books, and optical disks and games are becoming more common in our advancing technology.
</p>
                        </div>
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/big data.jpg" alt=""  height="600px">
                            
                        </div>
                        <div class="box-text">
                            <h4>Big Data</h4>
                            <p style="color:#0d0d0d;">Encompass a wide variety of data types, including structured data in SQL databases and data warehouses, unstructured data, such as text and document files held in Hadoop clusters, or NoSQL systems, and semi-structured data, such as web server logs or streaming data from sensors. Further, big data includes multiple, simultaneous data sources, which may not otherwise be integrated. For example, a big data analytics project may attempt to gauge a product's success and future sales by correlating past sales data, return data and online buyer review data for that product</p><br/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="box-image">
                            <img src="images/email.jpg" alt=""><br/><br/>
                           
                        </div>
                        <div class="box-text">
                            <h4>Webmail services</h4>
                            <p style="color:#0d0d0d;">Webmail or email is accessed using an online-only client. It is has been an important tool for busy professionals as a business on the Web becomes increasingly mobile.
We include support for email as part of our standard packages. As one of today’s leading forms of interpersonal communication, email is an essential part of running a successful website and business. An important part of any modern email service is webmail.
</p><br/>
                        </div>
                    </div>
                </div>
            </div>
			
                                                       
                        </div>
						
		<section class="section-padding gray-bg">
		<div class="container">
			   
            <div class="row">
                <div class="col-xs-12 ">
				
                    <ul class="price-tabs">
					
                        <h2 class="title text-center">Web Hosting Price Plan</h2>
                   
                        <p>Pick a plan that suits your workload, downgrade or upgrade at anytime.</p>
                        <li class="active"><a data-toggle="pill" href="#monthly">Monthly</a></li>
                        <li><a data-toggle="pill" href="#yearly">Yearly</a></li>
                    </ul>
                </div>
            </div>
            <div class="row prices tab-content col-centered">
                <div id="monthly" class="tab-pane fade in active">
                    <div class="col-md-2 col-md-offset-5"></div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="price-box">
                            <h4>Silver</h4>
                            <h3 class="amount">&#36;7.33 /<span>mo</span></h3>
                            <ul class="price-list">
                                <li>Unlimited Data Storage</li>
                                <li>Unlimited Data Transfer</li>
                                <li>1 Domains Hosted</li>
                                <li>Unlimited Email Accounts</li>
                                <li>Easy Website Builder</li>
                                <li>CloudFlare DDoS Protection</li>
                                <li>Cloud SMTP Delivery</li>
                                <li>Automatic Backups</li>
                                <li>SSH Access</li>
                                <li>Free SSL Certificate</li>
                                <li>Live 24/7/365 Support</li>
                                <li>30 Days Free Trial</li>
                            </ul>
                            <a href="contact.php#contact-area" class="bttn bttn-sm bttn-default">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="price-box active">
                            <h4>Gold</h4>
                            <h3 class="amount">&#36;14.25 /<span>mo</span></h3>
                            <ul class="price-list">
                            <li>Unlimited Data Storage</li>
                                <li>Unlimited Data Transfer</li>
                                <li>2 Domains Hosted</li>
                                <li>Unlimited Email Accounts</li>
                                <li>Easy Website Builder</li>
                                <li>CloudFlare DDoS Protection</li>
                                <li>Cloud SMTP Delivery</li>
                                <li>Automatic Backups</li>
                                <li>SSH Access</li>
                                <li>Free SSL Certificate</li>
                                <li>Live 24/7/365 Support</li>
                                <li>30 Days Free Trial</li>
                            </ul>
                            <a href="contact.php#contact-area" class="bttn bttn-sm bttn-default">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="price-box">
                            <h4>Platinum</h4>
                            <h3 class="amount">&#36;20.00 /<span>mo</span></h3>
                            <ul class="price-list">
                            <li>Unlimited Data Storage</li>
                                <li>Unlimited Data Transfer</li>
                                <li>5 Domains Hosted</li>
                                <li>Unlimited Email Accounts</li>
                                <li>Easy Website Builder</li>
                                <li>CloudFlare DDoS Protection</li>
                                <li>Cloud SMTP Delivery</li>
                                <li>Automatic Backups</li>
                                <li>SSH Access</li>
                                <li>Free SSL Certificate</li>
                                <li>Live 24/7/365 Support</li>
                                <li>30 Days Free Trial</li>
                            </ul>
                             <a href="contact.php#contact-area" class="bttn bttn-sm bttn-default">Get Started</a>
                        </div>
                    </div>
                   
                </div>
                <div id="yearly" class="tab-pane fade">
                <div class="col-md-2 col-md-offset-5"></div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="price-box">
                            <h4>Silver</h4>
                            <h3 class="amount">&#36;77.96 /<span>yr</span></h3>
                            <ul class="price-list">
                            <li>Unlimited Data Storage</li>
                                <li>Unlimited Data Transfer</li>
                                <li>1 Domains Hosted</li>
                                <li>Unlimited Email Accounts</li>
                                <li>Easy Website Builder</li>
                                <li>CloudFlare DDoS Protection</li>
                                <li>Cloud SMTP Delivery</li>
                                <li>Automatic Backups</li>
                                <li>SSH Access</li>
                                <li>Free SSL Certificate</li>
                                <li>Live 24/7/365 Support</li>
                                <li>30 Days Free Trial</li>
                            </ul>
                            <a href="contact.php#contact-area" class="bttn bttn-sm bttn-default">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="price-box active">
                            <h4>Gold</h4>
                            <h3 class="amount">&#36;160.00 /<span>yr</span></h3>
                            <ul class="price-list">
                            <li>Unlimited Data Storage</li>
                                <li>Unlimited Data Transfer</li>
                                <li>2 Domains Hosted</li>
                                <li>Unlimited Email Accounts</li>
                                <li>Easy Website Builder</li>
                                <li>CloudFlare DDoS Protection</li>
                                <li>Cloud SMTP Delivery</li>
                                <li>Automatic Backups</li>
                                <li>SSH Access</li>
                                <li>Free SSL Certificate</li>
                                <li>Live 24/7/365 Support</li>
                                <li>30 Days Free Trial</li>
                            </ul>
                          <a href="contact.php#contact-area" class="bttn bttn-sm bttn-default">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="price-box">
                            <h4>Platimun</h4>
                            <h3 class="amount">&#36;230.00 /<span>yr</span></h3>
                            <ul class="price-list">
                            <li>Unlimited Data Storage</li>
                                <li>Unlimited Data Transfer</li>
                                <li>5 Domains Hosted</li>
                                <li>Unlimited Email Accounts</li>
                                <li>Easy Website Builder</li>
                                <li>CloudFlare DDoS Protection</li>
                                <li>Cloud SMTP Delivery</li>
                                <li>Automatic Backups</li>
                                <li>SSH Access</li>
                                <li>Free SSL Certificate</li>
                                <li>Live 24/7/365 Support</li>
                                <li>30 Days Free Trial</li>
                            </ul>
                          <a href="contact.php#contact-area" class="bttn bttn-sm bttn-default">Get Started</a>
                        </div>
                    </div>
                    
                </div>
            </div>
		</div>
		</section>
						
						
                       
                   
                </div>
            </div>
        </div>
    </section>

<!-- Services Area -->
			
        
    <!-- Footer
 ================================================== -->
 <?php include_once("footer-area.php"); ?>
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