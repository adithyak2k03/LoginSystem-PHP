<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Profile</title>
</head>

<body class="profile-page">
    <?php require_once 'includes/profile.inc.php'; ?>

    <form action="includes/logout.inc.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>

</html>