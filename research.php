<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content="author: jenniferbramson">
    <title>1825 Days</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body id="research">
    <?php include_once "./includes/mynav.php"; ?>

    <p class="firstP">I grew up in a family full of doctors and scientists. They all wanted a mentee, so most of my childhood was spent in hospitals learning CPR, cell mutation, and watching surgeries. This led me to workeing on melanoma research at UNC hospital for three summers. I consented patients into studies, shadowed a surgeon, entered the collected data into the database, and eventually started analyzing the data in SAS. This programming was the first programming I ever did, eventually leading me to computer science at Pitt. While working there, I was a co-author on two papers. The papers are really cool in that they look at how our genes are involved in different presentations of melanoma (yes, there's more than one type of melanoma).</p>

    <img id="dna" src="./img/dna/dna-1.png"/>

    <h2>NRAS and BRAF Mutations</h2>
    <p class="regP">BRAF gene melanoma tends to be in younger people, around the age of 20. NRAS tends to be in the older crowd, over the age of 50. Both mutations are not inherited and occur in the mole, which is the tumor. When one of these mutations are found, the melanoma appears to be more deadly. Gene testing for melanoma patients is relatively new, starting around 2005, so the data on it isn't quite as numerous as it is for physical traits. Traits, such as red hair, freckles, or light-colored eyes, are the inherited part that put you at risk for melanoma.</p>

    <h2>IRF4 rs12203592</h2>
    <p>If the IRF4 gene is found to be have a base change, which is more common than a mutation, the melanoma is more likely to be found at a younger age and be more deadly. A base change means that it just has a different DNA make-up than the more commonly found configuration. The change in IRF4 is inherited.</p>
    <br>
    <p>There are two IRF4 compositions that are important. The first tends to occur in people with fair features, chronic sun exposure, and older age - this is the one with a base change. The second is related to younger age, increased number of moles, and darker features. This basically suggested that there is more than one type of melanoma.</p>
    <br>
    <p class="regP">Now, with the knowledge of IRF4's role in melanoma, we know that medicines targetting that gene are more likely to successfully treat certain melanomas, and that's pretty darn cool.</p>

    <h2>Avoiding Melanoma</h2>
    <p>To decrease your chance of getting melanoma, there's a few things you can do:</p>

    <div class="sun">
      <div id="left">
        <h4>Shade Yourself</h4>
        <img src="./img/darth.jpeg"/>
      </div>

      <div id="center">
        <h4>Wear Sunscreen</h4>
        <img src="./img/sunscreen.jpeg"/>
      </div>

      <div id="right">
        <h4>Avoid Tanning Beds</h4>
        <img src="./img/toaster.jpeg"/>
      </div>
    </div>

    <p class="lastP">A sunny day is great, but at least skip the last one and don't let yourself burn.</p>

    <?php include_once "./includes/footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./js/research.js"></script>
  </body>
</html>
