<!DOCTYPE html>
<html class="no-js" lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portfolio</title>
    <meta name="description" content="Check out our portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require "../php/scripts.php";?>
    <?php require "../php/styles.php";?>
    <link rel="stylesheet" type="text/css" href="css/portfolio.css" />
  </head>
  <body>
    <?php include_once("../php/analyticstracking.php");?>
    <nav>
      <?php include "../php/nav.php";?>
    </nav>
    <div class="wrapper">
      <main>
        <section class="player">
          <video id="main-video" controls><source id="source" src="mp4/fanx-2016.mp4" type="video/mp4"></video>
        </section>
        <section class="video-selector">
          <img src="img/artist.png" class="thumbnail" alt="Artist Alley" onclick="changevideo('mp4/artist-alley.mp4')"/>
          <img src="img/cooking.png" class="thumbnail" alt="Cooking With Deseret Book" onclick="changevideo('mp4/cooking-with-db.mp4')"/>
          <img src="img/fanx.png" class="thumbnail" alt="FanX 2016" onclick="changevideo('mp4/fanx-2016.mp4')"/>
          <img src="img/fashion.png" class="thumbnail" alt="Fashion Show" onclick="changevideo('mp4/fashion-show.mp4')"/>
          <img src="img/plates.png" class="thumbnail" alt="Giving Plates" onclick="changevideo('mp4/giving-plates.mp4')"/>
          <img src="img/flowers.png" class="thumbnail" alt="Paper Flowers" onclick="changevideo('mp4/paper-flowers.mp4')"/>
          <img src="img/rewards.png" class="thumbnail" alt="Platinum Rewards" onclick="changevideo('mp4/rewards.mp4')"/>
          <img src="img/showfloor.png" class="thumbnail" alt="Comic Con Show Floor" onclick="changevideo('mp4/show-floor.mp4')"/>
        </section>
      </main>
      <footer>
        <?php include "../php/footer.php";?>
      </footer>
    </div>
  </body>
</html>
