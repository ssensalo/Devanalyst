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
    <section class="section-padding" id="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="page-title ">
                        <h2 style="font-size:1.5em;"class="title text-center">THE DEVELOPMENT ANALYST LTD-INTERNATIONAL</h2>
                        <p style="color:#0d0d0d;">Is a leading Strategic Management, Governance, Development Communications, Public Relations and Marketing  and Monitoring and Evaluation consultancy firm in the region with offices in Uganda, Kenya, South Sudan and Rwanda, with a reputation for delivering quality ‘alternative’ marketing solutions to clients in Government, the Private and NGO sectors.  Today, it boasts of over 50 Communication and Creative experts available for any of the fully established operation in Kampala, on  Equatorial Hotel.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="blog-box">
                        <div class="blog-image text-center">
                          
                        </div>
                        <div class="blog-details">
                             <h3 style="color:white;">Strategic Development Communication</h3> 
							 <p>The Development Analyst Ltd is an international organization providing a wide range of consultancy services to several clients in the Private Sector, Governments and International Development Agencies.</p>
                            <p>It has a Strategic Development Communication and Management Centre (SDCM) that conducts trainings, abroad study programs and technical support in various fields in conjunction with institutes within and outside Africa. It also publishes monthly regional Magazine and quarterly investors’ guide – The Development Analyst that is distributed in Uganda, Kenya, Tanzania, Rwanda, Burundi and South Sudan and beyond. The Development Analyst Ltd-International has offices in Kampala, Uganda and Nairobi, Kenya. It has also agents in Kigali, Rwanda; Juba, South Sudan; Mwanza, Tanzania; Abuja, Nigeria; Ghana, London, Canada  and South Africa.</p>
                        </div>
                    </div>
                </div>
				
                <div class="col-xs-12 col-md-6">
                    <div class="blog-lists">
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.2s">
                            
                            <h5 style="color:black;"><em>Our Focus</em></h5>
                           
                            <p style="color:#0d0d0d;">We focus on sectors like: Good  Governance & democracy, Institutional Development, Capacity building, Strategic and Development Communication, Organizational Assessment and Development, Governance, Political Monitoring,  and  Resource mobilization.  </p>
                        </div>
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.4s">
                            
                            <h5 style="color:#0d0d0d;"><em>Our Core Competences</em></h5>
                           
                            <p style="color:#0d0d0d;">Our core competences cover Public Relations, Rural Development, Civil Society & NGOs, Education, Energy, Food Security, Gender, Health, Humanitarian Aid & Emergency, Micro-finance, Poverty Reduction, Procurement, Social Development, Trade, Youth, Monitoring & Evaluation. </p>
                        </div>
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.6s">
                           
                            <h5 style="color:#0d0d0d;"><em>Worked With</em></h5>
                           
                            <p style="color:#0d0d0d;">We have worked with  Melinda and Bill Gates Foundation, World Bank Group, IDRC, IFAD, EU, DANIDA, AfDB, AusAid, EBRD, European Commission, EIB, IADB, UNDP,FAO,UNICEF, UNAIDS, EAC,  Animal Industry & Fisheries (MAAIF) and others.</p>
                        </div>
                    </div>
                </div>
				<div style="padding:2%" class="col-xs-12 gray-bg">
				<div class="col-xs-12 col-sm-6 col-md-6 ">
                    <div class="page-title">
                        <h2 style="font-size:1.2em; " class="title wow fadeInUp text-center">Our Guiding Principles </h2>
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p style="color:#0d0d0d;">Professional excellence by maintaining the highest standards of ethical practices and professional integrity.</p>
                            
							<p style="color:#0d0d0d;">Taking on big challenges and finding creative ways to solve complex problems.</p>
							<p style="color:#0d0d0d;">Exceeding our customers' expectations for quality and responsiveness by delivering on-time and within budget.</p>
							<p style="color:#0d0d0d;">Creating a working environment that fosters innovation and creativity that encourages and rewards the entrepreneurial spirit.</p>
							<p style="color:#0d0d0d;">Technical objectivity and will look beyond the walls of our company to provide the best possible solution for our clients.</p>
							<p style="color:#0d0d0d;">Rewarding hard work, passion for our clients and excellence in our deliverables; we promote from within and seek to hire the best and brightest employees.</p>
							<p style="color:#0d0d0d;" >Technology innovation and market diversification to maintain a competitive advantage in the marketplace and deliver value to our stakeholders.</p>
                        </div>
                    </div>
                   
                </div>
                <div class="hidden-xs col-sm-6 col-md-6">
                    <div class="page-title">
                        <h2 style="font-size:1.2em; " class="wow fadeInUp text-center">Our Services </h2>
                    </div>
                    <div class="panel-group accordion1" id="accordion">
                        <div class="panel">
                            <a data-toggle="collapse" data-parent="#accordion"  href="#collapse1">Strategic Communication</a>
                            <div id="collapse1" class="collapse">
                                <div class="text-body" style="color:#0d0d0d;">At The Development Analyst Ltd, we offer integrated advisory and consulting services to companies, institutions and governments, development partners.</div>
                            </div>
                        </div>
                        <div class="panel">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Capacitating</a>
                            <div id="collapse2" class="collapse">
                                <div class="text-body" style="color:#0d0d0d;">The Development Analyst Ltd has a comprehensive experience in training and in know-how transference within the field of Organizational Development, Governance, Communication, Public Relations and Outreach Campaigns, Information and Communication Strategies, Organizational and Change management, Project Development and management, Monitoring, Documentation and Impact Evaluation, Knowledge Management and Private Sector Development.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Project Monitoring and Evaluation</a>
                            <div id="collapse3" class="collapse">
                                <div class="text-body" style="color:#0d0d0d;">The Development Analyst Ltd is a specialist in evaluating and monitoring programmes and projects for aiding development. It uses widely verified methodologies that are employed by the main international donors, focusing on relevance,  efficiency, sustainability and impact. 
                                </div>
                            </div>
                        </div>
						<div class="panel">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Project Management</a>
                            <div id="collapse4" class="collapse">
                                <div class="text-body" style="color:#0d0d0d;">The Development Analyst Ltd has extensive experience in the integrated management of local, national and international projects. Our experience includes the management of complex and multi-country projects with multiple beneficiaries. The Development Analyst Ltd professionals have an in-depth understanding of the procedures of the main international donors. 
                                </div>
                            </div>
                        </div>
						<div class="panel">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Research and Studies  </a>
                            <div id="collapse5" class="collapse">
                                <div class="text-body" style="color:#0d0d0d;">Effective and efficient use of resources and the right choice of the way for achieving the goals can be possible if only based on the results of market research, Sociological Research, Field research, Mass Media Research.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
            </div>
			 <div Style="padding-top:2%;" class="row" id="projects">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 style="font-size:1.5em;color:#0d0d0d;" class="title">Completed Assignments</h2>
                       
                    </div>
                </div>
            </div>
			
            <div  class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="testimonials">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">The Development Analyst Ltd produced maiden magazine and publicity materials  Golden Jubiliee for Bank of Uganda.( 2016)</em>
                            </div>
                            <h5 style="color:#0d0d0d;">BANK OF UGANDA </h5>
                            
                            
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">. Trade mark East Africa contracted Development Analyst Ltd  to  conduct multi-media awareness campaign on the benefits and opportunities of regional integration and trade in Uganda ( 2015-2016).</em>
                            </div>
                            <h5 style="color:#0d0d0d;">TRADEMARK EAST AFRICA </h5>
                            
                           
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">UNDP UGANDA contracted Development Analyst Ltd  to carry out feasibility study and Awareness Raising for establishment of Parliamentary TV and Radio ( 2013-2014).</em>
                            </div>
                            <h5 style="color:#0d0d0d;">UNDP</h5>
                           
                            
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">UNICEF, NIGERIA contracted Development Analyst Ltd  to review and  re-design communication and advocacy  strategy on Routine Immunisation and polio eradication  ( 2009-2011).</em>
                            </div>
                            <h5 style="color:#0d0d0d;">UNICEF</h5>
                           
                           
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">SunMAP/DFID contracted CHESTRAD International and Development Analyst Ltd   review and re-design of Communication Strategy for Lagos, Kaduna, Kano, Katsina States Malaria Control Programme (MCP), SunMAP/DFID, June- October, 2010.</em>
                            </div>
                            <h5 style="color:#0d0d0d;">SunMAP/DFID</h5>
                           
                            
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">Bank of Kigali IPO contracted Vantage Communications and Development Analyst Ltd  to provide the Public Relations and Marketing support toward the marketing of the Bank of Kigali (BK) IPO scheduled to take place between May and Sept 2011.</em>
                            </div>
                            <h5 style="color:#0d0d0d;">Bank of Kigali IPO</h5>
                           
                           
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">Qatar Airways Launch in Uganda contracted Vantage Communications and Development Analyst Ltd  to provide the PR and Media relations support towards the launch of Qatar Airways in Uganda in Oct 2011. </em>
                            </div>
                            <h5 style="color:#0d0d0d;">Qatar Airways</h5>
                           
                            
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">Kampala Urban Sanitation Program (KUSP):contracted Vantage Communications and Development Analyst Ltd  to provide Kampala City Council PR services.</em>
                            </div>
                            <h5 style="color:#0d0d0d;">Kampala Urban Sanitation Program</h5>
                           
                            
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">MTN contracted Vantage Communications and The Development Analyst Ltd  to develop  outreach strategy. MTN is the largest telecom services provider in Uganda with a host of products and services, which have been aggressively advertised in the mass media. </em>
                            </div>
                            <h5 style="color:#0d0d0d;">MTN</h5>
                           
                            
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">Pilot test of the NDI SMS Political Monitoring platform Development Analyst and Vantage was contracted by NDI to carry out promotion of 6069 number to monitor the performance of Members of Parliament in Five Pilot districts over three months in July to September 2010. </em>
                            </div>
                            <h5 style="color:#0d0d0d;">NDI SMS Political Monitoring platform</h5>
                           
                           
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">Private Sector Foundations Uganda (PSFU) and Business Plan Competition (BPC) Development Analyst and Vantage communication was contracted by the Private Sector Foundation Uganda a World Bank funded private sector development program to manage the PR and Marketingof a new concept, Business Plan Competition to promote better planning among young entrepreneurs who intendsto start their own business. For two year 2009 and 2010. </em>
                            </div>
                            <h5 style="color:#0d0d0d;">Private Sector Foundations Uganda </h5>
                           
                            
                        </div>
						<div class="single-testimonial text-center">
                            <div class="testimonial-text">
                                <em style="color:#0d0d0d;">Contracted to Developed the AfDB Group Communication Strategy and assisted in the elaboration of the Corporate, Departmental, Sector and regional Communication strategies. This included, among others; to provide technical Support for development and implementation of communications and mobilisation strategies for a number AFDB projects.</em>
                            </div>
                            <h5 style="color:#0d0d0d;">AfDB</h5>
                           
                           
                        </div>
						
                    </div>
                </div>
            </div>
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