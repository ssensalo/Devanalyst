<?php

$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data
include 'db.php';
include 'config.php';
mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));

// Saving Job Post
if (isset($_POST['jobs'])) if($_POST['jobs']) {
    $job    = stripslashes(trim($_POST['job']));
    $org    =stripslashes(trim($_POST['org']));
    $jobloc =stripslashes(trim($_POST['jloc']));
    $jtype  =stripslashes(trim($_POST['type']));
    $jexp   =stripslashes(trim($_POST['jexp']));
    $jpost  =$_POST['jposted'];
    $jdeadline=$_POST['jdeadline'];
    // $name = isset($_POST['name']) ? $_POST['name'] : '';
   
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                $thumbnails = "uploads/" . $_FILES["image"]["name"];
    $jdetail =stripslashes(trim($_POST['jdetail']));

    if (empty($job)) {
        $errors['job'] = 'Job name is required.';
    }
    if (empty($org)) {
        $errors['org'] = 'Organization name is required.';
    }
    if (empty($jobloc)) {
        $errors['jloc'] = 'Job Location is required.';
    }
    if (empty($jtype)) {
        $errors['type'] = 'Job type is required.';
    }
    if (empty($jexp)) {
        $errors['jexp'] = 'Experience is required.';
    }
    if (empty($jdeadline)) {
        $errors['jdeadline'] = 'Deadline is required.';
    }
    if (empty($image)) {
        $errors['image'] = 'Image is required.';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $json = array();
                      
           $query = 'INSERT INTO jobs VALUES 
           (null, "'.$job.'", "'.$org.'", "'.$jpost.'","'.$jobloc.'", "'.$jtype.'", "'.$jexp.'", "'.$jdetail.'", "'.$jdeadline.'", "'.$thumbnails.'" )';

if($db->query($query) == TRUE){
          $data['success'] = true;
        $data['message'] = 'Congratulations. Your message has been sent successfully';

     }else{
          $data['success'] = false;
         $data['errors']  = "error in inserting in the db";
         echo mysqli_error($db);
     }
        
       
    }
    // return all our data to an AJAX call
    echo json_encode($data);
}

// Saving Grant Post
if(isset($_POST['grants'])) if($_POST['grants']) {
    $agency    = stripslashes(trim($_POST['agency']));
    $grant    =stripslashes(trim($_POST['gname']));
    $gpost =stripslashes(trim($_POST['gposted']));
    $gloc  =stripslashes(trim($_POST['gloc']));
    $cat   =stripslashes(trim($_POST['cat']));
    $budget  =stripslashes(trim($_POST['budget']));
    $gdetail =stripslashes(trim($_POST['gdetail']));
    $gdeadline =$_POST['gdeadline'];
    $gimage = addslashes(file_get_contents($_FILES['gimage']['tmp_name']));
    $image_name = addslashes($_FILES['gimage']['name']);
    $image_size = getimagesize($_FILES['gimage']['tmp_name']);

                move_uploaded_file($_FILES["gimage"]["tmp_name"], "uploads/" . $_FILES["gimage"]["name"]);
                $thumbnails = "uploads/" . $_FILES["gimage"]["name"];

    if (empty($agency)) {
        $errors['agency'] = 'Agency name is required.';
    }
    if (empty($grant)) {
        $errors['gname'] = 'Grant is required.';
    }
    if (empty($gpost)) {
        $errors['gposted'] = 'Date Posted is required.';
    }
    if (empty($gloc)) {
        $errors['gloc'] = 'Location is required.';
    }
    if (empty($cat)) {
        $errors['cat'] = 'Grant Category is required.';
    }
    if (empty($budget)) {
        $errors['budget'] = 'Budget is required.';
    }
    if (empty($gdetail)) {
        $errors['gdetail'] = 'Details is required.';
    }
    if (empty($gdeadline)) {
        $errors['gdeadline'] = ' Grant Deadline is required.';
    }
    if (empty($gimage)) {
        $errors['gimage'] = 'Image is required.';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $json = array();
                      
           $query = 'INSERT INTO grants VALUES 
           (null, "'.$agency.'", "'.$grant.'", "'.$gpost.'","'.$gloc.'", "'.$cat.'", "'.$budget.'", "'.$gdetail.'", "'.$gdeadline.'", "'.$thumbnails.'" )';

if($db->query($query) == TRUE){
          $data['success'] = true;
        $data['message'] = 'Congratulations. Your message has been sent successfully';

     }else{
          $data['success'] = false;
         $data['errors']  = "error in inserting in the db";
         echo mysqli_error($db);
     }
        
       
    }
    // return all our data to an AJAX call
    echo json_encode($data);
}

