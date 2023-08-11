<?php

$link = mysqli_connect("localhost", "root", "", "fmdb");

$match_date = mysqli_real_escape_string($link, $_REQUEST['match_date']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
$home_team_id = mysqli_real_escape_string($link, $_REQUEST['home_team_id']);
$away_team_id = mysqli_real_escape_string($link, $_REQUEST['away_team_id']);
$referee = mysqli_real_escape_string($link, $_REQUEST['referee']);
$full_time = mysqli_real_escape_string($link, $_REQUEST['full_time']);
$home_score = mysqli_real_escape_string($link, $_REQUEST['home_score']);
$away_score = mysqli_real_escape_string($link, $_REQUEST['away_score']);
$home_penalty = mysqli_real_escape_string($link, $_REQUEST['home_penalty']);
$away_penalty = mysqli_real_escape_string($link, $_REQUEST['away_penalty']);

//Attempt insert query execution
$sql = "INSERT INTO matches (match_date, location, home_team_id, away_team_id, referee, full_time, home_score, away_score, home_penalty, away_penalty) 
VALUES ('$match_date', '$location', '$home_team_id', '$away_team_id', '$referee', '$full_time', '$home_score', '$away_score', '$home_penalty', '$away_penalty')";

if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
	?>
<script>
	setTimeout(function () {    
    window.location.href = 'match.php';},800); 
</script>

<?php
} else{
	echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>