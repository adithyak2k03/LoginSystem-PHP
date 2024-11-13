<?php

declare(strict_types=1);// type declarations

function display_profile($user_data)
{
    echo "<h2>Your Profile</h2>";
    echo "<table border='3' cellpadding='10' cellspacing='10' style='width: 100%; margin: 20px auto;'>";
    echo "<tr><th>Field</th><th>Details</th></tr>";
    echo "<tr><td>Name</td><td>" . htmlspecialchars($user_data['username']) . "</td></tr>";
    echo "<tr><td>Email</td><td>" . htmlspecialchars($user_data['email']) . "</td></tr>";
    echo "</table>";
}


// function display_profile($user_data)
// {
//     echo "<h2>Your Profile</h2>";
//     echo "<br>";
//     echo "<h5>Name: " . htmlspecialchars($user_data['username']) . "!</h5>";
//     echo "<br>";
//     echo "<h5>Email: " . htmlspecialchars($user_data['email']) . "</h5>";
//     echo "<br>";

// }
