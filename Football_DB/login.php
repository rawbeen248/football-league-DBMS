<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "fmdb";

$db = mysqli_connect($db_host, $db_username, $db_password, $db_database);
if($db===false){
	die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	$sql = "SELECT * FROM login where username='".$username."' AND password='".$password."'";

	$result = mysqli_query($db, $sql);
	
	$row=mysqli_fetch_array($result);
	
	if($row["usertype"]=="user"){
		header("location:userhome.php");
	}
	elseif($row["usertype"]=="admin"){
		header("location:adminhome.php");
	}
	else{
		echo "Incorrect username or password.";
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="login_page.css">
</head>

<body>
<center>
<br><br>
	<div class="logo">
		<img src= "logo.png">
	</div> 
	
	<br>
    <div class="login">    
    <form action"#" id="login" method="POST">    
        <label>Username</label>    
        <input type="text" name="username" id="username" placeholder="Username" required>    
        <br>
		<br><br>		
        <label>Password</label>    
        <input type="password" name="password" id="password" placeholder="Password" required>    
        <br>   
		<br><br>
        <input type="submit" name="login" id="login" value="Login">  
	    </div>		
        <br><br> 
		<div class="signupnew">
		<a href = "signup.html">New user? Signup</a>  
		</div>
		<br><br>
    </form>

</center>
</body>
</html>