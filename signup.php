<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digifurniture";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $name;
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>

  <!-- Start Contact Form Section -->
  <div class="untree_co-section">
    <div class="container">
      <div class="block">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-8 pb-4">
            <form action="signup.php" method="post">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                </div>
              </div>
              <div class="form-group mb-5">
                <label class="text-black" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary-hover-outline d-block mx-auto">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Form Section -->

  <!-- Bootstrap Bundle with Popper -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
