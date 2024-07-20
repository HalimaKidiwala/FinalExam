<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="favicon.png" />

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link href="css/tiny-slider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <title>DigitalFurniture</title>
</head>

<body>
  <!-- Start Header/Navigation -->
  <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
    <div class="container">
      <a class="navbar-brand" href="index.php">DigitalFurniture<span>.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li><a class="nav-link" href="about.php">About</a></li>
          <li><a class="nav-link" href="products.php">Products</a></li>
          <li><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
          <?php if (isset($_SESSION['username'])) : ?>
            <li>
              <a class="nav-link" href="profile.php">Hi, <?php echo $_SESSION['username']; ?></a>
            </li>
            <li>
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          <?php else : ?>
            <li>
              <a class="nav-link" href="login.php">Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header/Navigation -->

  <!-- Start Hero Section -->
  <div class="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-12 text-center">
          <h1>Products</h1>
          <h3 class="text-center">
            Discover Cutting-Edge Designs and Unmatched Comfort with DigitalFurniture.
          </h3>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <!-- Start products -->
  <div class="product-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p1.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">Glass Based Table</a></h3>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p2.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">Wooden Based Table</a></h3>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p3.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">Small Space Furniture</a></h3>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p4.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">comfortable Chair</a></h3>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p5.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">King Size Bad</a></h3>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p6.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">Queen Size Bad</a></h3>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p7.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">Walter Solid Wood Drawer</a></h3>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p8.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">Cabinets & Sideboard</a></h3>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry">
            <a href="#" class="post-thumbnail"><img src="images/p9.png" alt="Image" class="img-fluid" /></a>
            <div class="post-content-entry">
              <h3 class="text-center"><a href="#">Wardrobes</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End products -->


  <!-- Start Footer Section -->
  <footer class="footer-section">
    <div class="container relative">
      <div class="row g-5 mb-5">
        <div class="col-lg-4">
          <div class="mb-4 footer-logo-wrap">
            <a href="#" class="footer-logo">DigiFurniture<span>.</span></a>
          </div>
          <ul class="list-unstyled custom-social">
            <li>
              <a href="#"><span class="fa fa-brands fa-facebook-f"></span></a>
            </li>
            <li>
              <a href="#"><span class="fa fa-brands fa-twitter"></span></a>
            </li>
            <li>
              <a href="#"><span class="fa fa-brands fa-instagram"></span></a>
            </li>
            <li>
              <a href="#"><span class="fa fa-brands fa-linkedin"></span></a>
            </li>
          </ul>
        </div>

        <div class="col-lg-8">
          <div class="row links-wrap">
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="products.php">Product</a></li>
                <li><a href="contact.php">Contact us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="border-top copyright">
        <div class="row pt-4">
          <div class="col-lg-6">
            <p class="mb-2 text-center text-lg-start">
              Copyright @2024. All Rights Reserved.
            </p>
          </div>

          <div class="col-lg-6 text-center text-lg-end">
            <ul class="list-unstyled d-inline-flex ms-auto">
              <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Section -->





  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>