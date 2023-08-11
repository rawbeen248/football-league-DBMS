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
			  

            $team_id = mysqli_real_escape_string($conn, $_POST['team_id']);
			$team_name = mysqli_real_escape_string($conn, $_POST['team_name']);
			$location = mysqli_real_escape_string($conn, $_POST['location']);
			$manager = mysqli_real_escape_string($conn, $_POST['manager']);
			$coach = mysqli_real_escape_string($conn, $_POST['coach']);
            $tot_players = mysqli_real_escape_string($conn, $_POST['tot_players']);

			
            $sql = "UPDATE team ". "SET team_name = '$team_name', location = '$location', manager = '$manager', coach = '$coach', tot_players = '$tot_players' ".
               "WHERE team_id = $team_id" ;

            mysqli_select_db($conn, $dbdatabase);
            
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            
            echo "Updated data successfully\n";
			?>
<script>
	setTimeout(function () {    
    window.location.href = 'team.php';},800); 
</script>

<?php
            
            mysqli_close($conn);
			} else {
            ?>
<head>
<meta charset="UTF-8">
<title>Update Team</title>
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
      <br><br><br><br><br><br>      <br><br><br><br><br><br>      <br><br><br><br><br><br>

	<div class="form">
	   	<div class="logo">
		<img src= "logo.png">
	</div> 	
      <div class="subtitle">Update Team 	  	
	</div>
	  <div class="input-container ic1">
        <input name="team_id" id="team_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="team_id" class="placeholder">Team ID</label>
      </div>
	  <div class="input-container ic1">
        <input name="team_name" id="team_name" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="team_name" class="placeholder">Team Name</label>
      </div>	  
      <div class="input-container ic1">
        <input name="location" id="location" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="location" class="placeholder">Location</label>
      </div>
	  <div class="input-container ic1">
        <input name="manager" id="manager" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="manager" class="placeholder">Manager</label>
      </div>
	  <div class="input-container ic1">
        <input name="coach" id="coach" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="coach" class="placeholder">Coach</label>
      </div>	  
      <div class="input-container ic2">
        <input name="tot_players" id="tot_players" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="tot_players" class="placeholder">Total Players</label>
      </div>

	      <button id="update" name="update" type="text" class="submit" value="update">Update</button>
    </div>


   </form>
   </body>
            <?php
         }
      ?>
	
	
	
	
