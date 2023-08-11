CREATE TABLE timing (
    match_id INT,
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    event VARCHAR(255),
    player_name VARCHAR(255),
    time VARCHAR(10),
    FOREIGN KEY (match_id) REFERENCES matches(match_id)
) ENGINE=InnoDB;

-- Goals
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Goal', 'John Smith', '15');
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Goal', 'Emily Johnson', '27');
INSERT INTO timing (match_id, event, player_name, time) VALUES (2, 'Goal', 'David Brown', '5');
INSERT INTO timing (match_id, event, player_name, time) VALUES (3, 'Goal', 'Sophia Davis', '32');

-- Red Cards
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Red Card', 'Michael White', '68');
INSERT INTO timing (match_id, event, player_name, time) VALUES (2, 'Red Card', 'Olivia Wilson', '50');

-- Yellow Cards
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Yellow Card', 'Daniel Martinez', '23');
INSERT INTO timing (match_id, event, player_name, time) VALUES (2, 'Yellow Card', 'Isabella Anderson', '62');

-- Free Kicks
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Free Kick', 'William Taylor', '40');
INSERT INTO timing (match_id, event, player_name, time) VALUES (2, 'Free Kick', 'Sophia Davis', '70');

-- Substitutions
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Substitution', 'Alex Johnson', '58');
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Substitution', 'Ella Moore', '63');
INSERT INTO timing (match_id, event, player_name, time) VALUES (2, 'Substitution', 'James Wilson', '75');
INSERT INTO timing (match_id, event, player_name, time) VALUES (3, 'Substitution', 'Grace Brown', '82');

-- Penalty
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Penalty', 'William Taylor', '88');
INSERT INTO timing (match_id, event, player_name, time) VALUES (2, 'Penalty', 'David Brown', '67');

-- Corners
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Corner', NULL, '10');
INSERT INTO timing (match_id, event, player_name, time) VALUES (1, 'Corner', NULL, '37');
INSERT INTO timing (match_id, event, player_name, time) VALUES (2, 'Corner', NULL, '52');
