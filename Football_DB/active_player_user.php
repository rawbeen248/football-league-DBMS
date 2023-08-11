<html>

<head>
<title>Active Players</title>
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
            padding: 0px 40px
			
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
							<li><a href = "match_user.php" style="margin-left:900px">Back</a></li>
		</ul>
    </nav>
<table class="styled-table">
	<thead>
		<tr>
	<th>Match ID</th>
	<th>Player ID</th>
	<th>Team ID</th>
	<th>Goals Scored</th>
	<th>Completed Passes</th>
	<th>Failed Passes</th>
	<th>Total Attempts</th>
	<th>Attempts on Target</th>
	<th>Tackles</th>
	<th>Yellow Cards</th>
	<th>Red Card</th>
	<th>Distance Ran</th>
	<th>Fouls</th>
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
$activeplayer=$_POST["activeplayer"];
$sql = "SELECT * FROM active_player where match_id=".$activeplayer."";
}else{


$sql = "SELECT * FROM active_player";}

$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()){
echo "<tr><td>" . $row["match_id"] . "</td><td>" . $row["player_id"] . "</td><td>" . $row["team_id"] . "</td><td>" . $row["goals_scored"] ."</td><td>". $row["com_passes"] . "</td><td>" . $row["fail_passes"] . "</td><td>" . $row["tot_attempts"] . "</td><td>". $row["attempts_on_targ"] . "</td><td>" . $row["tackles"] . "</td><td>" . $row["yellow_cards"] ."</td><td>" .$row["red_card"]."</td><td>". $row["distance_ran"] . "</td><td>" . $row["fouls"] ."</td></tr>" ;
}

mysqli_close($db);

?>


</table>
<nav class="footer background">

	
    <ul class="nav-list">

	</ul>
</nav>
</body>
</html>