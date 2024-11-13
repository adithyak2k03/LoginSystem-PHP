<?php

declare(strict_types=1);// type declarations

function get_user_profile($pdo, $user_id)
{
    $sql = "SELECT username, email FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
