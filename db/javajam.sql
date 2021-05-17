CREATE DATABASE javajam;
USE javajam;

CREATE TABLE members ( 
    userID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name  VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

GRANT ALL PRIVILEGES ON javajam TO 'user'@'localhost';
CREATE USER 'user'@'localhost' IDENTIFIED BY 'userpwd';