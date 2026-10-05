<?php

function numberOfCars($people)
{
    return ceil($people / 5);
}

$people = 12;

echo "Number of cars required = " . numberOfCars($people);

?>