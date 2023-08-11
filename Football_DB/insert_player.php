<?php

$link = mysqli_connect("localhost", "root", "", "fmdb");

$player_name = mysqli_real_escape_string($link, $_REQUEST['player_name']);
$team_id = mysqli_real_escape_string($link, $_REQUEST['team_id']);
$date_of_birth = mysqli_real_escape_string($link, $_REQUEST['date_of_birth']);
$height = mysqli_real_escape_string($link, $_REQUEST['height']);
$weight = mysqli_real_escape_string($link, $_REQUEST['weight']);
$position_1 = mysqli_real_escape_string($link, $_REQUEST['position_1']);
$position_2 = mysqli_real_escape_string($link, $_REQUEST['position_2']);
$num_of_nat_match = mysqli_real_escape_string($link, $_REQUEST['num_of_nat_match']);
$num_of_int_match = mysqli_real_escape_string($link, $_REQUEST['num_of_int_match']);
$employment = mysqli_real_escape_string($link, $_REQUEST['employment']);
$education = mysqli_real_escape_string($link, $_REQUEST['education']);
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$university = mysqli_real_escape_string($link, $_REQUEST['university']);
$hobbies = mysqli_real_escape_string($link, $_REQUEST['hobbies']);
$expenses = mysqli_real_escape_string($link, $_REQUEST['expenses']);
$amateur = mysqli_real_escape_string($link, $_REQUEST['amateur']);

//Attempt insert query execution
$sql = "INSERT INTO players (player_name, team_id, date_of_birth, height, weight, position_1, position_2, num_of_nat_match, num_of_int_match, employment, education, company, university, hobbies, expenses, amateur) VALUES ('$player_name', '$team_id', '$date_of_birth', '$height', '$weight', '$position_1', '$position_2', '$num_of_nat_match', '$num_of_int_match', '$employment', '$education', '$company', '$university', '$hobbies', '$expenses', '$amateur')";

if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
	?>
<script>
	setTimeout(function () {    
    window.location.href = 'player.php';},800); 
</script>

<?php
} else{
	echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>