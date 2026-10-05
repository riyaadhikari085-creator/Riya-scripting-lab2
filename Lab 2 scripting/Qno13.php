<?php

function getValue($array, $index)
{
    return $array[$index];
}

$names = array("Ram", "Shyam", "Hari", "Sita");

echo "Value = " . getValue($names, 2);

?>