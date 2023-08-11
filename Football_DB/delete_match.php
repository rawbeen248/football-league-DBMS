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

            $match_id = mysqli_real_escape_string($conn, $_POST['match_id']);
			
            $sql = "DELETE FROM matches WHERE match_id = $match_id" ;

            mysqli_select_db($conn, $dbdatabase);
            
            $retval = mysqli_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            
            echo "Data deleted successfully\n";
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
<title>Delete Match</title>
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
      <div class="subtitle" style="margin-left:80px">Delete Match 	  	
	</div>
	<div class="input-container ic1">
        <input name="match_id" id="match_id" class="input" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="match_id" class="placeholder">Match ID</label>
    </div>
      <button id="delete" name="delete" type="text" class="submit" value="delete">Delete</button>
    </div>
   </form>
   </body>
            <?php
         }
      ?>	