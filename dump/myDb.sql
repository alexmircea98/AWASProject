CREATE DATABASE myDb; 

USE myDb;

#-- EXAMPLE OF USAGE:

CREATE TABLE `Person` (
	`id_user` INT unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	`email` VARCHAR(50) NOT NULL,
	`password` CHAR(64) NOT NULL, 
	PRIMARY KEY (`id_user`)
);

CREATE TABLE `Location` (
	`id_location` INT unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	`price` DOUBLE NOT NULL,
	`description` CHAR(64) NOT NULL, 
	`image` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id_location`)
);



CREATE TABLE `Tickets` (
	`id_ticket` INT unsigned NOT NULL AUTO_INCREMENT,
	`id_user` INT unsigned NOT NULL,
	`id_location` INT unsigned NOT NULL,
	`paid` DOUBLE NOT NULL,
	PRIMARY KEY (`id_ticket`)
);
#-- $x=hash('sha256', $password . 'decamp');

CREATE TABLE `Message` (
	`id_message` INT unsigned NOT NULL AUTO_INCREMENT,
	`subject` INT unsigned NOT NULL,
	`id_location` INT unsigned NOT NULL,
	`description` VARCHAR(64) NOT NULL, 
	PRIMARY KEY (`id_message`)
); 
#--Work in progress

INSERT INTO `Person` (`name`, `email`, `password`) VALUES
('Admin', 'admin@example.com', 'e155e529d1a57ae30f0e42dd9f885534da88126da980a67f3e646b13c52e7848'), 
#-- adminAWAS
('John_Smith', 'john@example.com', 'f88c83eb89231ed44b34cc2a49feb2dd5a52fed3d034567f80bc27df2a52d019'), 
#-- 123456AWAS
('Bob_Andrew', 'bobby@example.com','fb0017e335ec40093ebae6a35097d0adb8aca1051fc22479b6ff502c91775976'); 
#-- bobbyAWAS


INSERT INTO `Location` (`name`, `price`, `description`, `image`) VALUES
('Rome', 199 , 'Wonderful place to visit!', 'assets/img/gallery/list1.png'),
('Paris', 249 , 'The city of love.', 'assets/img/gallery/location2.png'),
('Nepal', 279 , 'Clean air and the best mountain views.', 'assets/img/gallery/location5.png'); 

