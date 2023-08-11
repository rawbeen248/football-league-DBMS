
CREATE TABLE contract (
    contract_id INT AUTO_INCREMENT PRIMARY KEY,
    player_id INT NOT NULL,
    team_id INT NOT NULL,
    previous_team_id INT,
    salary DECIMAL(10, 2) NOT NULL,
    signed_date DATE NOT NULL,
    expiry_date DATE NOT NULL,
    FOREIGN KEY (player_id) REFERENCES players(player_id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES team(team_id) ON DELETE CASCADE,
    FOREIGN KEY (previous_team_id) REFERENCES team(team_id) ON DELETE SET NULL
) ENGINE=InnoDB;



INSERT INTO contract (player_id, team_id, previous_team_id, salary, signed_date, expiry_date) VALUES
    (1, 1, 2, 15000.00, '2022-01-15', '2023-01-14'),
    (2, 1, NULL, 17000.00, '2021-12-10', '2023-12-09'),
    (3, 2, 1, 14000.00, '2023-02-28', '2024-02-27'),
    (4, 2, NULL, 16000.00, '2022-09-20', '2023-09-19'),
    (5, 3, NULL, 15500.00, '2022-07-05', '2023-07-04'),
    (6, 3, 4, 18000.00, '2022-03-18', '2023-03-17'),
    (7, 4, NULL, 14500.00, '2023-01-05', '2024-01-04'),
    (8, 4, NULL, 16500.00, '2022-10-22', '2023-10-21'),
    (9, 5, 6, 16000.00, '2022-06-30', '2023-06-29'),
    (10, 5, NULL, 17500.00, '2022-02-14', '2023-02-13'),
    (11, 6, 5, 15200.00, '2023-03-01', '2024-03-01'),
    (12, 6, NULL, 18500.00, '2022-11-10', '2023-11-09'),
    (13, 7, NULL, 15800.00, '2022-08-25', '2023-08-24'),
    (14, 7, NULL, 17000.00, '2022-05-12', '2023-05-11'),
    (15, 8, NULL, 16200.00, '2022-04-05', '2023-04-04'),
    (16, 8, 1, 17800.00, '2023-02-18', '2024-02-17'),
    (17, 9, NULL, 16800.00, '2022-12-10', '2023-12-09'),
    (18, 9, 7, 19500.00, '2022-09-03', '2023-09-02'),
    (19, 10, NULL, 17200.00, '2023-07-20', '2024-07-19'),
    (20, 10, NULL, 18500.00, '2022-11-28', '2023-11-27');
