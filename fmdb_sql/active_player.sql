CREATE TABLE active_player (
    match_id INT,
    player_id INT,
    team_id INT,
    goals_scored INT,
    com_passes INT,
    fail_passes INT,
    tot_attempts INT,
    attempts_on_targ INT,
    tackles INT,
    yellow_cards INT,
    red_card INT,
    distance_ran DECIMAL(10, 2),
    fouls INT,
    FOREIGN KEY (match_id) REFERENCES matches(match_id) ON DELETE CASCADE,
    FOREIGN KEY (player_id) REFERENCES players(player_id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES team(team_id) ON DELETE CASCADE,
    PRIMARY KEY (match_id, player_id)
) ENGINE=InnoDB;


-- Match 1 - Team A vs Team B
-- Player 1 from Team A
INSERT INTO active_player (match_id, player_id, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) 
VALUES (1, 1, 1, 1, 45, 10, 6, 4, 3, 0, 0, 8.2, 2);

-- Player 2 from Team A
INSERT INTO active_player (match_id, player_id, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) 
VALUES (1, 2, 1, 0, 60, 15, 4, 2, 5, 1, 0, 7.8, 3);

-- Player 1 from Team B
INSERT INTO active_player (match_id, player_id, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) 
VALUES (1, 3, 2, 0, 40, 8, 3, 1, 6, 1, 0, 7.5, 2);

-- Player 2 from Team B
INSERT INTO active_player (match_id, player_id, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) 
VALUES (1, 4, 2, 1, 50, 12, 5, 3, 4, 0, 0, 8.0, 4);


-- Match 2 - Team C vs Team D
-- Player 3 from Team C
INSERT INTO active_player (match_id, player_id, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) 
VALUES (2, 5, 3, 0, 35, 5, 2, 1, 2, 0, 0, 7.0, 1);

-- Player 4 from Team C
INSERT INTO active_player (match_id, player_id, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) 
VALUES (2, 6, 3, 1, 55, 10, 3, 2, 3, 1, 0, 7.6, 2);

-- Player 3 from Team D
INSERT INTO active_player (match_id, player_id, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) 
VALUES (2, 7, 4, 0, 30, 7, 1, 0, 4, 0, 0, 6.8, 2);

-- Player 4 from Team D
INSERT INTO active_player (match_id, player_id, team_id, goals_scored, com_passes, fail_passes, tot_attempts, attempts_on_targ, tackles, yellow_cards, red_card, distance_ran, fouls) 
VALUES (2, 8, 4, 0, 45, 10, 4, 2, 2, 0, 0, 7.2, 3);