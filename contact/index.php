<!DOCTYPE html>
<html class="no-js" lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
    <meta name="description" content="Get ahold of us">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php require "../php/scripts.php";?>
    <?php require "../php/styles.php";?>
    <link rel="stylesheet" type="text/css" href="css/contact.css" />
  </head>
  <body>
    <?php include_once("../php/analyticstracking.php");?>
    <nav>
      <?php include "../php/nav.php";?>
    </nav>
    <div class="wrapper">
      <main>
        <section class="contact">
          <div class="contact-form">
            <input type="text" name="name" placeholder="NAME" class="input"/>
            <input type="text" name="email" placeholder="E-MAIL ADDRESS" class="input"/>
            <textarea rows="4" placeholder="PROJECT DESCRIPTION" class="input"></textarea>
            <a href="info" class="button">Continue</a>
          </div>
        </section>
      </main>
      <footer>
        <?php include "../php/footer.php";?>
      </footer>
    </div>
  </body>
</html>
