<?php

// No need to declare variable type e.g. integer, string, float
$x = 100;
$y = 20;
$z = 1.45;

// Math is the same as pretty much any other language
$value = ($x * $y) + ($x / $y) - $z;

// Variables in strings with double quotes will get expanded
echo "<p>The value is $value</p>";

// But not with single quotes
echo '<p>The value is $value</p>';

// There's the usual math shortcuts available
$x++; // $x = $x + 1
$y--; // $y = $y - 1;
$x += 2; // $x = $x + 2
$y -= 4; // $y = $y - 4;
$x /= 10; // $x = $x / 10
$y *= 2; // $y = $y * 2;
$value = ($x * $y) + ($x / $y) - $z;
echo '<p>The value is '.number_format($value, 2).'</p>';

// Constant
const MAX_VALUE = 500; // New way to declare in 5.3.0. Can also use define('MAX_VALUE', 500);

// Basic conditional check
if ($value < MAX_VALUE)
{
    echo '<p>The value is less than 500</p>';
}
else
{
    echo '<p>The value is greater than 500</p>';
}

// Inline if / Ternary operator
echo '<p>The value is '.($value < MAX_VALUE ? 'less' : 'greater').' than 500</p>';
