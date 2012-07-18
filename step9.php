<?php

include 'html/header.php';

require_once 'config.php';

// Connect to the database
$database = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Execute a select query
$query = mysqli_query(
    $database,
    "SELECT name FROM users"
);

// Fetch the results
echo 'Users:';
echo '<ul>';
while ($row = mysqli_fetch_array($query))
{
    echo '<li>'.$row['name'].'</li>';
}
echo '</ul>';

include 'html/footer.php';
