<?php

function addLastCharacter($string)
{
    $lastCharacter = substr($string, -1);

    return $lastCharacter . $string . $lastCharacter;
}

echo addLastCharacter("Red") . "<br>";
echo addLastCharacter("Green") . "<br>";
echo addLastCharacter("1");

?>