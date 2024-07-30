<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['delete'])) {
    $string_id = $_POST['string_id'];
    
    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM string_info WHERE string_id = ?");
    $stmt->bind_param("i", $string_id);
    
    // Execute
    $stmt->execute();
    
    echo "<p>Record deleted successfully</p>";
    
    $stmt->close();
}

$sql = "SELECT string_id, message FROM string_info";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinalExam</title>
    <link rel="icon" type="Favicon" href="C:\xampp\htdocs\favicon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: 0dcaf0;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: 0dcaf0;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        main {
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        form {
            margin: 20px 0;
        }
        input[type="number"] {
            padding: 5px;
            font-size: 16px;
        }
        button {
            padding: 5px 15px;
            font-size: 16px;
            color: white;
            background-color: #4CAF50;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<header>
    <h1>Show All Records</h1>
</header>

<main>
    <h2>All Records</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Message</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["string_id"]. "</td>
                    <td>" . $row["message"]. "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>0 results</p>";
    }
    ?>

    <h2>Delete a Message</h2>
    <form method="post" action="">
        <label for="string_id">Enter ID to delete:</label>
        <input type="number" id="string_id" name="string_id" required>
        <button type="submit" name="delete">Delete</button>
    </form>
</main>

</body>
</html>

<?php
$conn->close();
?>
