<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME || JAY MATAJI TOURS AND TRAVELS</title>
  <link rel="stylesheet" href="./style/style.css">
  <?php include 'sections/link.php'; ?>

</head>

<body id="top">
  <!-- header section -->
  <?php include 'sections/header.php'; ?>

  <!-- main section -->
  <main>

    <section class="hero" id="home" style="background-image: url('./assets/hero-section/pexels-mukund-patel-1264723-2409361.jpg');">
      <div class="container">

        <h2 class="h1 hero-title">Journey to explore India</h2>

        <p class="hero-text">
          Discover the beauty, culture, and history of India. From majestic mountains to serene beaches, let us take you on an unforgettable journey.
        </p>

        <div class="btn-group">
          <button class="btn btn-primary">Learn more</button>

          <button class="btn btn-secondary">Book now</button>
        </div>

      </div>
    </section>


    <!-- TOUR SEARCH -->
    <?php include 'sections/tour-search.php'; ?>
    <!-- TOUR SEARCH END -->

    <!-- POPULAR -->
    <?php include 'sections/popular.php'; ?>
    <!-- POPULAR END -->

    <!-- ABOUT US -->
    <?php include 'sections/about_us.php'; ?>
    <!-- ABOUT US END -->

    <!-- choose your ride -->
    <?php include './cards.php'; ?>
    <!-- choose your ride end -->

    <!-- FOOTER -->
    <?php include 'sections/footer.php'; ?>
    <!-- FOOTER END -->

  </main>

  <!-- go to top -->
  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>
  <script src="./scripts/script.js"></script>
</body>

</html>