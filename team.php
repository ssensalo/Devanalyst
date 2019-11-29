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
	<link rel="stylesheet" href="styleslide.css" />

  
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style >
	.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: auto;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
 
  color: #ffffff;
}

button:hover, a:hover {
  opacity: 0.7;
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
                        <p class="navbar-brand"><img src="images/logoNew 1.jpg" alt="" width="150px" height="150px"></p>
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
                            <li ><a href="index.php#home-area">Home</a></li>
                            <li class="dropdown active"><a>About</a>
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
    </header>
    <!--Header-Area-/-->


  <!-- Blog-area -->
    <section class="section-padding" id="team-area">
        <div class="container">
		<div class ="row">
		<h2 class="text-center upper" >the team</h2>
		<div class="col-md-12" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
		<div class="col-xs-4">
		<div class="text-center">
		  <img src="images/kyerere.jpg"  alt="John" height="20%" style="width:60%;height:10%">
		  <h1>Mr. Chris Kyerere</h1>
		  <p class="title">Board Chair Person</p>
		  
		  
		 
		</div>
		</div>
		<div class="col-xs-8">
        <p>BSc. (Hons) Agricultural Extension Makerere University (1992); 
          Msc. Development Communication, University Of the Philippines (1997)
          Ph.D. Agricultural Extension & Innovative Studies, Makerere University-Ongoing
          </p>
		<p> Chris has over 20 years experience as a Management and Development Consultant with extensive experience in project design and implementation, Monitoring and evaluation and conducting surveys design strategic plans.
         He has implemented projects in strategic communicatio, public health and HIV plans, Business development services, enterprise and aGribusiness value addition.
        He has worked in East Africa, Ethiopa, South Sudan, Belgium, Denmark under USAID, World Bank, EU, UKAID and DANIDA </p>
		 
			
		</div>
		
		
		 <p><button>Contact
		  <a href="#" style="color:white;" ><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-linkedin"></i></a></button></p>
		</div>
		</div>
		
		
		
		<div class ="row">
		<h2 class="text-center">Board Members</h2>
		<div class="col-lg-3">
		<div class="card">
		 <div class="text-center">
		  <img src="images/micheal.jpg" class="img-rounded"  alt="John"  style="width:100%;max-height:280px">
		  </div>
		  <h1>Michael Ocilaje </h1>
		  <p class="title">Board Member</p>
		  <p>Technical Director/Development Communication Consultant & Science Editor<br />
BSc. (Hons) Agricultural Extension Makerere University (1992); Msc. Development Communication, University Of the Philippines (1997) Ph.D. Agricultural Extension & Innovative Studies, Makerere University-Ongoing
</p>
<p > He has 20 years experience in  Development Communication, Public relations, Development Management  & Knowledge Management Expert.  </p>
		  
		  <p><button>Contact
		   <a href="#" style="color:white;" ><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-linkedin"></i></a></button></p>
		</div>
		</div>
		<div class="col-lg-3">
		<div class="card">
		  <img src="images/Sam.jpg" class="img-rounded" alt="John" style="width:100%;max-height:280px">
		  <h1>Sam Mikenga </h1>
		  <p class="title">Board Member</p>
		  <p>Technical Director &amp; Senior Consultant<br /> He has worked with The Netherlands, INDEPTH Network, New Partnerships for Africa’s Development (NEPAD). WWF International, the Global Conservation Organization, PAMOJA Africa Reflect Network, working in more than 22 countries in Africa.
</p>
<p>He has over  15 years experience in Development Communication Strategy, media and public relations, fundraising, partnerships building, brand management, Editing, Technical writing. 
</p>

		  
		  <p><button>Contact
		   <a href="#" style="color:white;" ><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-linkedin"></i></a></button></p>
		</div>
		</div>
		<div class="col-lg-3">
		<div class="card">
		  <img src="images/anguzuR.jpg" class="img-rounded" alt="John" style="width:100%;max-height:280px">
		  <h1>Robert Anguzu</h1>
		  <p class="title">Board Member</p>
		  <p>MA Development Studies, Food Security Fellow (FSF),
Professional Fellowship Program (PFP), Oklahoma State University, USA BSc. (Hons) Mass Communication 

</p>
<p>He has over 10 years  experience conducting market and opinion research for research technologies, providing strategic direction for company growth, developing and implementing project communications strategy. Building and strengthening team capacity  for results and Media commmunication
</p>
		  
		  <p><button>Contact
		   <a href="#" style="color:white;" ><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-linkedin"></i></a></button></p>
		</div>
		</div>
		<div class="col-lg-3">
		<div class="card">
		  <img src="images/deo.jpeg" class="img-rounded" alt="John" height="50%" style="width:100%;max-height:280px">
		  <h1>Deogracious Aeloi</h1>
		  <p class="title">Board Member</p>
		  <p>Procurement &amp; Logistics Expert
</p>
<p>He has over 25 years of experience in procurement, logistics, Material Supply chain. Has worked at National, Regional and International levels.
</p>
		 
		  <p><button>Contact
		   <a href="#" style="color:white;" ><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#" style="color:white;" ><i class="icofont icofont-social-linkedin"></i></a></button></p>
		</div>
		</div>
		
        </div>
</section>        
        <!-- Staff members -->
	
<!-- THE ADVISORS -->
<section class="section-padding" id="service-area">
        <div class="container">
            <div class="row">
            <div class="text-center">
		<h2>Advisors</h2>
        <p style="color:#0d0d0d; font-size: 20px">We’ve assembled a cadre of outside advisors who lend expertise in a variety of categories. These experts help us DEVANALYST  a greater niche for our clients.</p>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="0.2s">
                    
                        <h4>Peter J. Hotez, M.D., Ph.D.</h4>
                        <p>National School of Tropical Medicine<br />Houston, Texas</p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="0.4s">
                        
                        <h4>Samuel Kalibala, M.D.</h4>
                        <p>Population Council, Nairobi<br />Joint United Nations Programme on HIV/AIDS (UNAIDS)</p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="0.6s">
                        
                        <h4>Florin Pasnicu</h4>
                        <p>Communication &amp; Public Relations Expert<br/>Pasnicu Florin I.E.(Individual Enterprise), Sibiu, Romania</p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="1.2s">
                       
                        <h4>Aggrey Willis Otieno, MA</h4>
                        <p>Child Labour and Trafficking Specialist<br /> Pambazuko Mashinani TB project, Principal Investigator</p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="1s">
                       
                        <h4>Dr. Husam Sadig</h4>
                        <p>Survey &amp; Data Analyst. Director of Statistical System Administration, Alneelain University, Sudan.</p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="0.8s">
                        
                        <h4>Wamala Vicent</h4>
                        <p>Sales &amp; Marketing Expert.<br /> With over 10 years experience</p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- THE ADVISORS -->

<!-- THE BENCH -->
<section class="section-padding" id="service-area" style="padding-top:0px;">
        <div class="container">
            <div class="row">
            <div class="text-center">
		<h2>The Bench</h2>
        <p style="color:#0d0d0d; font-size: 20px">DEVANALYST has access to several communications experts across the globe and we bring them onto teams as needed.</p>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="0.2s">
                  
                        <h4>Dr. Paul Birevu Muyinda, PhD</h4>
                        <p>Mobile &amp; Electronic Learning Specialist <br /> Certified Netware Administrator (CNA). </p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="0.4s">
                        
                        <h4>Jamillah Mwanjisi</h4>
                        <p>Communications &amp; Advocacy specialist with over 20 years’ experience, including 10 years in leadership positions </p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp text-center" data-wow-delay="0.6s">
                       
                        <h4>Peter Oriare Mbeke</h4>
                        <p>Communication Strategy for the National Integration and
Cohesion Commission, AWCFS </p>
                        <!-- <a href="#" class="read-more">Read More</a> -->
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- THE BENCH -->
    
    <!-- Footer-Area -->
    <footer class="footer-area" id="footer-area">
        <div class="footer-top section-padding footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="footer-text">
                            <h4 class="upper">the development analyst</h4>
                            <p style="color:white;">P.O Box 26162,<br /> Kampala, Uganda<br />Suite 3, Guild Cateen, Makerere University
                              <br />  Tel: +256-785369829/ +256-700369829/ +266-68475203<br />
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