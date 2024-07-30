<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinalExam</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="icon" type="Favicon" href="C:\xampp\htdocs\favicon.ico">
    <style>
        /* Custom styles for navbar */
        .navbar {
            background-color: #495057; /* Light grey background color */
            padding: 10px 20px; /* Padding for the navbar */
            display: flex; /* Flexbox layout for navbar items */
            justify-content: space-between; /* Space between items */
            align-items: center; /* Center items vertically */
        }

        .navbar-left {
            flex: 1; /* Take up remaining space */
        }

        .navbar-right {
            flex: 1; /* Take up remaining space */
            text-align: right; /* Align items to the right */
        }

        .navbar a {
            color: #000; /* Default text color */
            text-decoration: none; /* Remove underline */
            padding: 10px 15px; /* Padding inside the button */
            transition: color 0.3s; /* Smooth transition for text color */
        }

        .navbar a.algoma {
            color: #fff; /* White color */
        }

        .navbar a.button {
            display: inline-block;
            background-color: #0dcaf0; /* Blue background */
            color: #fff; /* White text color */
            border-radius: 4px; /* Rounded corners */
            border: 1px solid #0dcaf0; /* Blue border */
            margin-left: 10px; /* Space between buttons */
            padding: 10px 15px; /* Padding inside the button */
            text-decoration: none; /* Remove underline */
            transition: background-color 0.3s, color 0.3s; /* Smooth transition */
        }

        .navbar a.button:hover {
            background-color: #0dcaf0; /* Light blue on hover */
            border-color: #0dcaf0; /* Light blue border on hover */
        }
    </style>
</head>
<body>

<!-- Navbar Section -->
<nav class="navbar">
    <div class="navbar-left">
        <a href="#" class="algoma">Algoma University</a>
    </div>

</nav>

