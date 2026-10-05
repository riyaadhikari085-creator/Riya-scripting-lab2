<?php

function addFirstThree($string)
{
    $firstThree = substr($string, 0, 3);

    return $firstThree . $string . $firstThree;
}

echo addFirstThree("Python") . "<br>";
echo addFirstThree("JS") . "<br>";
echo addFirstThree("Cod");

?>