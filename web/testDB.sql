-- Create database
CREATE DATABASE test;

-- Create table
CREATE TABLE users
(
	id INT(10) NOT NULL,
	name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL
);

-- Dump data into table
INSERT INTO users
(
	id, name, email
)
VALUES
(
	1, 'Qozeem Odeniran', 'qozeemodeniran@gmail.com'
);