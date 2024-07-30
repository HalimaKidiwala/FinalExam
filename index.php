<?php
include 'header.php';
?>

<h1>Submit a Message</h1>

<form method="post" action="submit.php">
    <input type="text" name="message" maxlength="50" required>
    <button type="submit" name="submit">Submit</button>
</form>

<p><a href="showAll.php">Show all Records</a></p>

<?php
include 'footer.php'; 
?>
