<?php require_once("admin/includes/DB.php"); ?>
<?php require_once("admin/includes/Functions.php"); ?>
<?php require_once("admin/includes/Sessions.php"); ?>


<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Edubin - LMS Education HTML Template</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/biclogo.jpeg" type="image/jpeg">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="images/all-icon/map.png" alt="icon"><span>QAU, Islamabad</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>bic@qau.edu.pk</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Opening Hours : Monday to Saturay - 8 Am to 4 Pm</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/biclogo.jpeg" width="150px" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>### ####-####</span>
                                </div>
                            </div>
                            <div class="button float-left">
                                <a href="Apply.php" class="main-btn">Apply Now</a>a>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-11 col-10">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php">About</a>
                                        <ul class="sub-menu">
                                            <li><a href="Companies.php">Companies</a></li>      
                                            <li><a href="Mentors.php">Mentors & Advisors</a></li>
                                            <li><a href="Partner.php">partnerss</a></li>  
                                            <li><a href="Team.php">Team</a></li>                                
                                        </ul>                                         
                                    </li>

                                    <li class="nav-item">
                                        <a href="Aim.php">Aim</a>
<!--                                         <ul class="sub-menu">
                                            <li><a href="courses.php">Courses</a></li>
                                            <li><a href="courses-singel.php">Course Singel</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item">
                                        <a href="objective.php">Objectives</a>
