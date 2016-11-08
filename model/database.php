<?php
  $host = 'localhost';
  $db = 'bingtek';
  $user = 'root';
  $pass = '';
  $handler = new PDO("mysql:host=$host;","$user","$pass");

  $home_table = "`home_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $about_table = "`about_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $footer_table = "`footer_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $nav_table = "`nav_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $contacts_table = "`contacts_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $first_ps_table = "`first-ps_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $second_ps_table = "`second-ps_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $third_ps_table = "`third-ps_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $fourth_ps_table = "`fourth-ps_content`(`id` INT NOT NULL AUTO_INCREMENT, `section` VARCHAR( 45 ) NOT NULL, `body_content` TEXT NULL, `image_url` TEXT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";
  $login_table = "`login_credentials`(`id` INT NOT NULL AUTO_INCREMENT, `username` VARCHAR(100) NOT NULL, `password` TEXT NOT NULL, `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`));";


    try
    {
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
      CREATE TABLE IF NOT EXISTS $db.$fourth_ps_table
      CREATE TABLE IF NOT EXISTS $db.$login_table
      ");
    }
    catch (PDOException $e)
    {
      echo ($e->getMessage());
      die();
    }

    //insert default login credentials
    try
    {
      $login_check = $handler->query("SELECT * FROM bingtek.login_credentials");
      $query = $login_check->fetch();

      if (empty($query))
      {
        $login_default = $handler->prepare("INSERT INTO bingtek.login_credentials(username,password) VALUES('admin', 'admin')");
        $login_default->execute();
      }
      //Debugging code. Comment out on production
      else
      {
        echo "Could not insert into login_credentials";
      }
    }
    catch (Exception $e)
    {
      echo ($e->getMessage());
    }


  function insert_content($table, $section, $body_content)
  {
    global $db, $handler;
    try
    {
      $content = $handler->prepare("INSERT INTO `$db`.`$table`(section, body_content) VALUES(?,?)");
      $content->execute
      (
        array
        (
          $section,
          $body_content
        )
      );
    }
    catch (Exception $e)
    {
      $e->getMessage();
    }
  }

  function insert_image($table, $section, $image_url)
  {
    global $db, $handler;
    try
    {
      $image = $handler->prepare
      ("
        INSERT INTO `$db`.`$table`(section, image_url) VALUES(?, ?);
      ");
      $image->execute
      (
        array
        (
          $section,
          $image_url
        )
      );
    }
    catch (Exception $e)
    {
    }

  }

  function retrieve_data($table, $section, $return_column)
  {
    global $db, $handler;
    $query = $handler->query
    ("
      SELECT * FROM `$db`.`$table` WHERE section = \"$section\";
    ");

    $row = $query->fetch(PDO::FETCH_ASSOC);

      echo $row["$return_column"];

  }

  function verify_login($username, $password)
  {
    global $handler;

      $query = $handler->query("SELECT * FROM `bingtek`.`login_credentials` WHERE username = \"$username\" AND password = \"$password\"");
      $row = $query->fetch(PDO::FETCH_ASSOC);

      if($row['username'] === $username && $row['password'] === $password)
      {
        return header("location: ../dashboard.php");
      }
      else
      {
        return header("location: ../index.php?q=no_login");
      }
  }

  function update_content($table, $section, $new_content)
  {
      global $db,$handler;

      $updateContent = $handler->prepare("UPDATE `$db`.`$table` SET body_content = ? WHERE section = ?");
      $updateContent->execute
      (
        array
        (
          $new_content,
          $section
        )
      );
  }

  function update_image($table, $section, $new_image)
  {
    global $db, $handler;

    $updateImage = $handler->prepare("UPDATE `$db`.`$table` SET image_url = ? WHERE section = ?");
    $updateImage->execute
    (
      array
      (
        $new_image,
        $section
      )
    );
  }




 ?>
