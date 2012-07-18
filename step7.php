<?php

// Set a cookie
// Note: This has to be done before any other output gets sent to the browser
setcookie('codefoorpgname', 'Steve', time() + (365 * 24 * 60 * 60), '/', 'smcnabb.dev.v.ign.com');

include 'html/header.php';

// All cookies are stored in the special $_COOKIE array
echo 'Cookies:';
echo '<ul>';
foreach ($_COOKIE as $key => $value)
{
    echo '<li><strong>'.$key.'</strong> '.substr($value, 0, 50).'...</li>';
}
echo '</ul>';

include 'html/footer.php';

// TODO ???
