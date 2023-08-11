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
            $full_time = mysqli_real_escape_string($conn, $_POST['full_time']);
			$home_score = mysqli_real_escape_string($conn, $_POST['home_score']);
			$away_score = mysqli_real_escape_string($conn, $_POST['away_score']);
			$home_penalty = mysqli_real_escape_string($conn, $_POST['home_penalty']);
			$away_penalty = mysqli_real_escape_string($conn, $_POST['away_penalty']);
           
            $sql = "UPDATE matches ". "SET full_time = '$full_time', home_score = '$home_score', away_score = '$away_score', home_penalty = '$home_penalty', away_penalty = '$away_penalty' ".
               "WHERE match_id = $match_id" ;

            mysqli_select_db($conn, $dbdatabase);
            
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            
            echo "Updated data successfully\n";
			?>
<script>
	setTimeout(function () {    
    window.location.href = 'match.php';},800); 
</script>

<?php
            
            mysqli_close($conn);
			} else {
            ?>
<head>
<meta charset="UTF-8">
<title>Update Match</title>
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



	<div class="form">
	   	<div class="logo">
		<img src= "logo.png">
	</div> 	
      <div class="subtitle" style="margin-left:80px"> Update Match 	  	
	</div>
	
	
      <div class="input-container ic1">
        <input name="match_id" id="match_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="match_id" class="placeholder">Match ID</label>
      </div>
	  <div class="input-container ic2">
	    <input name="full_time" id="full_time" class="input" type="time" placeholder=" " />
        <div class="cut"></div>
        <label for="full_time" class="placeholder">Full Time</>
      </div>
      <div class="input-container ic2">
	    <input name="home_score" id="home_score" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="home_score" class="placeholder">Home Score</>
      </div>
	  <div class="input-container ic2">
	    <input name="away_score" id="away_score" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="away_score" class="placeholder">Away Score</>
      </div>
      <div class="input-container ic2">
	    <input name="home_penalty" id="home_penalty" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="home_penalty" class="placeholder">Home Penalty</>
      </div>
	   <div class="input-container ic2">
	    <input name="away_penalty" id="away_penalty" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="away_penalty" class="placeholder">Away Penalty</>
      </div>

		<button id="update" name="update" type="text" class="submit" value="update">Update</button>
		</div>


	   </form>
	   </body>
				<?php
			 }
		  ?>
	  
	  
	  
	  
	  
	  