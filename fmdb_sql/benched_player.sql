CREATE TABLE benched_player (
    player_id INT,
    player_name VARCHAR(255),
    team_id INT,
    match_id INT,
    FOREIGN KEY (player_id) REFERENCES players(player_id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES team(team_id) ON DELETE CASCADE,
    FOREIGN KEY (match_id) REFERENCES matches(match_id) ON DELETE CASCADE,
    PRIMARY KEY (player_id, match_id)
) ENGINE=InnoDB;



-- Match 1 - Team A vs Team B
-- Player 3 from Team A
INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES (9, 'Player I', 5, 1);

-- Player 4 from Team A
INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES (10, 'Player J', 5, 1);

-- Player 5 from Team B
INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES (11, 'Player K', 6, 1);

-- Player 6 from Team B
INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES (12, 'Player L', 6, 1);


-- Match 2 - Team C vs Team D
-- Player 7 from Team C
INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES (13, 'Player M', 7, 2);

-- Player 8 from Team C
INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES (14, 'Player N', 7, 2);

-- Player 9 from Team D
INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES (15, 'Player O', 8, 2);

-- Player 10 from Team D
INSERT INTO benched_player (player_id, player_name, team_id, match_id) 
VALUES (16, 'Player P', 8, 2);

-- ... continue with more entries for other matches and players

