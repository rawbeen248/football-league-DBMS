CREATE TABLE matches (
    match_id INT AUTO_INCREMENT PRIMARY KEY,
    match_date DATETIME,
    location VARCHAR(255),
    home_team_id INT,
    away_team_id INT,
    referee VARCHAR(255),
    full_time BOOLEAN,
    home_score INT,
    away_score INT,
    home_penalty INT,
    away_penalty INT,
    FOREIGN KEY (home_team_id) REFERENCES team(team_id),
    FOREIGN KEY (away_team_id) REFERENCES team(team_id)
) ENGINE=InnoDB;


INSERT INTO matches (match_date, location, home_team_id, away_team_id, referee, full_time, home_score, away_score, home_penalty, away_penalty) VALUES
    ('2023-08-01 15:00:00', 'Stadium A', 1, 2, 'John Smith', 1, 2, 1, NULL, NULL),
    ('2023-08-05 18:30:00', 'Stadium B', 3, 4, 'Jane Doe', 1, 3, 2, NULL, NULL),
    ('2023-08-10 20:15:00', 'Stadium C', 5, 6, 'Mike Johnson', 0, 2, 3, NULL, NULL),
    ('2023-08-15 14:00:00', 'Stadium D', 7, 8, 'Sarah Williams', 1, 1, 1, NULL, NULL),
    ('2023-08-20 17:45:00', 'Stadium A', 1, 5, 'David Brown', 1, 2, 0, NULL, NULL);