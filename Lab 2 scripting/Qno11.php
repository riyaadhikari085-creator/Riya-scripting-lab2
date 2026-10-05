<?php

function calculateArea($base, $height, $shape)
{
    switch (strtolower($shape)) {

        case "triangle":
            return 0.5 * $base * $height;

        case "parallelogram":
            return $base * $height;

        case "square":
            return $base * $base;

        default:
            return "Invalid shape";
    }
}

echo "Triangle Area = " . calculateArea(10, 8, "triangle") . "<br>";

echo "Parallelogram Area = " . calculateArea(10, 8, "parallelogram") . "<br>";

echo "Square Area = " . calculateArea(5, 5, "square");

?>