<?php require_once("db.php"); ?>
<?php require_once("Sessions.php"); ?>
<?php 

function Redirect_to($New_Location){
	header("Location:".$New_Location);
	exit;
}

function CheckUserNameExistsOrNot($UserName){
	global $DBConnection;
	$sql = "SELECT username	FROM admin WHERE username=:userName";
	$stmt = $DBConnection->prepare($sql);
	$stmt->bindValue(':userName',$UserName);
	$stmt->execute();
	$Result =$stmt->rowcount();
	if ($Result==1){
		return true;
	}
	else{
		return false;
	}
}


function login_Attempt($UserName,$Password){
	  global $DBConnection;
      $sql= "SELECT * FROM admin WHERE username =:userName AND password =:password LIMIT 1";
      $stmt = $DBConnection->prepare($sql);
      $stmt->bindValue(':userName',$UserName);
      $stmt->bindValue(':password',$Password);
      $stmt->execute();
      $Result = $stmt->rowcount();
      if ($Result==1){
        return $Found_Account=$stmt->fetch();
      }
      else{
        return null;
      } 
}
function Confirm_Login(){
	if (isset($_SESSION["User_Id"])) {
		return true;
	}
	else{
		$_SESSION["ErrorMessage"]="Login Registered !";
		Redirect_to("http://localhost/Buisness%20Incubation%20Center/admin/login.php");
	}
}


