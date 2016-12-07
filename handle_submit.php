<?php

  // Only enters if form was posted, not hacked url
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new mysqli('localhost', 'root', 'root');
    if (!$db) {
      die("Connection to SQL failed.");
    }

    // Now that connected:
    $sql = "CREATE DATABASE IF NOT EXISTS my_db";
    $db->query($sql);
    if ($db) {
      echo "Database created successfully";
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      $db->query("use my_db");
      $tbl = "CREATE TABLE IF NOT EXISTS MyMessages (
        name VARCHAR(30),
        email VARCHAR(30),
        message TINYTEXT
      )";

      $db->query($tbl);

      $enter = "INSERT INTO `MyMessages`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

      $db->query($enter);

    } else {
      echo "Error creating db";
    }
    var_dump($db);
    $db->close();

  }

?>
