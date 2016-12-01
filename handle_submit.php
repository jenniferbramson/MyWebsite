<?php

  $db = new mysqli('localhost', 'root', 'root');
  if (!$db) {
    die("Connection to SQL failed.");
  }

  // Now that connected:
  $sql = 'CREATE DATABASE IF NOT EXISTS my_db';
  $db->query($sql);
  if ($db) {
   echo "Database created successfully <br/>";
  } else {
   echo "Error creating db <br/>";
  }

  $db->close();

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

?>

