<?php

$link = mysqli_connect("localhost", "root", "", "fmdb");


$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);



//Attempt insert query execution
$sql = "INSERT INTO login (id, username, password, usertype) 
VALUES ('', '$username', '$password', 'user')";

if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
?>
<script>
	setTimeout(function () {    
    window.location.href = 'login.php';},800); 
</script>

<?php
} else{
	echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
