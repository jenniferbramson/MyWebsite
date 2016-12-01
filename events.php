<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content="autor: jenniferbramson">
    <title>Still Coming Up With A Title</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body id="events">
    <?php include_once "./includes/mynav.php"; ?>
    
    <form id="eventInput">
      <h3>Enter up to three events to track</h3>

      <fieldset>
        <input id="input1" type="text" required>
        <span class="special"></span>
      </fieldset>

      <fieldset>
        <input id="input2" type="text" required>
        <span class="special"></span>
      </fieldset>

      <fieldset>
        <input id="input3" type="text" required>
        <span class="special"></span>
      </fieldset>

      <input type="submit" value="Submit">
      <span id="error"></span>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./js/events.js"></script>
  </body>
</html>
