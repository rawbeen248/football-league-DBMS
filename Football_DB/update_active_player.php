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
			  
            $match_id = mysqli_real_escape_string($conn, $_POST['match_id']);
            $player_id = mysqli_real_escape_string($conn, $_POST['player_id']);
			$goals_scored = mysqli_real_escape_string($conn, $_POST['goals_scored']);
			$com_passes = mysqli_real_escape_string($conn, $_POST['com_passes']);
			$fail_passes = mysqli_real_escape_string($conn, $_POST['fail_passes']);
			$tot_attempts = mysqli_real_escape_string($conn, $_POST['tot_attempts']);
            $attempts_on_targ = mysqli_real_escape_string($conn, $_POST['attempts_on_targ']);
            $tackles = mysqli_real_escape_string($conn, $_POST['tackles']);
			$yellow_cards = mysqli_real_escape_string($conn, $_POST['yellow_cards']);
			$red_card = mysqli_real_escape_string($conn, $_POST['red_card']);
			$distance_ran = mysqli_real_escape_string($conn, $_POST['distance_ran']);
			$fouls = mysqli_real_escape_string($conn, $_POST['fouls']);
			
			
            $sql = "UPDATE active_player ". "SET goals_scored = '$goals_scored', com_passes = '$com_passes', fail_passes = '$fail_passes', tot_attempts = '$tot_attempts', attempts_on_targ = '$attempts_on_targ', tackles = '$tackles', yellow_cards = '$yellow_cards', red_card = '$red_card', distance_ran = '$distance_ran', fouls = '$fouls' ".
               "WHERE match_id = $match_id and player_id = $player_id" ;

            mysqli_select_db($conn, $dbdatabase);
            
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            
            echo "Updated data successfully\n";
			?>
<script>
	setTimeout(function () {    
    window.location.href = 'active_player.php';},800); 
</script>

<?php
            
            mysqli_close($conn);
			} else {
            ?>
<head>
<meta charset="UTF-8">
<title>Update Active Player</title>
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
      <br><br><br><br><br><br>      <br><br><br><br><br><br>      <br><br><br><br><br><br>      <br><br><br><br><br><br>      <br><br><br><br><br><br>      <br><br><br><br><br><br>



	<div class="form">
	   	<div class="logo">
		<img src= "logo.png">
	</div> 	
      <div class="subtitle">Update Active Player 	  	
	</div>
	
	
      <div class="input-container ic1">
        <input name="match_id" id="match_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="match_id" class="placeholder">Match ID</label>
      </div>	  
      <div class="input-container ic1">
        <input name="player_id" id="player_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="player_id" class="placeholder">Player ID</label>
      </div>
      <div class="input-container ic2">
        <input name="goals_scored" id="goals_scored" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="goals_scored" class="placeholder">Goals Scored</label>
      </div>
      <div class="input-container ic2">
        <input name="com_passes" id="com_passes" class="input" type="number" placeholder=" " />
        <div class="cut "></div>
        <label for="com_passes" class="placeholder">Completed Passes</>
      </div>
      <div class="input-container ic2">
	    <input name="fail_passes" id="fail_passes" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="fail_passes" class="placeholder">Failed Passes</>
      </div>
      <div class="input-container ic2">
	    <input name="tot_attempts" id="tot_attempts" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="tot_attempts" class="placeholder">Total Attempts</>
      </div>
      <div class="input-container ic2">
	    <input name="attempts_on_targ" id="attempts_on_targ" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="attempts_on_targ" class="placeholder">Attempts on Target</>
      </div>
	  
	   <div class="input-container ic2">
	    <input name="tackles" id="tackles" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="tackles" class="placeholder">Tackles</>
      </div>
      <div class="input-container ic2">
	    <input name="yellow_cards" id="yellow_cards" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="yellow_cards" class="placeholder">Yellow Cards</>
      </div>
      <div class="input-container ic2">
	    <input name="red_card" id="red_card" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="red_card" class="placeholder">Red Cards</>
      </div>
	  <div class="input-container ic2">
	    <input name="distance_ran" id="distance_ran" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="distance_ran" class="placeholder">Distance Ran</>
      </div>
      <div class="input-container ic2">
	    <input name="fouls" id="fouls" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="fouls" class="placeholder">Fouls</>
      </div>
      <button id="update" name="update" type="text" class="submit" value="update">Update</button>
    </div>


   </form>
   </body>
            <?php
         }
      ?>