<?php
session_start();
if (isset($_SESSION["user_id"])) {
    header("Location: profile.php");
    exit();
}
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
</head>

<body class="auth-page">
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Create new account</a></p>

    <?php check_login_errors(); ?>
</body>

</html>