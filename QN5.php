<?php
// Initialize values
$x = 2;
$y = 4;

// Display values before swapping
echo "Before swapping: \n";
echo "x = $x, y = $y\n";

// Swap values without using a third variable
$x = $x + $y;
$y = $x - $y;
$x = $x - $y;

// Display values after swapping
echo "After swapping: \n";
echo "x = $x, y = $y\n";
?>
