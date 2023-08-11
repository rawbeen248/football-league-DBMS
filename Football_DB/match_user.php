<html>

<head>
<title>Match</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<style>
        * {
            margin: 0;
            padding: 0;
        }
 
        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            cursor: pointer;
        }
		
		.footer {
			display: flex;
			align-items: center;
			justify-content: center;
			cursor: pointer;
		    position: fixed;
		    left: 0;
		    bottom: 0;
		    width: 100%;
		    background-color: black;
		    color: white;
		    text-align: center;
		}

        .background {
            background: black;
            background-blend-mode: darken;
            background-size: cover;
        }

        .nav-list {
            width: 100%;
            display: flex;
            align-items: center;
        }
 
        .logo {
            display: flex;
            justify-content: left;
            align-items: left;
        }
 
        .logo img {
            width: 150px;
            border-radius: 10px;
        }
 
        .nav-list li {
            list-style: none;
            padding: 0px 50px
			
        }
 
        .nav-list li a {
			font-size: 18px;
			font-weight: bold;
            text-decoration: none;
            color: white;
			
        }
		.nav-list li a:hover {
            color: lightblue;
        }
		.nav-list input {
			color: blue;
			font-weight: bold;
		}
		.nav-list input:hover{
			color: red;
			position: -2;
		}

		.z{
			background: cadetblue;
			color: gold;
		}
		
		
		
		
		
		.styled-table {
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}
		
		.styled-table thead tr {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
		}
		
		.styled-table th,
		.styled-table td {
			padding: 12px 15px;
		}
		
		.styled-table tbody tr {
			border-bottom: 1px solid #dddddd;
		}

		.styled-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		.styled-table tbody tr:last-of-type {
			border-bottom: 2px solid #009879;
		}
		
 
    </style>
</head>
<body style="background: honeydew;">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
			<a href= "userhome.php">
                <img src= "logo.png" >
			</a>
            </div>
			
				<form action="active_player_user.php" method="POST" style="margin-left:350px">
				<input id="search" name="activeplayer" type="number" placeholder="Match ID">
				<input id="submit" name="submit" type="submit" value="Search Active Players" style="width:213px">
				</form>
				<form action="benched_player_user.php" method="POST">
				<input id="search" name="benchedplayer" type="number" placeholder="Match ID">
				<input id="submit" name="submit" type="submit" value="Search Benched Players" style="width:213px">
				</form>
				<form action="timing_user.php" method="POST">
				<input id="search" name="timing" type="number" placeholder="Match ID">
				<input id="submit" name="submit" type="submit" value="Search Events" style="width:213px">
				</form>
		</ul>
    </nav>
<table class="styled-table">
	<thead>
		<tr>
			<th>Match ID</th>
			<th>Date & Time</th>
			<th>Location</th>
			<th>Home Team ID</th>
			<th>Away Team ID</th>
			<th>Referee</th>
			<th>Full Time</th>
			<th>Home Score</th>
			<th>Away Score</th>
			<th>Home Penalty</th>
			<th>Away Penalty</th>
		</tr>
	</thead>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "fmdb";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

if($_SERVER["REQUEST_METHOD"]=="POST"){
$matches=$_POST["matches"];
$sql = "SELECT * FROM matches where home_team_id=".$matches." OR away_team_id=".$matches."";
}else{

$sql = "SELECT * FROM matches";}


($result = mysqli_query($db, $sql));

while($row = $result->fetch_assoc()){
echo "<tr><td>" . $row["match_id"] . "</td><td>" . $row["match_date"] . "</td><td>" . $row["location"] ."</td><td>". $row["home_team_id"]. "</td><td>" . $row["away_team_id"]. "</td><td>"  .  $row["referee"] ."</td><td>" . $row["full_time"] . "</td><td>" . $row["home_score"] . "</td><td>" . $row["away_score"] . "</td><td>" . $row["home_penalty"] . "</td><td>" . $row["away_penalty"] . "</td><td>" .  "</td></tr>" ;
}
mysqli_close($db);

?>

</table>
  

<nav class="footer background">

<!--	
  <form action="input_match.html">
  <input id="submit" name="submit" type="submit" value="Input Match" style="margin-left: 50px; font-weight: bold; color: blue;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='blue'">
  </form>

  <form action="update_match.php">
  <input id="submit" name="submit" type="submit" value="Update Match" style="margin-left: 50px; font-weight: bold; color: blue;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='blue'">
  </form>

  <form action="delete_match.php">
  <input id="submit" name="submit" type="submit" value="Delete Match" style="margin-left: 50px; font-weight: bold; color: blue;" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='blue'">
  </form>
-->



        <ul class="nav-list">

		</ul>

</nav>
  

</body>
</html>