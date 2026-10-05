<?php

function convertUppercase($string)
{
    if (strlen($string) < 3) {
        return strtoupper($string);
    } else {
        return $string;
    }
}

echo convertUppercase("Nepal") . "<br>";
echo convertUppercase("Np") . "<br>";
echo convertUppercase("Bca") . "<br>";
echo convertUppercase("Bachelor") . "<br>";

?>