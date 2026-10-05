<?php

function checkCharacters($string1, $string2)
{
    $total = strlen($string1) + strlen($string2);

    if ($total > 10) {
        return true;
    } else {
        return false;
    }
}

$result = checkCharacters("Hello", "World!");

var_dump($result);

?>