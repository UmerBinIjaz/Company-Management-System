<?php require_once("../../includes/db.php"); ?>
<?php require_once("../../includes/Functions.php");?>
<?php require_once("../../includes/Sessions.php"); ?>
<?php //Confirm_Login(); ?>

<?php 
if (isset($_GET["id"])) {
	$SarchQueryParameter = $_GET["id"];
	global $ConnectingDB;
	$Admin = $_SESSION["AdminName"];
	$sql = "DELETE FROM subcategory WHERE id='$SarchQueryParameter'";
	$Execute = $ConnectingDB->query($sql);
	if ($Execute) {
		$_SESSION["SuccessMessage"]= "SubCategory Deleted Successfully";
		Redirect_to("ManageSubcategories.php");
	}
	else{
		$_SESSION["ErrorMessage"]= "Something Went Wrong. Try Again";
        Redirect_to("ManageSubcategories.php");
	}
}



 ?>