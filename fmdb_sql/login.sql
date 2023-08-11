
CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    usertype ENUM('user', 'admin') NOT NULL
) ENGINE=InnoDB;

INSERT INTO login (username, password, usertype) VALUES ('rabindra', '1234', 'admin');
INSERT INTO login (username, password, usertype) VALUES ('rabi', '1111', 'user');
INSERT INTO login (username, password, usertype) VALUES ('adhikari', '1234', 'admin');
INSERT INTO login (username, password, usertype) VALUES ('rabin', '1234', 'user');