<!--                                         <ul class="sub-menu">
                                            <li><a href="events.php">Events</a></li>
                                            <li><a href="events-singel.php">Event Singel</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item">
                                        <a href="services.php">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Startup.php">Start Up</a>
                                    </li>
                        <li class="nav-item">
                            <a href="gallery.php">Gallery</a>
                        </li>
                                    <li class="nav-item">
                            <a class="active" href="Progress.php?page=1">Latest News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Apply.php" class="apply-link">Apply Now</a>
                                        <ul class="sub-menu">
                                            <li><a href="Apply-INC.php">Apply For Incubation</a></li>
                                            <li><a href="Apply-INT.php">Apply for Internship</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                              <?php

                                global $DBConnection;
                                if(isset($_GET["SearchButton"])) {
                                $Search = $_GET["Search"];
                                $sql = "SELECT * From posts 
                                WHERE datetime LIKE :search 
                                OR title LIKE :search 
                                OR category LIKE :search 
                                OR post LIKE :search";
                                $stmt = $DBConnection->prepare($sql);
                                $stmt->bindValue(':search','%'.$Search.'%');
                                $Execute=$stmt->execute();
                                }           

                            //The default sql query
                            else {
                                $IdFromURL = $_GET["id"];
                                if (!isset($IdFromURL)) {
                                $_SESSION['ErrorMessage']="Bad Request";
                                Redirect_to("MyBlog.php");
                                }
                                $sql = "SELECT * From posts WHERE id= '$IdFromURL'";
                                $stmt = $DBConnection->query($sql);                       
                                }
                            

                            while ($DataRows = $stmt->fetch()) {
                                $Id = $DataRows["id"];
                                $DateTime = $DataRows["datetime"];
                                $PostTitle = $DataRows["title"];
                                $Category = $DataRows["category"];
                                $Admin = $DataRows["author"];
                                // $url=$_POST['img_url'];
                                $Image = $DataRows["image"];
                                $PostDescription = $DataRows["post"];            
                            ?>                        
                            <h3>
                                <?php 
                                    // if (strlen($PostTitle)>50) {
                                    // $PostTitle = substr($PostTitle,0,50).'........';
                                    // } 
                                    // echo strip_tags($PostTitle);
                                    //echo htmlspecialchars_decode($PostDescription); 
                                    echo htmlentities($PostTitle);
                                ?>  
                            </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlentities($PostTitle); ?></li>
                            </ol>
                        </nav>
                        <?php } ?>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== BLOG PART START ======-->
    
    <section id="blog-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
              <div class="col-lg-8">
                  <div class="blog-details mt-30">
                              <?php

                                global $DBConnection;
                                if(isset($_GET["SearchButton"])) {
                                $Search = $_GET["Search"];
                                $sql = "SELECT * From posts 
                                WHERE datetime LIKE :search 
                                OR title LIKE :search 
                                OR category LIKE :search 
                                OR post LIKE :search";
                                $stmt = $DBConnection->prepare($sql);
                                $stmt->bindValue(':search','%'.$Search.'%');
                                $Execute=$stmt->execute();
                                }           

                            //The default sql query
                            else {
                                $IdFromURL = $_GET["id"];
                                if (!isset($IdFromURL)) {
                                $_SESSION['ErrorMessage']="Bad Request";
                                Redirect_to("MyBlog.php");
                                }
                                $sql = "SELECT * From posts WHERE id= '$IdFromURL'";
                                $stmt = $DBConnection->query($sql);                       
                                }
                            

                            while ($DataRows = $stmt->fetch()) {
                                $Id = $DataRows["id"];
                                $DateTime = $DataRows["datetime"];
                                $PostTitle = $DataRows["title"];
                                $Category = $DataRows["category"];
                                $Admin = $DataRows["author"];
                                // $url=$_POST['img_url'];
                                $Image = $DataRows["image"];
                                $PostDescription = $DataRows["post"];            
                            ?>
                      <div class="thum">
                          <img src="admin/Uploads/<?php echo htmlentities($Image); ?>" alt="Blog Details">
                      </div>
                      <div class="cont">
                          <h3><?php echo htmlentities($PostTitle); ?></h3>
                          <ul>
                               <li><a href="#"><i class="fa fa-calendar"></i><?php echo htmlentities($DateTime); ?></a></li>
                               <li><a href="#"><i class="fa fa-user"></i><?php echo htmlentities($Admin); ?></a></li>
                               <li><a href="#"><i class="fa fa-tags"></i><?php echo htmlentities($Category); ?></a></li>
                           </ul>
                           <p> <?php echo htmlspecialchars_decode($PostDescription) ?>
 
                           </p>
                           <!-- <ul class="share">
                               <li class="title">Share :</li>
                               <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           </ul> -->
                           <div class="blog-comment pt-45">
                               <div class="title pb-15">
                                   <h3>Comment (3)</h3>
                               </div>  <!-- title -->
                               <ul>
                                   <li>
                                       <div class="comment">
                                           <div class="comment-author">
                                                <div class="author-thum">
                                                    <img src="images/review/r-1.jpg" alt="Reviews">
                                                </div>
                                                <div class="comment-name">
                                                    <h6>Bobby Aktar</h6>
                                                    <span>April 03, 2019</span>
                                                </div>
                                            </div>
                                            <div class="comment-description pt-20">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                            </div>
                                            <div class="comment-replay">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div> <!-- comment -->
                                        <ul class="replay">
                                           <li>
                                               <div class="comment">
                                                   <div class="comment-author">
                                                        <div class="author-thum">
                                                            <img src="images/review/r-2.jpg" alt="Reviews">
                                                        </div>
                                                        <div class="comment-name">
                                                            <h6>Humayun Ahmed</h6>
                                                            <span>April 03, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="comment-description pt-20">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                                    </div>
                                                    <div class="comment-replay">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div> <!-- comment -->
                                           </li>
                                       </ul>
                                   </li>
                                   <li>
                                       <div class="comment">
                                           <div class="comment-author">
                                                <div class="author-thum">
                                                    <img src="images/review/r-3.jpg" alt="Reviews">
                                                </div>
                                                <div class="comment-name">
                                                    <h6>Bobby Aktar</h6>
                                                    <span>April 03, 2019</span>
                                                </div>
                                            </div>
                                            <div class="comment-description pt-20">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                            </div>
                                            <div class="comment-replay">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div> <!-- comment -->
                                   </li>
                               </ul>
                               <div class="title pt-45 pb-25">
                                   <h3>Leave a comment</h3>
                               </div> <!-- title -->
                               <div class="comment-form">
                                   <form action="#">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <div class="form-singel">
                                                   <input type="text" placeholder="Name">
                                               </div> <!-- form singel -->
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-singel">
                                                   <input type="email" placeholder="email">
                                               </div> <!-- form singel -->
                                           </div>
                                           <div class="col-md-12">
                                               <div class="form-singel">
                                                   <textarea placeholder="Comment"></textarea>
                                               </div> <!-- form singel -->
                                           </div>
                                           <div class="col-md-12">
                                               <div class="form-singel">
                                                   <button class="main-btn">Submit</button>
                                               </div> <!-- form singel -->
                                           </div>
                                       </div> <!-- row -->
                                   </form>
                               </div>  <!-- comment-form -->
                           </div> <!-- blog comment -->          
                      </div> <!-- cont -->
                      <?php } ?>
            
                  </div> <!-- blog details -->
              </div>
              <div class="col-lg-4">
                   <div class="saidbar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-search mt-30">
                                <form class="d-flex">
                                        <input class="form-control me-2" type="text" name="Search" placeholder="Search here" value="">
                                        <button class="btn btn-outline-primary" name="SearchButton"><i  name="SearchButton" class="fa fa-search"></i></button>
                                    </form>
                               </div> <!-- saidbar search -->
                               <div class="categories mt-30">
                                   <h4>Categories</h4>
                                   <ul>

                                        
                                        <?php
                                            //Featching Categories From Database
                                            global $DBConnection;
                                            $sql = "SELECT * From category";
                                            $stmt = $DBConnection->query($sql);  

                                        while ($DataRows = $stmt->fetch()) {
                                            $title = $DataRows["title"];
            
                                        ?>
                                        <li><a href="Progress.php?category=<?php echo htmlentities($title); ?>"><?php echo htmlentities($title); ?></a></li>   
                                        <?php } ?>
                                        <!-- <li><a href="#">Business idea Competition</a></li>
                                        <li><a href="#">Digital Products</a></li>
                                        <li><a href="#">Science & Technology</a></li>
                                        <li><a href="#">Training and Workshops</a></li> -->
                                   </ul>
                               </div>
                           </div> <!-- categories -->
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-post mt-30">
                                   <h4>Popular Posts</h4>
                                   <ul>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                    <div class="thum">
                                                        <img src="images/blog/blog-post/bp-1.jpg" alt="Blog">
                                                    </div>
                                                    <div class="cont">
                                                        <h6>Fourth position out of 10 in IOBM and win 0.5 million PKR.</h6>
                                                        <span>1st June 2022</span>
                                                    </div>
                                                </div> <!-- singel post -->
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                    <div class="thum">
                                                        <img src="images/blog/blog-post/bp-2.jpg" alt="Blog">
                                                    </div>
                                                    <div class="cont">
                                                        <h6>1st Position out of 90 and win 0.1 millions PKR</h6>
                                                        <span>10 May 2022</span>
                                                    </div>
                                                </div> <!-- singel post -->
                                            </a>
                                       </li>

                                   </ul>
                               </div> <!-- saidbar post --> <!-- saidbar post -->
                           </div>
                       </div> <!-- row -->
                   </div> <!-- saidbar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BLOG PART ENDS ======-->

    <!--====== Footer PART START ======-->
    <!--====== FOOTER PART START ======-->
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="images/logo-2.png" class="rounded-circle" width="120px" alt="Logo"></a>
                            </div>
                            <p>BIC of Quaid i Azam university  is a one of the most popular Incubation Center in Pakistan, where student emplement their Idea and use the skill of skill full students and transfer their k nowledge to the new internee in a better way.</p>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index.php"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="about.php"><i class="fa fa-angle-right"></i>About</a></li>
                                <li><a href="Aim.php"><i class="fa fa-angle-right"></i>Aim</a></li>
                                <li><a href="objective.php"><i class="fa fa-angle-right"></i>Objectives</a></li>
                                <li><a href="services.php"><i class="fa fa-angle-right"></i>Services</a></li>
                            </ul>
<!--                             <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                <li><a href="shop.php"><i class="fa fa-angle-right"></i>Shop</a></li>
                                <li><a href="teachers.php"><i class="fa fa-angle-right"></i>Teachers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
                            </ul> -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>QAU, Islamabad</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>### ####-####</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>bic@qau.edu.pk</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-md-left text-center pt-15">
<!--                             <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </p> -->
                            <p class="text-center">Developed By Digital smart solution</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                           
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>
</html>     