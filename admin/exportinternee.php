<?php require_once("includes/db.php"); ?>
<?php require_once("includes/Functions.php");?>
<?php require_once("includes/Sessions.php"); ?>

<?php 
$_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];
Confirm_Login();
 ?>

<?php
    global $DBConnection;
    $sql = "SELECT * FROM interness ORDER BY id desc";
    $Execute =$DBConnection->query($sql);


        $html='<table><tr><th>No:</th><th>Name</th><th>Email</th><th>Number</th><th>Job Applied</th><th>Internee Description</th></tr>';

    $SrNo = 0;
    while ($DataRows=$Execute->fetch()) {
        $InterneeId = $DataRows["id"];
        $Name= $DataRows["interneename"];
        $Email= $DataRows["email"];
        $Number= $DataRows["interneenumber"];
        $Jobapplied=  $DataRows["interneeCategory"];
        $Interneefile= $DataRows["interneefile"];
        $Interneedesc= $DataRows["interneedesc"]; 

        $SrNo++;    

        $html .='<tr><td>'.$SrNo.'</td><td>'.$Name.'</td><td>'.$Email.'</td><td>'.$Number.'</td><td>'.$Jobapplied.'</td><td>'.$Interneedesc.'</td></tr>';

    }
    $html .='</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment; filename=Internees.xls');
    echo $html;
?>