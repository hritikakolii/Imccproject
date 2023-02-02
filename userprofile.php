
<?php     //file to edit the estudent  details the href file of edit for user domain
session_start();
include('db.php');
$emailid=$_SESSION["emailid"];
	
	$query=mysqli_query($con,"select * from user_login where emailid=$emailid");
	$row=mysqli_fetch_array($query);
    
?>
<!DOCTYPE html>
<html>
<head>
    <style>
  input[type=text] {
  width: 23%;
  padding: 10px 20px;
  margin: 5px 0;
 border: 1px solid black; 
    font-family: cursive;
    font-size: 100%;
    font-size-adjust: auto;
}
input[type=submit] {
  width: 10%;
  padding: 12px 20px;
border: 1px solid #555;
 background-color: black;
 color:white;
    
}
           .button {
 width: 10%;
  padding: 12px 20px;
border: 1px solid #555;
 background-color: black;
 color:white;
               align-content: center;
}
           input[type=password] {
  width: 25%;
  padding: 10px 20px;
  margin: 5px 0;
 border: 1px solid black; 
}
         body  {
  background-image: url("new.jpg");
  background-color: #cccccc;
        background-position:center;
        background-size:cover;
             width:100%;
        text-decoration-style: wavy;
        background-repeat: no-repeat;
        width:auto-inherit;
        height:40%;
             text-align: center;
}
               
           input[type=email] {
  width: 23%;
  padding: 10px 20px;
  margin: 5px 0;
 border: 1px solid black; 
}
   
        
    </style>
<h1><i>Edit User profile</i></h1>
</head>
<body>
	
	<form method="POST" action="updateuserprofile.php">
		  
    <br>
        
    <b>First Name : </b><input type="text"   value="<?php echo $row['firstname']; ?>" name="firstname" >
     <br>
    <br>
   <b> Middle Name : </b><input type="text"  value="<?php echo $row['middlename']; ?>" name="middlename" >
     <br>
    <br>
    <b> Last Name : </b><input type="text"  value="<?php echo $row['lastname']; ?>" name="lastname" >
     <br>
    <br>
        <b>Contact Number : </b><input type="text"  value="<?php echo $row['contactno']; ?>" name="contactno" >
     <br>
    <br>
   <b> Email-Id : </b><input type="text"   value="<?php echo $row['email']; ?>" name="email" >
        
     <br>
    <br>
        <b> Password : </b><input type="text"   value="<?php echo $row['password']; ?>" name="password" >
        <br>
        <input type="submit"  name="Update Details">
		
	</form>
</body>
</html>