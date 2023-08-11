<html>

<head>
<title>Teams</title>

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
			background: DarkTurquoise;
			color: DarkSlateGrey;
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
			
				<form action="match.php" method="POST">
				<input id="search" name="matches" type="number" placeholder="Team ID" style="margin-left:370px">
				<input id="submit" name="submit" type="submit" value="Search Matches">
				</form>
			
				<form action="player.php" method="POST">
				<input id="search" name="player" type="number" placeholder="Team ID" style="margin-left:30px">
				<input id="submit" name="submit" type="submit" value="Search Players">
				</form>
		</ul>
    </nav>

<div class="container-sm" >

	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: darkturquoise;"><b> </b></h1>
		</div>
	</div>
	
	<div class="row mt-4">
	

		<?php

		$db_host = "localhost";
		$db_username = "root";
		$db_password = "";
		$db_database = "fmdb";

		$db = mysqli_connect($db_host, $db_username, $db_password);
		mysqli_select_db($db, $db_database);

		$sql = "SELECT * FROM team;";

		$result = mysqli_query($db, $sql);

		while($row = $result->fetch_assoc()){
			?>
			<div class="col-md-4">
				<div class="x">
					<div class="z">
						<h2 class="text-center font-weight-bold" style="color: forestgreen ;" font-size="font-weight: bold;"><?php echo $row["team_name"]; ?> </h2>
						<h5 class="text-center"> <p>Team ID: <?php echo $row["team_id"]; ?> </p></h5>
						<h5 class="text-center"> <p>Location: <?php echo $row["location"]; ?> </p></h5>
						<h5 class="text-center"> <p>Total Players: <?php echo $row["tot_players"]; ?> </p> </h5>
						<h5 class="text-center"> <p>Manager: <?php echo $row["manager"]; ?> </p></h5>
						<h5 class="text-center"> <p>Coach: <?php echo $row["coach"]; ?> </p> </h5>
					</div>
				</div>
			</div>
			
			<?php
		}

		mysqli_close($db);
		
		?>
	
	
	</div>
<div>

<br><br>
<nav class="footer background">

</nav>
</body>
</html>