<?php

function fourCopies($string)
{
    if (strlen($string) < 2) {
        return $string;
    }

    $firstTwo = substr($string, 0, 2);

    return $firstTwo . $firstTwo . $firstTwo . $firstTwo;
}

echo fourCopies("C Sharp") . "<br>";
echo fourCopies("JS") . "<br>";
echo fourCopies("a");

?>