<?php
	if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbdatabase = 'fmdb';
            
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
			  
            $contract_id = mysqli_real_escape_string($conn, $_POST['contract_id']);
            $player_id = mysqli_real_escape_string($conn, $_POST['player_id']);
			$team_id = mysqli_real_escape_string($conn, $_POST['team_id']);
			$previous_team_id = mysqli_real_escape_string($conn, $_POST['previous_team_id']);
			$salary = mysqli_real_escape_string($conn, $_POST['salary']);
			$signed_date = mysqli_real_escape_string($conn, $_POST['signed_date']);
  			$expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
			
            $sql = "UPDATE contract ". "SET team_id = '$team_id', previous_team_id = '$previous_team_id', salary = '$salary', signed_date = '$signed_date', expiry_date = '$expiry_date' ".
               "WHERE contract_id = $contract_id and player_id = $player_id" ;

            mysqli_select_db($conn, $dbdatabase);
            
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            
            echo "Updated data successfully\n";
			?>
<script>
	setTimeout(function () {    
    window.location.href = 'contract.php';},800); 
</script>

<?php
            
            mysqli_close($conn);
			} else {
            ?>
<head>
<meta charset="UTF-8">
<title>Update Contract</title>
<link rel="stylesheet" type="text/css" href="forms.css">
</head>
<style>
body {
  align-items: center;
  background-color:black;
  display: flex;
  justify-content: center;
  height: 100vh;
}
.form {
  background-color: #15172b;
  position: center;
  border-radius: 20px;
  box-sizing: border-box;
  padding: 20px;
  width: 320px;
  }
</style>
<body>
   <form method = "post" action = "<?php $_PHP_SELF ?>">
   <br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br>
	     <br><br><br>
<div class="form">
   	<div class="logo">
		<img src= "logo.png">
	</div> 	


      <div class="subtitle">Update Contract 	  	
	</div>
   
      <div class="input-container ic1">
        <input name="contract_id" id="contract_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="contract_id" class="placeholder">Contract ID</label>
      </div>	  
      <div class="input-container ic1">
        <input name="player_id" id="player_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="player_id" class="placeholder">Player ID</label>
      </div>
      <div class="input-container ic2">
        <input name="team_id" id="team_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="team_id" class="placeholder">Team ID</label>
      </div>
      <div class="input-container ic2">
        <input name="previous_team_id" id="previous_team_id" class="input" type="number" placeholder=" " />
        <div class="cut "></div>
        <label for="previous_team_id" class="placeholder">Previous Team ID</>
      </div>
      <div class="input-container ic2">
	    <input name="salary" id="salary" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="salary" class="placeholder">Salary</>
      </div>
      <div class="input-container ic2">
	    <input name="signed_date" id="signed_date" class="input" type="date" placeholder=" " />
        <div class="cut"></div>
        <label for="signed_date" class="placeholder">Signed Date</>
      </div>
      <div class="input-container ic2">
	    <input name="expiry_date" id="expiry_date" class="input" type="date" placeholder=" " />
        <div class="cut"></div>
        <label for="expiry_date" class="placeholder">Expiry Date</>
      </div>
      <button id="update" name="update" type="text" class="submit" value="update">Update</button>
    </div>
	  
   </form>
   </body>
<?php
}
?>