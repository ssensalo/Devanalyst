<?php 
include '../db.php';
include '../config.php';
mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));
$sub_name = "";
$sub_email = "";
$message = "";
if(isset($_POST["subscribe"])){
    $sub_name    = "Unknown";
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Devanalyst Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">

    <!-- start header -->
    <?php //include("../header.html"); ?>
    <!-- end header -->

    <section id="inner-headline">
      <div class="container">
                        <a class="navbar-brand"><img href="../index.php#home-area" src="../images/logoNew 1.jpg" alt="" width="150px" height="150px"></a>
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="../index.php">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Blog</li>
              </ul>
              <h2>Blogs</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span8">
              <?php  
              $query1 = 'SELECT *  FROM  blog  ORDER BY blog_id DESC';

                $result = mysqli_query($db, $query1);

                if($result){
                    while($row=mysqli_fetch_array($result)){
              ?>
            <article>
              <div class="row">

                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#"><?php echo $row['title'];?></a></h3>
                    </div>

                    <img class="img-rounded" alt="image-content" src="../<?php echo $row['image'];?>" alt="" />
                  </div>
                  <div class="meta-post">
                    <ul>
                      <li><i class="icon-picture"></i></li>
                      <li>By <a href="#" class="author">Admin</a></li>
                      <li>On <a href="#" class="date"><?php echo $row['date'];?></a></li>
                      <li>Tags: <a href="#">Design</a>, <a href="#">Blog</a></li>
                    </ul>
                  </div>
                  <div class="post-entry">
                    <p><?php echo $row['message'];?></p>
                    <!-- <a href="#" class="readmore">Read more <i class="icon-angle-right"></i></a> -->
                  </div>
                </div>
              </div>
            </article>
            <?php   
                            }
                        }
                            ?>


            <article>
              <div class="row">

                <div class="span8">
                  <div class="post-video">
                    <div class="post-heading">
                      <h3><a href="#">Getting Started with Devanalyst Web Hosting Services</a></h3>
                    </div>
                    <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xlUbOVcZrHM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="meta-post">
                    <ul>
                      <li><i class="icon-facetime-video"></i></li>
                      <li>By <a href="#" class="author">Admin</a></li>
                      <li>On <a href="#" class="date">2017/05/23 </a></li>
                      <li>Tags: <a href="#">Published</a>, <a href="#">Blog</a></li>
                    </ul>
                  </div>
                  <div class="post-entry">
                    <p>
This is a video demo showing how to register adomain with our portal, add hosting there and get the domain up and running in just few minutes. for free domains and hosting please visit <a href="https://www.devanalyst.org/" style="color:blue; text-decoraltion:underlined;">devanalyst.org</a> we offer unlimited email accounts, bandwidth, unlimited space, unlimited sub-domains and our services have 99.9% uptime.. Just register an account with us and let everything go smoothly.
                    </p>
                    <!-- <a href="#" class="readmore">Read more <i class="icon-angle-right"></i></a> -->
                  </div>
                </div>
              </div>
            </article>


            <!-- PAGE PAGINATION -->
            <!-- <div id="pagination">
              <span class="all">Page 1 of 3</span>
              <span class="current">1</span>
              <a href="#" class="inactive">2</a>
              <a href="#" class="inactive">3</a>
            </div> -->
          </div>

          <div class="span4">

            <aside class="right-sidebar">
            <!-- FOR FEATURE RELEASE
          ==========SEARCH-BAR===========  -->
              <!-- <div class="widget">
                <form>
                  <div class="input-append">
                    <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
                    <button class="btn btn-theme" type="submit">Search</button>
                  </div>
                </form>
              </div> -->

              <!-- =========CATERGORIES========== -->
              <!-- <div class="widget">

                <h5 class="widgetheading">Categories</h5>

                <ul class="cat">
                  <li><i class="icon-angle-right"></i> <a href="#">Web design</a><span> (20)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Online business</a><span> (11)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Marketing strategy</a><span> (9)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Technology</a><span> (12)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">About finance</a><span> (18)</span></li>
                </ul>
              </div> -->

              <div class="widget">
                <div class="tabs">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab"><i class="icon-star"></i> Popular</a></li>
                    <li><a href="#two" data-toggle="tab">Recent</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="one">
                      <ul class="popular">
              <?php  
              $query1 = 'SELECT *  FROM  blog  ORDER BY blog_id DESC limit 3';

                $result = mysqli_query($db, $query1);

                if($result){
                    while($row=mysqli_fetch_array($result)){
              ?>
                        <li>
                          <img src="../<?php echo $row['thumb'];?>" alt="" class="thumbnail pull-left" />
                          <p><a href="#"><?php echo $row['title'];?></a></p>
                          <span><?php echo $row['date'];?></span>
                        </li>
            <?php   
                            }
                        }
                            ?>
                      </ul>
                    </div>
                    <div class="tab-pane" id="two">
                      <ul class="recent">
              <?php  
              $query1 = 'SELECT *  FROM  blog  ORDER BY blog_id DESC limit 3';

                $result = mysqli_query($db, $query1);

                if($result){
                    while($row=mysqli_fetch_array($result)){
              ?>
                        <li>
                          <p><a href="#"><?php echo $row['title'];?></a></p>
                        </li>
            <?php   
                            }
                        }
                            ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="widget">

                <!-- <h5 class="widgetheading">Video widget</h5> -->
                <div class="video-container">
                  
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xlUbOVcZrHM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>

              <!-- <div class="widget">
                <h5 class="widgetheading">Flickr photostream</h5>
                <div class="flickr_badge">
                  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                </div>
                <div class="clear"></div>
              </div>
              <div class="widget"> -->

                <!-- <h5 class="widgetheading">Text widget</h5> -->
                <p>
                  <blockquote>THE DEVELOPMENT ANALYST LTD INTERNATIONAL.</blockquote>
                Is a leading Strategic Management, Governance, Development Communications, Public Relations and Marketing  and Monitoring and Evaluation consultancy firm in the region.
                </p>

              </div>
            </aside>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="https://www.devanalyst.org">Our company</a></li>
                <li><a href="../hosting.php">Web Hosting</a></li>
                <li><a href="../agribusiness.php">Agribusiness</a></li>
                <li><a href="../team.php">Our Team</a></li>
                <li><a href="../aid.php">Dev Aid</a></li>
                <li><a href="../contact.php#contact-area">Our support forum</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Get in touch</h5>
              <address>
              <strong>The Development Analyst</strong><br>
               <p>P.O Box 26162,<br /> Block 28, Plot 951/952 Bombo Road, Opposite Kubiri Round-About <br/> (Former URA Building Lvl 3)<br/> Kampala, Uganda<br/>
               
						</address>
              <p>
                <i class="icon-phone"></i>+256-776 895 620<br /> <i class="icon-phone"></i>+256-754 896 405<br /> <i class="icon-phone"></i>+256-756 528 176<br />
                <i class="icon-envelope-alt"></i> info@devanalyst.org
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Subscribe newsletter</h5>
              <p>
                Keep updated for new releases and freebies. Enter your e-mail and subscribe to our newsletter.
              </p>
              <form class="subscribe" method="POST" action="posts.php">
                <div class="input-append">
                  <input class="span2" id="appendedInputButton" type="text" name="sub_email" required>
                  <button class="btn btn-theme" onclick="myFunction()" type="submit" name="subscribe" >Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; The Development Analyst. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
                Designed by <a href="https://devanalyst.org/">Devanalyst</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER -->
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script>
    function myFunction() {
      alert("Thank You for Subscribing to our newsletter.");
    }
  </script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>


</body>

</html>
