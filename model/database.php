<?php
  $host = 'localhost';
  $db = 'bingtek';
  $user = 'root';
  $pass = 'root';
  $home_table = "`home_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $about_table = "`about_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $footer_table = "`footer_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $nav_table = "`nav_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $contacts_table = "`contacts_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $first_ps_table = "`first-ps_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $second_ps_table = "`second-ps_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $third_ps_table = "`third-ps_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $fourth_ps_table = "`fourth-ps_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";


  try {
    $handler = new PDO("mysql:host=$host;","$user","$pass");
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $handler->exec("
    CREATE DATABASE IF NOT EXISTS `$db`;
    CREATE TABLE IF NOT EXISTS $db.$home_table
    CREATE TABLE IF NOT EXISTS $db.$about_table
    CREATE TABLE IF NOT EXISTS $db.$footer_table
    CREATE TABLE IF NOT EXISTS $db.$nav_table
    CREATE TABLE IF NOT EXISTS $db.$contacts_table
    CREATE TABLE IF NOT EXISTS $db.$first_ps_table
    CREATE TABLE IF NOT EXISTS $db.$second_ps_table
    CREATE TABLE IF NOT EXISTS $db.$third_ps_table
    CREATE TABLE IF NOT EXISTS $db.$fourth_ps_table");
  } catch (PDOException $e) {
    echo ($e->getMessage());
    die();
  }

  print_r(PDO::getAvailableDrivers());

 ?>
