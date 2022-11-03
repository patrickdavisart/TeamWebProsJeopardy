<?php
 
    $username = "root";
    $password ="";
    $server= "localhost";
    
    $conn = mysqli_connect($server, $username, $password);

    if(!$conn){
        die("Could not connect to server " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS `demo-registration`";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS `demo-registration`.`credentials` (`id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(16) NOT NULL , `password` VARCHAR(255) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    mysqli_query($conn, $sql);

    $sql = "ALTER TABLE `demo-registration`.`credentials` ADD UNIQUE(`username`)";
    mysqli_query($conn, $sql);
    
    $sql = "CREATE TABLE IF NOT EXISTS `demo-registration`.`user_points` (`id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(16) NOT NULL , `score` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    mysqli_query($conn, $sql);
?>