# User-registration-and-login-management-system-with-php-mysql
User Registration And Login With PHP MYSQL

Important Note:

Change your database username and password in db.php file.


Create Database Using the following Query:

CREATE DATABASE IF NOT EXISTS register;


and Create Table either importing attached sql file (db.sql) or using the below SQL query:

CREATE TABLE IF NOT EXISTS register.`users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );
