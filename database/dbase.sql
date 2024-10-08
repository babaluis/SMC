CREATE DATABASE smc;

USE smc;

CREATE TABLE records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (id)
);

CREATE TABLE users (
    userID INT not Null AUTO_INCREMENT,
    fname VARCHAR(255),
    lname VARCHAR(255),
    email VARCHAR(255),
    tries int (11) DEFAULT 0, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (userID)
);