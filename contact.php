<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
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
					<h1>"Let's Create Your Dream Space Together!"</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->


	<!-- Start Contact Form -->
	<!-- Contact Form -->
	<div class="untree_co-section">
		<div class="container">
			<div class="block">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-8 pb-4">
						<form action="contact_submit.php" method="post">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label class="text-black" for="fname">First name</label>
										<input type="text" class="form-control" id="fname" name="fname" required>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label class="text-black" for="lname">Last name</label>
										<input type="text" class="form-control" id="lname" name="lname" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="text-black" for="email">Email address</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
							<div class="form-group mb-5">
								<label class="text-black" for="message">Message</label>
								<textarea name="message" class="form-control" id="message" cols="30" rows="5" required></textarea>
							</div>
							<button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contact Form -->



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