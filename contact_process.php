<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $query)) {
        $success = "Message sent successfully!";
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Process</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Contact Us</h2>
        <?php if (isset($success)) { echo "<div class='alert alert-success'>$success</div>"; } ?>
        <?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>
        <a href="index.php#contact" class="btn btn-primary">Go Back</a>
    </div>
</body>
</html>
