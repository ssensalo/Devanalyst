<?php
error_reporting(0);
include 'db.php';
include 'config.php';
mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));

// Job Details
$query1 = 'SELECT *  FROM  jobs  ORDER BY Id DESC';
$jobresult = mysqli_query($db, $query1);

// Grant Details
$query2 = 'SELECT *  FROM  grants  ORDER BY grantId DESC';
$grantresult = mysqli_query($db, $query2);

// Expert details
$query3 = 'SELECT *  FROM  experts ORDER BY Id DESC';
$expertresult= mysqli_query($db, $query3);

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
      <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
      <!-- MDBootstrap Datatables  -->
    <link href="css/addons/datatables.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!--Main-Stylesheets for the subscription popup-box-->
	<link rel="stylesheet" href="styles.css" />

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

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            <li class="active"><a href="aid.php#aid-area">Analyst Aid</a></li>
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
        </div>
    </header>
    <!--Header-Area-/-->
  
        <!-- Posted Content -->
        <section class="section-padding2" id="aid-area">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-xs-12 col-sm-6 col-md-5"> -->
                    <div class="page-title">
                            <!-- <h2 class="title wow fadeInUp">We Offer Quick &amp; Powerful Business Solution</h2> -->
                          
                        <div class="btn-group btn-group-justified radius ">
                            <a href="?jobs" class="btn btn-primary  thead">Jobs</a>
                            <a href="?grants" class="btn btn-primary thead">Grants</a>
                            <a href="?experts" class="btn btn-primary thead">Experts</a>
                        </div> 
                        <div style="padding-bottom:30px"></div>
                       
                       <div class="wow fadeInUp" data-wow-delay="0.5s">
                           <!-- The Grants -->
                            <?php if(isset($_REQUEST["grants"])){?>
                                <!--Table-->
                                <table id="grant" class="table table-hover table-fixed" cellspacing="0" width="100%">

                                <!--Table head-->
                                <thead>
                                <tr class="jumbotron">
                                    <!-- <th>#</th> -->
                                    <th class="thead" width="50%">Grants</th>
                                    <th class="thead" width="30%">Details</th>
                                    <th class="thead" width="20%">Deadline</th>
                                    <!-- <th>City</th>
                                    <th>Position</th>
                                    <th>Age</th> -->
                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                <?php 
                              if($grantresult){
                                    while($row=mysqli_fetch_array($grantresult)){
                                ?>
                                <tr>
                                    <!-- <th scope="row">4</th> -->
                                    <td class="data">
                                    <div class="row">
                                        <div class=column>
                                          <img src="<?php echo $row['image'];?>" alt="">
                                        </div>
                                        <div class=column>
                                            <div class="row"><?php echo $row['gname'];?></div>
                                            <div class="column">
                                            <p>Agency:<br />Posted:<br />
                                            </div>
                                            <div class="column-inner">
                                            <?php echo $row['agency'];?>
                                            <?php echo $row['posted'];?>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <td class="data">
                                    <div class="row">
                                        <div class="column">
                                        <p>Location:<br />Catergory:<br />Budget:</p>
                                        </div>
                                        <div class=column-inner>
                                        <?php echo $row['location'];?><br />
                                        <?php echo $row['catergory'];?><br />
                                        <?php echo $row['budget'];?>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="data"><?php echo $row['Deadline'];?></td>
                                    <!-- <td>Bari</td>
                                    <td>Editor-in-chief</td>
                                    <td>41</td> -->
                                </tr>
                                    <?php }
                              }?>
                                </tbody>
                                <!--Table body-->

                                </table>
                                <!--Table-->
                               
                            <?php } else if(isset($_REQUEST["experts"])){ ?>
                                <!--Table-->
                                <table id="expert" class="table table-hover table-fixed" cellspacing="0" width="100%">

                                <!--Table head-->
                                <thead>
                                <tr class="jumbotron">
                                    <!-- <th>#</th> -->
                                    <th class="thead" width="50%">Experts</th>
                                    <th class="thead" width="30%">Details</th>
                                    <th class="thead" width="20%">CV</th>
                                    <!-- <th>City</th>
                                    <th>Position</th>
                                    <th>Age</th> -->
                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                <?php 
                              if($expertresult){
                                    while($row1=mysqli_fetch_array($expertresult)){
                                ?>
                                <tr>
                                    <!-- <th scope="row">4</th> -->
                                    <td class="data">
                                    <div class="row">
                                        <div class="column">
                                            <img src="<?php echo $row1['image'];?>" alt="">
                                        </div>
                                        <div class= "column">
                                             <?php echo $row1['ename'];?>
                                        </div>
                                    </div>
                                        
                                    </td>
                                    <td class="data">
                                    <div class="raw">
                                        <div class="column">
                                        Experience: <br />Citizenship: <br />Ed. Degree:
                                        </div>
                                        <div class="column">
                                        <?php echo $row1['experience'];?><br />
                                        <?php echo $row1['citizen'];?><br />
                                        <?php echo $row1['degree'];?>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="data"></td>
                              <?php }
                              }

                              ?>
                                </tr>
                              
                                </tbody>
                                <!--Table body-->

                                </table>
                                <!--Table-->
                               
                            <?php } 

                            //  <!--The Jobs  -->
                            else{?>
                                <!--Table-->
                                <table id="jobs" class="table table-hover table-fixed" cellspacing="0" width="100%">

                                <!--Table head-->
                                <thead>
                                <tr class="jumbotron">
                                    <!-- <th>#</th> -->
                                    <th class="thead" width="50%">Jobs</th>
                                    <th class="thead" width="30%">Details</th>
                                    <th class="thead" width="20%">Deadline</th>
                                    <!-- <th>City</th>
                                    <th>Position</th>
                                    <th>Age</th> -->
                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                <?php
                                if($jobresult){
                                    while($row2=mysqli_fetch_array($jobresult)){
                                ?>
                                <tr>
                                    <!-- <th scope="row">4</th> -->
                                    <td class="data">
                                    <div class="row">
                                        <div class= "column">
                                              <img src="<?php echo $row2['image'];?>" alt="" >
                                        </div>
                                        <div class= "column">
                                            <div class="row">
                                            <a href ="#"><b><?php echo $row2['jname'];?><br /></b></a>
                                            </div>
                                            <div class="column"><p>Organization:<br/>Posted:</p></div><div></div>
                                            <div class="column-inner">
                                            <?php echo $row2['org'];?>  
                                            <?php echo $row2['posted'];?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                        
                                     <!-- <table>  <tr width="50%">
                                       <td width="20%"></td>
                                       <td class="data-in">
                                        
                                       </td>
                                       </tr>
                                     </table>        -->
                                     
                                        
                                    </a></td>
                                    <td class="data">
                                    <div class="column">
                                    <p>Location:<br />Type:<br />Experience:</p>
                                    </div>
                                    <div class ="column-inner">
                                    <?php echo $row2['location'];?><br />
                                    <?php echo $row2['type'];?><br />
                                    <?php echo $row2['experience'];?>
                                    </div>
                                    <!-- <p>Location:</p><br />
                                    <p>Type:</p><br />
                                    <p>Experience:</p> -->
                                    </td>
                                    <td class="data" center><?php echo $row2['Deadline'];?></td>
                                    <!-- <td>Bari</td>
                                    <td>Editor-in-chief</td>
                                    <td>41</td> -->
                                </tr>
                                    <?php }
                                }?>
                                </tbody>
                                <!--Table body-->

                                </table>
                                <!--Table-->
                        
                           <?php } ?>
                       </div>
                    <!-- </div> -->
                    <!-- <div class="wow fadeInUp" data-wow-delay="0.7s">
                        <a href="#" class="bttn bttn-primary">Learn More</a>
                    </div> -->
                </div>
                <!-- Image -->
                <!-- <div class="hidden-xs col-sm-6 col-md-offset-1">
                    <img src="images/skill-image.png" alt="">
                </div> -->
            </div>
        </div>
    </section>
    <!-- Posted Content / -->

    
  <!-- Footer
 ================================================== -->
 <?php include_once("footer-area.php"); ?>
  <!--Subscription popup form-->
  <div style="margin: auto;width: 60%;">
	
    <div id="list-builder"></div>
    <div id="popup-box">
       <img src="close.svg" id="popup-close" />
       <div id="popup-box-content">
        <h1>Subscribe to The DevAnalyst Newsletter</h1>
           <p>
               Stay up to date on the latest in web, mobile, and game development, plus receive exclusive content by
               subscribing to our newsletter.
           </p>
<form id="fupForm" name="form1" method="post">
   <div class="form-group">
      <!-- <label for="name">Name:</label> -->
       <input type="text" class="form-control" id="name" placeholder="Name" name="name">
   </div>
   <div class="form-group">
       <!-- <label for="email">Email:</label> -->
       <input type="email" class="form-control" id="email" placeholder="Email" name="email">
   </div>
   
   <input type="button" name="save" class="bttn bttn-sm bttn-primary" value="Subscribe" id="butsave">
</form>
  </div>
</div>

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
      <!-- MDBootstrap Datatables  -->
     <script type="text/javascript" src="js/addons/datatables.min.js"></script>

        <!--Subsciption popup JS-->
	<script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/list-builder1.js"></script>
     
     <script>
    $(document).ready(function () {
    $('#grant').DataTable();
    $('#expert').DataTable();
    $('#jobs').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
  </script>
</body>

</html>