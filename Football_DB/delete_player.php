<?php
	if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbdatabase = 'fmdb';
            
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }

            $player_id = mysqli_real_escape_string($conn, $_POST['player_id']);
			
            $sql = "DELETE FROM players WHERE player_id = $player_id" ;

            mysqli_select_db($conn, $dbdatabase);
            
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            
            echo "Data deleted successfully\n";
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
<title>Delete Player</title>
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



	<div class="form">
	   	<div class="logo">
		<img src= "logo.png">
	</div> 	
      <div class="subtitle" style="margin-left:80px">Delete Player 	  	
	</div>
	<div class="input-container ic1">
        <input name="player_id" id="player_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="player_id" class="placeholder">Player's ID</label>
    </div>
      <button id="delete" name="delete" type="text" class="submit" value="delete">Delete</button>
    </div>
   </form>
   </body>
            <?php
         }
      ?>	