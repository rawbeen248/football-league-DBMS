<?php

$link = mysqli_connect("localhost", "root", "", "fmdb");


$player_id = mysqli_real_escape_string($link, $_REQUEST['player_id']);
$team_id = mysqli_real_escape_string($link, $_REQUEST['team_id']);
$previous_team_id = mysqli_real_escape_string($link, $_REQUEST['previous_team_id']);
$salary = mysqli_real_escape_string($link, $_REQUEST['salary']);
$signed_date = mysqli_real_escape_string($link, $_REQUEST['signed_date']);
$expiry_date = mysqli_real_escape_string($link, $_REQUEST['expiry_date']);


//Attempt insert query execution
$sql = "INSERT INTO contract (contract_id, player_id, team_id, previous_team_id, salary, signed_date, expiry_date) 
VALUES ('', '$player_id', '$team_id', '$previous_team_id', '$salary', '$signed_date', '$expiry_date')";

if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
	?>
<script>
	setTimeout(function () {    
    window.location.href = 'contract.php';},800); 
</script>

<?php
} else{
	echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>