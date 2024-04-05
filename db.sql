-- Creating the database
CREATE DATABASE web_assignment CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Creating the announcement table
USE web_assignment;

CREATE TABLE user (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  userName VARCHAR(255),
  email TEXT,
  password TEXT
);