<?php

function divisibleByFive($number)
{
    if ($number % 5 == 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(divisibleByFive(25));

?>