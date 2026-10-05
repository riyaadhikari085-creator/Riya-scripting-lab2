<?php

function largestNumber($a, $b, $c)
{
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

echo "Largest number = " . largestNumber(25, 50, 35);

?>