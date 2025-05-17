<?php require_once("includes/db.php"); ?>
<?php require_once("includes/Functions.php");?>
<?php require_once("includes/Sessions.php"); ?>

<?php
if (isset($_SESSION["User_Id"])) {
   Redirect_to("index.php");
 } 
  if (isset($_POST["submit"])) {
    $UserName = $_POST["Username"];
    $Password = $_POST["Password"];

    if(empty($UserName)||empty($Password)) {
      $_SESSION["ErrorMessage"]= "All fields must be filled out";
      Redirect_to("login.php");
      
    }
    else{
      //code for checking username and password from Database
      $Found_Account=login_Attempt($UserName,$Password);
      if ($Found_Account) 
      {
        $_SESSION["User_Id"]=$Found_Account["id"];
        $_SESSION["UserName"]=$Found_Account["username"];
        $_SESSION["AdminName"]=$Found_Account["aname"];
        $_SESSION["SuccessMessage"]= "Welcome ".$_SESSION["AdminName"]."!";
        if (isset($_SESSION["TrackingURL"])) {
          Redirect_to($_SESSION["TrackingURL"]);
        }
        else{
          Redirect_to("index.php");
        }
      }
      else
      {
        $_SESSION["ErrorMessage"]= "Incorrect UserName/Password";
        Redirect_to("login.php");
      }        
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/biclogo.jpeg" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h3 class="text-center"> Welcome To Buisness Incubation Center</h3>
              <div class="brand-logo text-center" >
                <img src="../images/biclogofooter.jpeg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form action="login.php" method="post"class="pt-3">
              <?php echo ErrorMessage();
                  echo SuccessMessage();
                  ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="Username" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="Password" id="Password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.php">SIGN IN</a> -->
                  <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
