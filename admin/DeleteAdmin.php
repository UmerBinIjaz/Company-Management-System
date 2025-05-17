<?php require_once("includes/db.php"); ?>
<?php require_once("includes/Functions.php");?>
<?php require_once("includes/Sessions.php"); ?>
<?php Confirm_Login(); ?>

<?php 
if (isset($_GET["id"])) {
	$SarchQueryParameter = $_GET["id"];
	global $DBConnection;
	$Admin = $_SESSION["AdminName"];
	$sql = "DELETE FROM admin WHERE id='$SarchQueryParameter'";
	$Execute = $DBConnection->query($sql);
	if ($Execute) {
		$_SESSION["SuccessMessage"]= "Admin Deleted Successfully";
		Redirect_to("ManageUsers.php");
	}
	else{
		$_SESSION["ErrorMessage"]= "Something Went Wrong. Try Again";
        Redirect_to("ManageUsers.php");
	}
}



 ?>