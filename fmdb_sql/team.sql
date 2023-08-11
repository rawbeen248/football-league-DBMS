CREATE TABLE team (
    team_id INT AUTO_INCREMENT PRIMARY KEY,
    team_name VARCHAR(255),
    location VARCHAR(255),
    tot_players INT,
    manager VARCHAR(255),
    coach VARCHAR(255)
) ENGINE=InnoDB;



INSERT INTO team (team_name, location, tot_players, manager, coach) VALUES
    ('Team A', 'City A', 20, 'Manager A', 'Coach A'),
    ('Team B', 'City B', 18, 'Manager B', 'Coach B'),
    ('Team C', 'City C', 22, 'Manager C', 'Coach C'),
    ('Team D', 'City D', 15, 'Manager D', 'Coach D'),
    ('Team E', 'City E', 19, 'Manager E', 'Coach E'),
    ('Team F', 'City F', 17, 'Manager F', 'Coach F'),
    ('Team G', 'City G', 21, 'Manager G', 'Coach G'),
    ('Team H', 'City H', 16, 'Manager H', 'Coach H');
