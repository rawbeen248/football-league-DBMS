<!DOCTYPE html>
 
<html>
 
<head>
    <title>User Home</title>
 
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
 
        .background {
            background: black;
            background-blend-mode: darken;
            background-size: cover;
        }
 
        .nav-list {
            width: 100%;
            display: flex;
            align-items: right;
        }
 
        .logo {
            display: flex;
            justify-content: left;
            align-items: left;
        }
 
        .logo img {
            width: 180px;
            border-radius: 10px;
        }
 
        .nav-list li {
            list-style: none;
		
            padding: 30px 40px
			
        }
 
        .nav-list li a {
			font-size: 22px;
            text-decoration: none;
            color: white;
			
        }
		.nav-list li a:hover {
            color: lightblue;
        }
		
		.pics{
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  height: 500px;
		  background-color: white;
		}
		.pics li{
            list-style: none;
		
            padding: 0px 60px
			
        }
		.but{ 
			color: teal;
			text-decoration: none;
			font-size: 18px;
			font-weight: bold;
		}

		

    </style>
</head>
 
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
                <img src= "logo.png">
            </div>
				<li><a href = "login.php" style= "margin-left: 900px">Logout</a></li>
        </ul>
    </nav>


<ul class= pics>

	
	<div class="container">
	  <li><a href="player_user.php"><img src="players.png" width="150" height="100" margin="50px"></a><br>
	  <li><a href = "player_user.php" style= "margin-left: 50px" class="but">Player</a></li>
	</li></div>
	<div class="container">
	  <li><a href="match_user.php"><img src="matches.png" width="150" height="100" margin="50px"></a><br>
	  <li><a href = "match_user.php" style= "margin-left: 50px" class="but">Match</a></li>
	</li></div>
	<div class="container">
	  <li><a href="team_user.php"><img src="team.png" width="150" height="100" margin="50px"></a><br>
	  <li><a href = "team_user.php" style= "margin-left: 50px" class="but">Team</a></li>
	</li></div>
	<div class="container">
	  <li><a href="player_of_the_match_user.php"><img src="man_of_the_match.jpg" width="150" height="100" margin="50px"></a><br>
	  <li><a href = "player_of_the_match_user.php" style= "margin-left: 8px" class="but">Man of the Match</a></li>
	</li></div>

</ul>


</body>
 
</html>