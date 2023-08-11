<?php

$link = mysqli_connect("localhost", "root", "", "fmdb");

$team_name = mysqli_real_escape_string($link, $_REQUEST['team_name']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
$manager = mysqli_real_escape_string($link, $_REQUEST['manager']);
$coach = mysqli_real_escape_string($link, $_REQUEST['coach']);
$tot_players = mysqli_real_escape_string($link, $_REQUEST['tot_players']);


//Attempt insert query execution
$sql = "INSERT INTO team (team_name, location, manager, coach, tot_players) VALUES ('$team_name', '$location', '$manager', '$coach', '$tot_players')";

if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
	?>
<script>
	setTimeout(function () {    
    window.location.href = 'team.php';},800); 
</script>

<?php
} else{
	echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>