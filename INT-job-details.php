<?php require_once("admin/includes/DB.php"); ?>
<?php require_once("admin/includes/Functions.php"); ?>
<?php require_once("admin/includes/Sessions.php"); ?>
<?php 

$SarchQueryParameter = $_GET["id"]; 

if (isset($_POST["submit"])) {
    $interneename = $_POST["interneename"];
    $email = $_POST["email"];
    $interneenumber = $_POST["interneenumber"];
    $interneeCategory = $_POST["interneeCategory"];
    $interneefile = $_FILES['interneefile']['name'];
    $Target = "Uploads/internees/".basename($_FILES['interneefile']['name']);
    $interneedesc = $_POST["interneedesc"];

    // $interneefile = $_POST["interneefile"];


    if(empty($interneename)||empty($email)||empty($interneenumber)||empty($interneeCategory)||empty($interneefile)||empty($interneedesc)){
        $_SESSION["ErrorMessage"]= "All fields must be filled out";
        Redirect_to("INT-job-details.php?id={$SarchQueryParameter}");  
    }
    else{
        
        // Query to insert category in DB when everything is fine
        global $DBConnection;
        $sql = "INSERT INTO Interness(interneename,email,interneenumber,interneeCategory,interneefile,interneedesc)";
        $sql .= "VALUES(:interneename,:email,:interneenumber,:interneeCategory,:interneefile,:interneedesc)";
        $stmt = $DBConnection->prepare($sql);
        $stmt->bindValue(':interneename',$interneename);
        $stmt->bindValue(':email',$email);
        $stmt->bindValue(':interneenumber',$interneenumber);
        $stmt->bindValue(':interneeCategory',$interneeCategory);
        $stmt->bindValue(':interneefile',$interneefile);
        $stmt->bindValue(':interneedesc',$interneedesc);
        $Execute=$stmt->execute();
        move_uploaded_file($_FILES["interneefile"]["tmp_name"],$Target);


        if ($Execute) {
            $_SESSION["SuccessMessage"]= "You successfully apply for this job";
            Redirect_to("INT-job-details.php?id={$SarchQueryParameter}");          
          }
    
          else {
            $_SESSION["ErrorMessage"]= "Something went wrong. Try Again !";
            Redirect_to("INT-job-details.php?id={$SarchQueryParameter}");          
          }


    }




}
?>
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

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
                            <p>Opening Hours : Monday to Friday - 8 Am to 4 Pm</p>
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
                                <a href="Apply.php" class="main-btn">Apply Now</a>
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
                                        <a  href="index.php">Home</a>
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
                                        <a href="Progress.php?page=1">Latest News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Apply.php" class="apply-link active">Apply Now</a>
                                        <ul class="sub-menu">
                                            <li><a href="Apply-INC.php">Apply For Incubation</a></li>
                                            <li><a href="Apply-INT.php">Apply for Internship</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <!-- <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon">
                        <div class="button float-left">
                                <a href="#" class="main-btn my-1">Apply Now</a>
                            </div>
                        </div>
                    </div> -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Apply Now</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <!-- <li class="breadcrumb-item"><a href="#">About</a></li> -->
                                <!-- <li class="breadcrumb-item active" aria-current="page">Team</li> -->
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->


    <!-- bradcam_area  -->
    <!-- <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Software Engineer</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/ bradcam_area  -->


    <!--====== JOB DETAILS PAGE START ======-->
    <section class="Job-details">
        <div class="job_details_area">
            <?php
                global $DBConnection;
                $IdFromURL = $_GET["id"];
                $sql = "SELECT * From intcategory WHERE id= '$IdFromURL'";
                $stmt = $DBConnection->query($sql);  
                while ($DataRows = $stmt->fetch()) {
                    $Id = $DataRows["id"];
                    $INTCategoryTitle = $DataRows["title"];
                    $Titleshortform = $DataRows["shortform"];
                    $Admin = $DataRows["author"];
                    $DateTime = $DataRows["datetime"];
                    $INTEligible = $DataRows["eligibility"];
                    $INTSalary = $DataRows["salary"];
                    $JobLocation = $DataRows["joblocation"];
                    $Vacancy = $DataRows["vacancy"];
                    $JObNature = $DataRows ["Job"];
                    $INTlastdate = $DataRows["lastdate"];
                    $INTexpreq = $DataRows["expreq"];
                    $INTjobdesc = $DataRows["jobdecs"];


            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="job_details_header">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <!-- <div class="thumb">
                                    <img src="img/svg_icon/1.svg" alt="">
                                    </div> -->
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">    
                                        <?php echo htmlentities($Titleshortform)?>
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="#"><h4><?php echo htmlentities($INTCategoryTitle)?></h4></a>
                                        <div class="links_locat d-flex align-items-center">
                                            <div class="location">
                                                <p> <i class="fa fa-map-marker"></i> <?php echo htmlentities($JobLocation)?></p>
                                            </div>
                                            <div class="location">
                                                <p> <i class="fa fa-clock-o"></i><?php echo htmlentities($JObNature)?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="jobs_right">
                                    <div class="apply_now">
                                        <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="descript_wrap white-bg">
                            <div class="single_wrap">
                                <h4>Job description</h4>
                                <p><?php echo htmlspecialchars_decode($INTjobdesc); ?></p>
                            </div>
                            <!-- <div class="single_wrap">
                                <h4>Responsibility</h4>
                                <ul>
                                    <li>The applicants should have experience in the following areas.
                                    </li>
                                    <li>Have sound knowledge of commercial activities.</li>
                                    <li>Leadership, analytical, and problem-solving abilities.</li>
                                    <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                                </ul>
                            </div>
                            <div class="single_wrap">
                                <h4>Qualifications</h4>
                                <ul>
                                    <li>The applicants should have experience in the following areas.
                                    </li>
                                    <li>Have sound knowledge of commercial activities.</li>
                                    <li>Leadership, analytical, and problem-solving abilities.</li>
                                    <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                                </ul>
                            </div>
                            <div class="single_wrap">
                                <h4>Benefits</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                            </div> -->
                        </div>
                        <div class="apply_job_form white-bg">
                            <h4>Apply for the job</h4>
                            <?php echo ErrorMessage();
                  echo SuccessMessage();
                  ?>
                            <form action="INT-job-details.php?id=<?php echo $SarchQueryParameter?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input_field">
                                            <input type="text" name="interneename" placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input_field">
                                            <input type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input_field">
                                            <input type="text" name="interneenumber" placeholder="Your Number">
                                        </div>
                                    </div>
                                                                                                    
                                    <div class="col-md-12">
                                        <!-- <div class="input_field">
                                        <input type="text" name="interneenumber" placeholder="Your Number"> -->
                                            <select class="form-select" name="interneeCategory" aria-label="Default select example">
                                                <?php
                                                    global $DBConnection;
                                                    $IdFromURL = $_GET["id"];
                                                    $sql = "SELECT * From intcategory WHERE id= '$IdFromURL'";
                                                    $stmt = $DBConnection->query($sql);  
                                                    while ($DataRows = $stmt->fetch()) {
                                                        $Id = $DataRows["id"];
                                                        $INTCategoryTitle = $DataRows["title"];
                                                        $Titleshortform = $DataRows["shortform"];
                                                        $Admin = $DataRows["author"];
                                                        $DateTime = $DataRows["datetime"];
                                                        $INTEligible = $DataRows["eligibility"];
                                                        $INTSalary = $DataRows["salary"];
                                                        $JobLocation = $DataRows["joblocation"];
                                                        $Vacancy = $DataRows["vacancy"];
                                                        $JObNature = $DataRows ["Job"];
                                                        $INTlastdate = $DataRows["lastdate"];
                                                        $INTexpreq = $DataRows["expreq"];
                                                        $INTjobdesc = $DataRows["jobdecs"];
                                                ?>

                                                <option selected><?php echo $INTCategoryTitle?></option>
                                                <?php } ?>
                                            </select>
                                        <!-- </div>     -->
                                    </div>
                                    
                                    <div class="col-md-12 my-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <button type="button" id="inputGroupFileAddon03"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                            </button>
                                            </div>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="interneefile" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                            <label class="custom-file-label" for="inputGroupFile03">Upload CV</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input_field">
                                        <textarea class="form-control" id="Post" name="interneedesc" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="submit_btn">
                                        <button type="submit" class="main-btn" name="submit">Apply Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="job_sumary">
                            <div class="summery_header">
                                <h3>Job Summery</h3>
                            </div>
                            <div class="job_content">
                                <ul>
                                    <li>Published on: <span><?php echo htmlentities($DateTime)?></span></li>
                                    <li>Vacancy: <span><?php echo htmlentities($Vacancy)?></span></li>
                                    <li>Salary: <span><?php echo htmlentities($INTSalary)?></span></li>
                                    <li>Location: <span><?php echo htmlentities($JobLocation)?></span></li>
                                    <li>Job Nature: <span> <?php echo htmlentities($JObNature)?></span></li>
                                    <li>Experience Required: <span> <?php echo htmlentities($INTexpreq)?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="share_wrap d-flex">
                            <span>Share at:</span>
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i></a> </li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i></a> </li>
                                <li><a href="#"> <i class="fa fa-twitter"></i></a> </li>
                                <li><a href="#"> <i class="fa fa-envelope"></i></a> </li>
                            </ul>
                        </div>
    <!--                     <div class="job_location_wrap">
                            <div class="job_lok_inner">
                                <div id="map" style="height: 200px;"></div>
                                <script>
                                function initMap() {
                                    var uluru = {lat: -25.363, lng: 131.044};
                                    var grayStyles = [
                                    {
                                        featureType: "all",
                                        stylers: [
                                        { saturation: -90 },
                                        { lightness: 50 }
                                        ]
                                    },
                                    {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
                                    ];
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: -31.197, lng: 150.744},
                                    zoom: 9,
                                    styles: grayStyles,
                                    scrollwheel:  false
                                    });
                                }
                                
                                </script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
                                
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php }?>    
        </div>
    </section>
    <!--====== JOB DETAILS PAGE Ends ======-->





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