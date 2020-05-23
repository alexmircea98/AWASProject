CREATE DATABASE myDb; 

USE myDb;

#-- EXAMPLE OF USAGE:

CREATE TABLE `Person` (
	`id` INT unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(25),
	`email` VARCHAR(50),
	`password` CHAR(64), 
	PRIMARY KEY (`id`)
);
#-- $x=hash('sha256', $password . 'decamp');

INSERT INTO `Person` (`name`, `email`, `password`) VALUES
('Admin', 'admin@example.com', 'e155e529d1a57ae30f0e42dd9f885534da88126da980a67f3e646b13c52e7848'), 
#-- adminAWAS
('John_Smith', 'john@example.com', 'f88c83eb89231ed44b34cc2a49feb2dd5a52fed3d034567f80bc27df2a52d019'), 
#-- 123456AWAS
('Bob_Andrew', 'bobby@example.com','fb0017e335ec40093ebae6a35097d0adb8aca1051fc22479b6ff502c91775976'); 
#-- bobbyAWAS
