<?php
function calculateTriangleArea($base, $height) {
    // Calculate the area of the triangle using the formula: (base * height) / 2
    $area = ($base * $height) / 2;
    return $area;
}

// Example usage:
$base = 5;
$height = 3;
$area = calculateTriangleArea($base, $height);
echo "The area of the triangle with base $base and height $height is: " . $area . "\n";
?>
