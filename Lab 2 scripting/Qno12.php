<?php

function findIndex($array, $string)
{
    return array_search($string, $array);
}

$names = array("Ram", "Shyam", "Hari", "Sita");

echo "Index = " . findIndex($names, "Hari");

?>