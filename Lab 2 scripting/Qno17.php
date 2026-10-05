<?php

function addIf($string)
{
    if (substr($string, 0, 2) == "if") {
        return $string;
    } else {
        return "if " . $string;
    }
}

echo addIf("else") . "<br>";
echo addIf("if else") . "<br>";
echo addIf("if");

?>