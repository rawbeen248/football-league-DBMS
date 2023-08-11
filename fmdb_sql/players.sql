CREATE TABLE players (
    player_id INT AUTO_INCREMENT PRIMARY KEY,
    player_name VARCHAR(255),
    team_id INT,
    date_of_birth DATE,
    height INT,
    weight INT,
    position_1 VARCHAR(255),
    position_2 VARCHAR(255),
    num_of_nat_match INT,
    num_of_int_match INT,
    employment VARCHAR(255),
    education VARCHAR(255),
    company VARCHAR(255),
    university VARCHAR(255),
    hobbies TEXT,
    expenses DECIMAL(10, 2),
    amateur BOOLEAN,
    FOREIGN KEY (team_id) REFERENCES team(team_id)
) ENGINE=InnoDB;




INSERT INTO players (player_name, team_id, date_of_birth, height, weight, position_1, position_2, num_of_nat_match, num_of_int_match, employment, education, company, university, hobbies, expenses, amateur) VALUES
    ('Player A', 1, '1995-05-15', 180, 75, 'Forward', 'Midfielder', 30, 15, 'Professional Footballer', 'Bachelor\'s Degree in Sports Science', 'Sports Club A', 'University A', 'Playing Football, Reading', 20000.00, 0),
    ('Player B', 1, '1994-08-22', 185, 80, 'Defender', 'Midfielder', 40, 20, 'Professional Footballer', 'Bachelor\'s Degree in Business Administration', 'Sports Club B', 'University B', 'Traveling, Video Games', 22000.00, 0),
    ('Player C', 2, '1997-03-10', 178, 70, 'Midfielder', 'Forward', 25, 12, 'Professional Footballer', 'High School Diploma', 'Sports Club C', 'High School C', 'Listening to Music, Cooking', 18000.00, 0),
    ('Player D', 2, '1996-11-05', 182, 76, 'Goalkeeper', 'Defender', 35, 18, 'Professional Footballer', 'Associate\'s Degree in Physical Education', 'Sports Club D', 'University D', 'Playing Guitar, Traveling', 21000.00, 0),
    ('Player E', 3, '1993-09-20', 175, 68, 'Midfielder', 'Forward', 50, 25, 'Professional Footballer', 'High School Diploma', 'Sports Club E', 'High School E', 'Hiking, Painting', 25000.00, 0),
    ('Player F', 3, '1998-07-14', 183, 78, 'Defender', 'Midfielder', 28, 14, 'Professional Footballer', 'Bachelor\'s Degree in Kinesiology', 'Sports Club F', 'University F', 'Watching Movies, Swimming', 19000.00, 0),
    ('Player G', 4, '1995-01-30', 177, 72, 'Forward', 'Midfielder', 32, 16, 'Professional Footballer', 'High School Diploma', 'Sports Club G', 'High School G', 'Playing Video Games, Cooking', 20500.00, 0),
    ('Player H', 4, '1994-06-08', 180, 75, 'Defender', 'Midfielder', 45, 22, 'Professional Footballer', 'Associate\'s Degree in Sports Management', 'Sports Club H', 'University H', 'Photography, Traveling', 23000.00, 0),
    ('Player I', 5, '1996-12-25', 184, 79, 'Midfielder', 'Forward', 38, 19, 'Professional Footballer', 'Bachelor\'s Degree in Marketing', 'Sports Club I', 'University I', 'Playing Piano, Reading', 21500.00, 0),
    ('Player J', 5, '1992-04-18', 176, 71, 'Goalkeeper', 'Defender', 29, 14, 'Professional Footballer', 'High School Diploma', 'Sports Club J', 'High School J', 'Cooking, Gardening', 19500.00, 0),
    ('Player K', 6, '1997-08-02', 179, 74, 'Defender', 'Midfielder', 42, 21, 'Professional Footballer', 'Associate\'s Degree in Exercise Science', 'Sports Club K', 'University K', 'Watching Documentaries, Traveling', 24000.00, 0),
    ('Player L', 6, '1993-03-12', 182, 77, 'Midfielder', 'Forward', 55, 28, 'Professional Footballer', 'Bachelor\'s Degree in Communications', 'Sports Club L', 'University L', 'Playing Guitar, Swimming', 26000.00, 0),
    ('Player M', 7, '1996-10-05', 176, 71, 'Forward', 'Midfielder', 33, 17, 'Professional Footballer', 'High School Diploma', 'Sports Club M', 'High School M', 'Listening to Music, Cooking', 20200.00, 0),
    ('Player N', 7, '1995-07-28', 185, 80, 'Defender', 'Midfielder', 49, 24, 'Professional Footballer', 'Bachelor\'s Degree in Psychology', 'Sports Club N', 'University N', 'Playing Video Games, Hiking', 23000.00, 0),
    ('Player O', 8, '1994-02-15', 180, 75, 'Midfielder', 'Forward', 36, 18, 'Professional Footballer', 'High School Diploma', 'Sports Club O', 'High School O', 'Cooking, Traveling', 21200.00, 0),
    ('Player P', 8, '1993-11-10', 186, 82, 'Defender', 'Midfielder', 31, 15, 'Professional Footballer', 'Associate\'s Degree in Business', 'Sports Club P', 'University P', 'Photography, Reading', 19500.00, 0),
    ('Player Q', 1, '1998-01-22', 175, 68, 'Midfielder', 'Forward', 40, 20, 'Professional Footballer', 'High School Diploma', 'Sports Club Q', 'High School Q', 'Playing Piano, Traveling', 22500.00, 0),
    ('Player R', 1, '1997-06-07', 183, 78, 'Defender', 'Midfielder', 52, 26, 'Professional Footballer', 'Bachelor\'s Degree in Sociology', 'Sports Club R', 'University R', 'Cooking, Watching Movies', 23500.00, 0),
    ('Player S', 2, '1992-09-18', 178, 73, 'Forward', 'Midfielder', 28, 14, 'Professional Footballer', 'High School Diploma', 'Sports Club S', 'High School S', 'Playing Guitar, Traveling', 20800.00, 0),
    ('Player T', 2, '1991-12-03', 182, 76, 'Goalkeeper', 'Defender', 37, 18, 'Professional Footballer', 'Associate\'s Degree in Nutrition', 'Sports Club T', 'University T', 'Swimming, Cooking', 21800.00, 0);

