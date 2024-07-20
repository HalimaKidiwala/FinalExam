<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
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
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-5">
          <div class="intro-excerpt">
            <h1>Innovative Interiors</h1>
            <p class="mb-4">
              innovative Interiors showcases furniture crafted with
              cutting-edge materials and ergonomic designs to elevate your
              living space.
            </p>
            <p>
              <a href="contact.php" class="btn btn-white-outline">Contact Us</a>
            </p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="hero-img-wrap">
            <img src="images/green-sofa-white-living-room-with-copy-space.jpg" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <!-- Start Why Choose Us Section -->
  <div class="why-choose-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-6">
          <h2 class="section-title">Why "DigitalFurniture."?</h2>

          <div class="row my-5">
            <div class="col-6 col-md-6">
              <div class="feature">
                <div class="icon">
                  <img src="images/truck.svg" alt="Image" class="imf-fluid" />
                </div>
                <h3>Quick Shipping</h3>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <div class="icon">
                  <img src="images/bag.svg" alt="Image" class="imf-fluid" />
                </div>
                <h3>Ready to Use</h3>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <div class="icon">
                  <img src="images/support.svg" alt="Image" class="imf-fluid" />
                </div>
                <h3>Quick Support</h3>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <div class="icon">
                  <img src="images/return.svg" alt="Image" class="imf-fluid" />
                </div>
                <h3>Easy Returns</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="img-wrap">
            <img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Why Choose Us Section -->

  <!-- Start We Help Section -->
  <div class="we-help-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <div class="imgs-grid">
            <div class="grid grid-1">
              <img src="images/img-grid-1.jpg" alt="Untree.co" />
            </div>
            <div class="grid grid-2">
              <img src="images/img-grid-2.jpg" alt="Untree.co" />
            </div>
            <div class="grid grid-3">
              <img src="images/img-grid-3.jpg" alt="Untree.co" />
            </div>
          </div>
        </div>
        <div class="col-lg-5 ps-lg-5">
          <h2 class="section-title mb-4">
            We Support Your Vision of Modern Interior Aesthetics
          </h2>
          <ul class="list-unstyled custom-list my-4">
            <li>Innovative Design Solutions</li>
            <li>Contemporary Style Expertise</li>
            <li>Personalized Aesthetic Guidance</li>
            <li>Seamless Integration of Modern Trends</li>
            <li>Elevating Interior Spaces</li>
            <li>Cutting-Edge Decor Inspiration</li>
            <li>Transforming Ideas into Reality</li>
            <li>Sophisticated and Sleek Designs</li>
            <li>Enhancing Functionality with Style</li>
            <li>Tailored Modern Interiors</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End We Help Section -->

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
  <script src="js/custom.js"></script>
</body>

</html>