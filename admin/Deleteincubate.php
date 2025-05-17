<?php require_once("includes/db.php"); ?>
<?php require_once("includes/Functions.php");?>
<?php require_once("includes/Sessions.php"); ?>
<?php 
$_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];
Confirm_Login();
 ?>

<?php

if (isset($_GET["id"])) {
	$SarchQueryParameter = $_GET["id"];
	global $DBConnection;
	$Admin = $_SESSION["AdminName"];
	$sql = "DELETE FROM incubates WHERE id='$SarchQueryParameter'";
	$Execute = $DBConnection->query($sql);
	if ($Execute) {	
		$_SESSION["SuccessMessage"]= "Incubates Deleted Successfully";
		Redirect_to("Allincubates.php");
			
	}
	else{
		$_SESSION["ErrorMessage"]= "Something Went Wrong. Try Again";
        Redirect_to("Allincubates.php");
	}
}



 ?>