// Saving Expert Post
if(isset($_POST['experts'])) if($_POST['experts']) {
    $ename    = stripslashes(trim($_POST['ename']));
    $experience   =stripslashes(trim($_POST['eexp']));
    $citizen =stripslashes(trim($_POST['citizen']));
    $degree  =stripslashes(trim($_POST['degree']));
    $eimage = addslashes(file_get_contents($_FILES['eimage']['tmp_name']));
    $image_name = addslashes($_FILES['eimage']['name']);
    $image_size = getimagesize($_FILES['eimage']['tmp_name']);

                move_uploaded_file($_FILES["eimage"]["tmp_name"], "uploads/" . $_FILES["eimage"]["name"]);
                $thumbnails = "uploads/" . $_FILES["eimage"]["name"];
    $cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
    $cv_name = addslashes($_FILES['cv']['name']);
                $cv_size = getimagesize($_FILES['cv']['tmp_name']);
                move_uploaded_file($_FILES["cv"]["tmp_name"], "cvuploads/" . $_FILES["cv"]["name"]);
               $cvthumbnails = "cvuploads/" . $_FILES["cv"]["name"];
    if (empty($ename)) {
        $errors['ename'] = 'Expert name is required.';
    }
    if (empty($experience)) {
        $errors['eexp'] = 'Experience is required.';
    }
    if (empty($citizen)) {
        $errors['citizen'] = 'Citizenship is required.';
    }
    if (empty($degree)) {
        $errors['degree'] = 'Education Level is required.';
    }
    if (empty($eimage)) {
        $errors['eimage'] = 'Expert Photo is required.';
    }
    if (empty($cv)) {
        $errors['cv'] = 'CV is required.';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $json = array();
                      
           $query = 'INSERT INTO experts VALUES 
           (null, "'.$ename.'", "'.$experience.'", "'.$citizen.'","'.$degree.'", "'.$cvthumbnails.'", "'.$thumbnails.'")';

if($db->query($query) == TRUE){
          $data['success'] = true;
        $data['message'] = 'Congratulations. Your message has been sent successfully';

     }else{
          $data['success'] = false;
         $data['errors']  = "error in inserting in the db";
         echo mysqli_error($db);
     }
        
       
    }
    // return all our data to an AJAX call
    echo json_encode($data);
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
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
     <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
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
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

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


  <!-- Blog-area -->
    
      <!-- Contact-Area -->
    <section class="section-padding" id="contact-area">
        <div class="contact-area">
            <div class="container">
               <div class="row">
                    <div class="col-xs-12 col-md-12">
					<div class="page-title">
                            <h3 class="bar-title">Devanalyst Posts.</h3>
                        </div>
                        <div class="contact-form">
                            <!-- <form   action="blog.php" method="post" enctype="multipart/form-data">
                                <div class="form-double">
                                    <input type="text" id="form-name" name="blogTitle" placeholder="blog Title" required="required">
                                    <input type="file" name="image" placeholder="select image">
                                </div>
                                <div class="form-double">
                                    <input type="date" name="date" style="width: calc(50% - 15px);float:left;outline:none;padding: 15px; margin-bottom: 20px; width: 100%; display: block; border: none; border-bottom: 1px solid #e8e8e8;"  id="form-name" name="form-name" placeholder="Your Email" required="required">
                                   
                                </div>
                                <textarea  name="message" id="form-message" rows="2" maxlength="100" required="required" placeholder="Blog Message"></textarea>
                                <input type="submit" name="blog" class="bttn bttn-primary" value="Send Now">
                            </form> -->
                            <table class="table  table-responsive-md btn-table">
                            <tbody>
                              <tr>
                             
                                <td>
                                    <a href="?job"><button type="button" class="btn btn-outline-primary btn-lg m-0 waves-effect">Jobs</button></a>
                                    <a href="?grant"><button type="button" class="btn btn-outline-primary btn-lg m-0 waves-effect">Grants</button></a>
                                    <a href="?expert"><button type="button" class="btn btn-outline-primary btn-lg m-0 waves-effect">Experts</button></a>
                                </td>
                              
                              </tr>
                            
                            

                            </table>
                            <!-- MDB Form -->
                            <?php if(isset($_REQUEST["expert"])){ ?>
                                     <!-- Expert Posting -->
                                     <form action="posts.php" method="post" enctype="multipart/form-data" class="text-center border border-light p-5">
         
                                     <!-- <p class="h4 mb-4">Sign up</p> -->
         
                                     <div class="form-double">
                                             <!-- First name -->
                                             <input type="text" name="ename" id="defaultRegisterFormFirstName" class="form-control" placeholder="ExpertName" required="required">
                                             <!-- Last name -->
                                             <input type="text" name="eexp" id="defaultRegisterFormLastName" class="form-control" placeholder="Experience" required="required">
                                     </div>
         
                                     <div class="form-double">
                                             <!-- E-mail -->
                                             <input type="text" name="citizen" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Citizenship" required="required">
                                             <!-- E-mail -->
                                             <input type="text" name="degree" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Education Level" required="required">
                                     </div> 
                                     <div class="row">   
                                             
                                             <div class="column">
                                                <!-- image -->
                                                <label class="form-text text-muted mb-4" style="float:left">Expert Photo:</label>
                                                <input type="file" name="eimage" placeholder="select image" required="required">  
                                             </div>
                                             <!-- <div class="column"> -->
                                                <!-- CV -->
                                                <label class="form-text text-muted mb-4" style="float:left">Expert CV:</label>
                                                <input type="file" name="cv" placeholder="select CV" required="required">
                                             <!-- </div> -->
                                            
                                     </div>
                            
                                     <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                    Verify these details Please!!!
                                     </small>
         
                                     <!-- Sign up button --><br />
                                <input type="submit" name="experts" class="bttn bttn-primary" value="Submit">
         
                                     </form>
                         <?php   }elseif(isset($_REQUEST["grant"])){ ?>
                                <!-- Grant Posts -->
                                <form action="posts.php" method="post" class="text-center border border-light p-5" enctype="multipart/form-data">
    
                                <!-- <p class="h4 mb-4">Sign up</p> -->
    
                                <div class="form-double">
                                        <!-- First name -->
                                        <input type="text" name="gname" id="defaultRegisterFormFirstName" class="form-control" placeholder="grant" required="required">
                                        <!-- Last name -->
                                        <input type="text" name="agency" id="defaultRegisterFormLastName" class="form-control" placeholder="Organization/ Agency" required="required">
                                </div>
    
                                <div class="form-double">
                                        <!-- E-mail -->
                                        <input type="text" name="gloc" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Location" required="required">
                                        <!-- E-mail -->
                                        <input type="text" name="cat" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Catergory" required="required">
                                </div>    
    
                                <div class="form-double">
                                        <!-- E-mail -->
                                        <input type="text" name="budget" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Budget" required="required">
                                        <!-- E-mail -->
                                        <div class="row">
                                                <div class="column" style="float: left;">
                                                    <!-- E-mail -->
                                                    <label class="form-text text-muted mb-4">Posted:</label>
                                                    <input type="date" name="gposted" id="defaultRegisterFormEmail" class="form-control mb-2" placeholder="posted" required="required">
                                                </div>
                                                <div class="column-inner" style="float: right;">
                                                    <!-- E-mail -->
                                                <label class="form-text text-muted mb-4">Deadline:</label>
                                                    <input type="date" name="gdeadline" id="defaultRegisterFormEmail" class="form-control mb-2" placeholder="deadline" required="required">

                                                </div>

                                            </div>
                                </div>
    
                                <!-- Password -->
                                <textarea name="gdetail" id="defaultRegisterFormPassword" class="form-control" placeholder="Details..." aria-describedby="defaultRegisterFormPasswordHelpBlock" width=80%></textarea>
                                  <!-- image -->
                                  <label class="form-text text-muted mb-4" style="float:left">Agency Logo:</label>
                                  <input type="file" name="gimage" placeholder="select image"required="required">  <br />
                                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                    Verify these details Please!!!
                                </small>
    
                                <!-- Sign up button --><br />
                                <input type="submit" name="grants" class="bttn bttn-primary" value="Submit">
    
                                </form>
    
                        <?php    }else{ ?>
                                <!-- Job Posting -->
                                <form   action="posts.php" method="post" class="text-center border border-light p-5" enctype="multipart/form-data">
    
                                <!-- <p class="h4 mb-4">Sign up</p> -->
    
                                <div class="form-double">
                                        <!-- First name -->
                                        <input type="text" name="job" id="defaultRegisterFormFirstName" class="form-control" placeholder="job" required="required">
                                        <!-- Last name -->
                                        <input type="text" name="org" id="defaultRegisterFormLastName" class="form-control" placeholder="Organization" required="required">
                                </div>
    
                                <div class="form-double">
                                        <!-- E-mail -->
                                        <input type="text" name="jloc" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Location" required="required">
                                        <!-- E-mail -->
                                        <input type="text" name="type" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Job Type" required="required">
                                </div>    
    
                                <div class="form-double">
                                        <!-- E-mail -->
                                        <input type="text" name="jexp" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="experience" required="required">
                                        <!-- E-mail -->

                                        <div >
                                            <div class="row">
                                                <div class="column" style="float: left;">
                                                    <!-- E-mail -->
                                                    <label class="form-text text-muted mb-4">Posted:</label>
                                                    <input type="date" name="jposted" id="defaultRegisterFormEmail" class="form-control mb-2" placeholder="deadline" required="required">
                                                </div>
                                                <div class="column-inner" style="float: right;">
                                                    <!-- E-mail -->
                                                <label class="form-text text-muted mb-4">Deadline:</label>
                                                    <input type="date" name="jdeadline" id="defaultRegisterFormEmail" class="form-control mb-2" placeholder="deadline" required="required">

                                                </div>

                                            </div>
                                        </div>
                                        
                                        
                                        <div style="float: right;">
                                        </div>
                                       
                                </div>
                                <label class="form-text text-muted mb-4" style="float:left">Company Logo:</label>
                                <input type="file" name="image" placeholder="select image" required="required">
                                <!-- Password -->
                                <textarea name="jdetail" id="defaultRegisterFormPassword" class="form-control" placeholder="Details..." aria-describedby="defaultRegisterFormPasswordHelpBlock"></textarea>
                       
                                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                Verify these details Please!!!
                                </small>
    
                                <!-- Sign up button --><br />
                                <input type="submit" name="jobs" class="bttn bttn-primary" value="Submit">
    
                            
                        <?php   
                  
                    
                    } ?>
                            </form>
                            <!-- Default form register -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>


	

   
    <!-- Contact-Area / -->
    <div id="maps"></div>


  <!-- Footer
 ================================================== -->
 <?php include_once("footer-area.php"); ?>
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