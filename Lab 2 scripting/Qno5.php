<?php

function triangleArea($base, $height)
{
    $area = 0.5 * $base * $height;
    return $area;
}

$base = 10;
$height = 8;

echo "Area of Triangle = " . triangleArea($base, $height);

?>