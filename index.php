<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login/Sign Up</title>
</head>

<body class="entry-page">
    <h3>Welcome to Our Site!</h3>

    <?php
    if (!isset($_SESSION["user_id"])) { ?>
        <div class="links">
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        </div>
    <?php } else { ?>
        <a href="profile.php">Go to Profile</a>
    <?php } ?>
</body>

</html>