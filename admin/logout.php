<?php require_once("includes/Functions.php"); ?>
<?php require_once("includes/Sessions.php"); ?>

<?php
    $_SESSION["User_Id"]=null;
    $_SESSION["UserName"]=null;
    $_SESSION["AdminName"]=null;  
	session_destroy();
	Redirect_to("login.php");
?>