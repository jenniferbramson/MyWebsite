<?php
  $filename = basename($_SERVER["SCRIPT_FILENAME"], '.php');
  // Filename is the same as the page name
  $filename = ucwords($filename); // Uppercases first letter in each word

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="author: jenniferbramson">
    <title>1825 Days</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li>
            <a href="/MyWebsite/about.php">About</a>
          </li>
          <li>
            <a href="/MyWebsite/home.php">Home</a>
          </li>
          <li>
            <a href="/MyWebsite/research.php">Research</a>
          </li>
          <li>
            <a href="/MyWebsite/pittsburgh.php">Pittsburgh</a>
          </li>
        </ul>
      </nav>
      <div id="title">
        <h1><?= $filename; ?></h1>
      </div>
    </header>
  </body>
</html>
