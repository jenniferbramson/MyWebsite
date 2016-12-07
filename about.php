<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content="author: jenniferbramson">
    <title>1825 Days</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body id="about">
    <?php include_once "./includes/mynav.php"; ?>

    <img id="me" class="aboutImg" src="./img/me.jpg"/>
    <p>Hi, I'm <span>Jennifer Bramson</span>. I am a born and raised North Carolinian 
      who realized the world was beautiful one day and picked up a camera to try and 
      capture it. I mean just look at those pictures, do you blame me? Maybe one day 
      I'll have this camera totally figured out and you'll REALLY see what I mean ...and
      this web development too.</p>

    <div id="slider">
      <div class="slide">
        <img src="./img/greece.jpg"/>
      </div>
      <div class="slide">
        <img src="./img/greece2.jpg"/>
      </div>
      <div class="slide">
        <img src="./img/vienna.jpg"/>
      </div>
      <div class="slide">
        <img src="./img/castle.jpg"/>
      </div>
      <div class="slide">
        <img src="./img/hiking.jpg"/>
      </div>
      <div class="nav next">
        <img src="./img/rightArrow.png"/>
      </div>
      <div class="nav prev">
        <img src="./img/leftArrow.png"/>
      </div>
    </div>

    <br/>
    <p>I spent the first three years of my undergrad over in St Andrews Scotland
      and got to see Europe. It took me until my final year to get a camera,
      hence the occasional phone photo above. I learned to climb mountains, hike
      through blizzards with crampons (spikey little shoe clips), scale some
      shear cliffs, and run into the North sea at 5 am when appropriate. There
      was actually a holiday dedicated to the last one, at least in the students'
      minds. We called it May Dip.</p>
    <br/>
    <p>Eventually one day I wanted to switch from history to CS though. They
      would not let me take a single CS course, so I transfered to Pitt after
      finally deciding to transfer over the summer before my final year. Crazy,
      I know, to sign myself up for an extra year of school like that.</p>
    <br/>
    <p>For a little over a year now, I've been doing CS at Pitt. I got lost
      inside the cathedral, got on the wrong bus and ended up across the river,
      broke an elevator, and made some great friends along the way.</p>
    <br/>
    <p>There's one more thing you should probably know about me. This is some
      of my family:</p>
    <img class="aboutImg" src="./img/fam.jpg"/>
    <p>We sometimes dawn togas and Italian mob clothes. Have you ever heard of
      murder mystery dinners? You should try them sometime.</p>
    <br/>
    <p>Thanks for reading this. I hope you enjoy my site!</p>
    <br/>
    <form id="contactForm">
      <p>Want to get in touch? Fill out the form below.</p>
      <br/>

      <fieldset id="contactHolder">
        <input class="contacters" type="text" name="name" placeholder="Name" required>
        <span class="special"></span>

        <input class="contacters" type="email" name="email" placeholder="Email" required>
        <span class="special"></span>

        <textarea class="contacters" id="bodycontact" name="message" placeholder="Message"></textarea>
        <span class="special"></span>

        <input id="submitBtn" type="submit" value="Submit">
        <span id="error"></span>
      </fieldset>
    </form>

    <h3 id="success" class="lastP">Success! I will answer you soon!</h3>

    <?php include_once "./includes/footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./js/about.js"></script>
  </body>
</html>
