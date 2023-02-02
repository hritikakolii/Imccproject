<?php 
include("db.php");

if(isset($_POST['sub']))
{
$patho_emailid = $_POST['patho_emailid'];
$patho_password = $_POST['patho_password'];


$res = mysqli_query($con,"select* from pathalogy_login where patho_emailid='$patho_emailid'and patho_password='$patho_password'");
$numRows = mysqli_num_rows($res);
if($numRows  == 1){
echo "You are login Successfully ";
header("location:pathalogydashboard.php");   // create my-account.php page for redirection 	
}
else
{
	echo "failed ";
}
}
?>


