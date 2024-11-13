<?php

declare(strict_types=1);// type declarations

require_once 'dbh.inc.php';
require_once 'profile_model.inc.php';
require_once 'profile_contr.inc.php'; // Loads controller which loads model

if (isset($user_data)) {
    require_once 'profile_view.inc.php';
    display_profile($user_data);
} else {
    echo "<p>Error loading profile data.</p>";
}
