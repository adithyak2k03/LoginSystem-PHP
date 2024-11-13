<?php
session_start();
if (isset($_SESSION["user_id"])) {
    header("Location: profile.php");
    exit();
}
require_once "includes/signup_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Sign Up</title>
</head>

<body class="auth-page">
    <h3>Sign Up</h3>
    <form action="includes/signup.inc.php" method="post">
        <?php signup_inputs(); ?>
        <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>

    <?php check_signup_errors(); ?>
</body>

</html>