<?php

$link = mysqli_connect("localhost", "root", "", "fmdb");

$player_id = mysqli_real_escape_string($link, $_REQUEST['player_id']);
$player_name = mysqli_real_escape_string($link, $_REQUEST['player_name']);
$team_id = mysqli_real_escape_string($link, $_REQUEST['team_id']);
$match_id = mysqli_real_escape_string($link, $_REQUEST['match_id']);


//Attempt insert query execution
$sql = "INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES ('$player_id', '$player_name', '$team_id', '$match_id')";

if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
	?>
<script>
	setTimeout(function () {    
    window.location.href = 'benched_player.php';},800); 
</script>

<?php
} else{
	echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>