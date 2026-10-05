<?php

function sumNumbers($a, $b)
{
    $sum = $a + $b;

    if ($a == $b) {
        return $sum * 3;
    } else {
        return $sum;
    }
}

echo sumNumbers(5, 5);

?>