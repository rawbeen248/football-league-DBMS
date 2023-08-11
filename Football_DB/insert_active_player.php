<?php

$link = mysqli_connect("localhost", "root", "", "fmdb");

$match_id = mysqli_real_escape_string($link, $_REQUEST['match_id']);
$player_id = mysqli_real_escape_string($link, $_REQUEST['player_id']);
$player_name = mysqli_real_escape_string($link, $_REQUEST['player_name']);
$team_id = mysqli_real_escape_string($link, $_REQUEST['team_id']);
$goals_scored = mysqli_real_escape_string($link, $_REQUEST['goals_scored']);
$com_passes = mysqli_real_escape_string($link, $_REQUEST['com_passes']);
$fail_passes = mysqli_real_escape_string($link, $_REQUEST['fail_passes']);
$tot_attempts = mysqli_real_escape_string($link, $_REQUEST['tot_attempts']);
$attempts_on_targ = mysqli_real_escape_string($link, $_REQUEST['attempts_on_targ']);
$tackles = mysqli_real_escape_string($link, $_REQUEST['tackles']);
$yellow_cards = mysqli_real_escape_string($link, $_REQUEST['yellow_cards']);
$red_card = mysqli_real_escape_string($link, $_REQUEST['red_card']);
$distance_ran = mysqli_real_escape_string($link, $_REQUEST['distance_ran']);
$fouls = mysqli_real_escape_string($link, $_REQUEST['fouls']);


//Attempt insert query execution
$sql = "INSERT INTO active_player (match_id, player_id, player_name, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) VALUES ('$match_id', '$player_id', '$player_name', '$team_id', '$goals_scored', '$com_passes', '$fail_passes', '$tot_attempts', '$attempts_on_targ', '$tackles', '$yellow_cards', '$red_card', '$distance_ran', '$fouls')";

if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
	?>
<script>
	setTimeout(function () {    
    window.location.href = 'active_player.php';},800); 
</script>

<?php
} else{
	echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>