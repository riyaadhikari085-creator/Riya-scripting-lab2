<?php

function stringLength($string)
{
    if ($string === "") {
        return 0;
    }

    return 1 + stringLength(substr($string, 1));
}

$string = "Hello";

echo "Length of string = " . stringLength($string);

?>