<?php

declare(strict_types=1);// type declarations


if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    $user_data = get_user_profile($pdo, $user_id);

    if (!$user_data) {
        $_SESSION["errors_profile"] = "User not found.";
        header("Location: ../index.php");
        exit();
    }
} else {
    header("Location: ../login.php");
    exit();
}
