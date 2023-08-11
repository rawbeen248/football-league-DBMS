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
			  

            $player_id = mysqli_real_escape_string($conn, $_POST['player_id']);
			$team_id = mysqli_real_escape_string($conn, $_POST['team_id']);
			$height = mysqli_real_escape_string($conn, $_POST['height']);
			$weight = mysqli_real_escape_string($conn, $_POST['weight']);
			$position_1 = mysqli_real_escape_string($conn, $_POST['position_1']);
            $position_2 = mysqli_real_escape_string($conn, $_POST['position_2']);
            $num_of_nat_match = mysqli_real_escape_string($conn, $_POST['num_of_nat_match']);
			$num_of_int_match = mysqli_real_escape_string($conn, $_POST['num_of_int_match']);
			$employment = mysqli_real_escape_string($conn, $_POST['employment']);
			$education = mysqli_real_escape_string($conn, $_POST['education']);
			$company = mysqli_real_escape_string($conn, $_POST['company']);
			$university = mysqli_real_escape_string($conn, $_POST['university']);
			$hobbies = mysqli_real_escape_string($conn, $_POST['hobbies']);
			$expenses = mysqli_real_escape_string($conn, $_POST['expenses']);			
			$amateur = mysqli_real_escape_string($conn, $_POST['amateur']);	
			
            $sql = "UPDATE players ". "SET team_id = '$team_id', height = '$height', weight = '$weight', position_1 = '$position_1', position_2 = '$position_2', num_of_nat_match = '$num_of_nat_match', num_of_int_match = '$num_of_int_match', employment = '$employment', education = '$education', company = '$company', university = '$university', hobbies = '$hobbies', expenses = '$expenses', amateur = '$amateur' ".
               "WHERE player_id = $player_id" ;

            mysqli_select_db($conn, $dbdatabase);
            
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            
            echo "Updated data successfully\n";
			?>
<script>
	setTimeout(function () {    
    window.location.href = 'player.php';},800); 
</script>

<?php
            
            mysqli_close($conn);
			} else {
            ?>
<head>
<meta charset="UTF-8">
<title>Update Player</title>
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
      <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>
	  <br><br><br><br><br><br>

	

	<div class="form">
	   	<div class="logo">
		<img src= "logo.png">
	</div> 
      <div class="subtitle">Update Player 	  	
	</div>
	  <div class="input-container ic1">
        <input name="player_id" id="player_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="player_id" class="placeholder">Player's ID</label>
      </div>	  
      <div class="input-container ic1">
        <input name="team_id" id="team_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="team_id" class="placeholder">Team ID</label>
      </div>
	        <div class="input-container ic1">
        <input name="height" id="height" class="input" type="number" step="any" placeholder=" " />
        <div class="cut"></div>
        <label for="height" class="placeholder">Height</label>
      </div>	  
      <div class="input-container ic2">
        <input name="weight" id="weight" class="input" type="number" step="any" placeholder=" " />
        <div class="cut"></div>
        <label for="weight" class="placeholder">Weight</label>
      </div>
      <div class="input-container ic2">
        <input name="position_1" id="position_1" class="input" type="text" placeholder=" " />
        <div class="cut "></div>
        <label for="position_1" class="placeholder">Position 1</>
      </div>
      <div class="input-container ic2">
	    <input name="position_2" id="position_2" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="position_2" class="placeholder">Position 2</>
      </div>
      <div class="input-container ic2">
	    <input name="num_of_nat_match" id="num_of_nat_match" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="num_of_nat_match" class="placeholder">National Matches</>
      </div>
	  
	   <div class="input-container ic2">
	    <input name="num_of_int_match" id="num_of_int_match" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="num_of_int_match" class="placeholder">International Matches</>
      </div>
      <div class="input-container ic2">
	    <input name="employment" id="employment" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="employment" class="placeholder">Employment</>
      </div>
      <div class="input-container ic2">
	    <input name="education" id="education" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="education" class="placeholder">Education</>
      </div>
	  <div class="input-container ic2">
	    <input name="company" id="company" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="company" class="placeholder">Company</>
      </div>
      <div class="input-container ic2">
	    <input name="university" id="university" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="university" class="placeholder">University</>
      </div>
	        <div class="input-container ic2">
	    <input name="hobbies" id="hobbies" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="hobbies" class="placeholder">Hobbies</>
      </div>
	  <div class="input-container ic2">
	    <input name="expenses" id="expenses" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="expenses" class="placeholder">Expenses</>
      </div>
      <div class="input-container ic2">
	    <input name="amateur" id="amateur" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="amateur" class="placeholder">Amateur</>
      </div>

	      <button id="update" name="update" type="text" class="submit" value="update">Update</button>
    </div>


   </form>
   </body>
            <?php
         }
      ?>
	
	
