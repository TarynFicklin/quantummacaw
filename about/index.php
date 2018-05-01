<!DOCTYPE html>
<html class="no-js" lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About Us</title>
    <meta name="description" content="Learn about the team">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php require "../php/scripts.php";?>
    <?php require "../php/styles.php";?>
    <link rel="stylesheet" type="text/css" href="css/about.css" />
  </head>
  <body>
    <?php include_once("../php/analyticstracking.php");?>
    <nav>
      <?php include "../php/nav.php";?>
    </nav>
    <div class="wrapper">
      <main>
        <div class="about">
          <section class="profile" id="tim">
            <h2>Tim Bennette</h2>
            <img src="img/tim.png" class="user-pic" alt="Tim Bennette"/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque mattis ligula sed sollicitudin. Morbi eget efficitur massa, in volutpat ipsum. Aenean laoreet, felis scelerisque mattis elementum, risus libero vestibulum dui, id elementum nulla magna vel augue.</p>
            <a href="../contact/" class="button">Contact</a>
          </section>
          <section class="profile" id="taryn">
            <h2>Taryn Ficklin</h2>
            <img src="img/taryn.png" class="user-pic" alt="Taryn Ficklin"/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque mattis ligula sed sollicitudin. Morbi eget efficitur massa, in volutpat ipsum. Aenean laoreet, felis scelerisque mattis elementum, risus libero vestibulum dui, id elementum nulla magna vel augue.</p>
            <a href="../contact/" class="button">Contact<a>
          </section>
        </div>
      </main>
      <footer>
        <?php include "../php/footer.php";?>
      </footer>
    </div>
  </body>
</html>
