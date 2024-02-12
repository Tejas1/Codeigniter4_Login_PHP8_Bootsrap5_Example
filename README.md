# Codeigniter4_Login_PHP8_Bootsrap5_Example
Sample Example of Codeigniter4 Login & validation with PHP 8 and Bootstrap 5

* Steps to run *

I have Used Windows 10 OS with XAMPP, Composer & Visual Studio Editor

I perform following steps to complete this assignment

Step 1 : Download exe & Install XAMPP & Composer and keep MySQL & XAMPP running

Step 2 : In php.ini file enable extension=intl & extension=zip

Step 3 : Open CMD and type composer

Step 4 : On CMD go to project path in my case it is ( C:\xampp\htdocs\assignment> ) and run 2 commands one after another

	I . composer create-project codeigniter4/appstarter assignment
 
	II. composer require twbs/bootstrap:5.3.2
 
Step 5 : Now open terminal in Visual studio and to to path C:\xampp\htdocs\assignment> and run command
	php spark serve --port 1010 (start project with new port)

Step 6 : From XAMPP SERVER open phpmyadmin and create new database I created with name ci4

Step 7 : Create Table name user with below SQL query

	CREATE TABLE `ci4`.`users` (`name` VARCHAR(25) NOT NULL , `email` VARCHAR(125) NOT NULL , `email_verified_at` DATETIME(5) NOT NULL DEFAULT CURRENT_TIMESTAMP , `password` TEXT NOT NULL , `created_at` DATETIME(5) NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` DATETIME(5) NOT NULL DEFAULT CURRENT_TIMESTAMP , `id` INT(11) NOT NULL , PRIMARY KEY (`id`), UNIQUE `email` (`email`)) ENGINE = InnoDB;

Step 8 : Insert testing / dummy data into user table with below SQL Query

	INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `id`) VALUES ('tejas deshpande', 'tejas@gmail.com', '2024-02-12 01:17:23.000000', '$2y$10$dqw0n/AByas3PPhp0diBpudurYWd6AuLrZRRayR8F4UnZnqJ/yAsK', '2024-02-12 01:17:23.000000', '2024-02-12 01:17:23.000000', '1');

Step 9 : Now open any browser and hit url http://localhost:1010/login

Demo video to check output : https://drive.google.com/file/d/19mfMo2pq0smyjomZIBdkmrUCyB1PRjJO/view?usp=sharing

---------------------------------------------------------------------------------------------------------

User Name : tejas@gmail.com
Password : 12345678
