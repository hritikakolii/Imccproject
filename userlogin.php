<?php 
session_start();
include("db.php");

if(isset($_POST['sub']))
{
$emailid = $_POST['emailid'];
$password = $_POST['password'];


$res = mysqli_query($con,"select* from user_login where emailid='$emailid'and password='$password'");
$numRows = mysqli_num_rows($res);
//$_SESSION["emailid"]=$emailid;
if($numRows  == 1){
echo "You are login Successfully ";
header("location:userdashboard.php");   // create my-account.php page for redirection 	
}
else
{
	
	//echo "failed ";
	echo "<script type='text/javascript'>alert('Invalid Username or Password');location='userlogin.html';</script>";


}
}
?>
