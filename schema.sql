CREATE DATABASE mywebsite;

USE mywebsite;

CREATE TABLE IF NOT EXISTS `students` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`first_name` varchar(100) NOT NULL,
`last_name` varchar(100) NOT NULL,
`grade` varchar(100) NOT NULL,
`age` integer NOT  NULL,
PRIMARY KEY (`id`)
);

INSERT INTO `students` (`first_name`, `last_name`, `grade`, `age`) VALUES 
('Rohit', 'Kumar', '6', 12), 
('Nisha', 'Jadhav', '5', 13),
('Aayush', 'Joshi', '4', 14), 
('Shweta', 'Pawar', '10', 15);