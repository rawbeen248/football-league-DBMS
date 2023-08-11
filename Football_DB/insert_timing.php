<?php

$link = mysqli_connect("localhost", "root", "", "fmdb");

$match_id = mysqli_real_escape_string($link, $_REQUEST['match_id']);
$event = mysqli_real_escape_string($link, $_REQUEST['event']);
$player_name = mysqli_real_escape_string($link, $_REQUEST['player_name']);
$time = mysqli_real_escape_string($link, $_REQUEST['time']);

//Attempt insert query execution
$sql = "INSERT INTO timing (match_id, event, player_name, time) VALUES ('$match_id', '$event', '$player_name', '$time')";

if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
	?>
<script>
	setTimeout(function () {    
    window.location.href = 'timing.php';},800); 
</script>

<?php
} else{
	echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>