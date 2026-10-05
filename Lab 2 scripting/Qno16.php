<?php

function difference($a, $b)
{
    $diff = abs($a - $b);

    if ($diff > 51) {
        return $diff * 3;
    } else {
        return $diff;
    }
}

echo difference(100, 40);

?>