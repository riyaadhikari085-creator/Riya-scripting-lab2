<?php

$name = "Riya";
$age = 20;
$height = 5.4;
$isStudent = true;
$subjects = array("PHP", "Java", "DBMS");

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Student: " . $isStudent . "<br><br>";

echo "Using print_r():<br>";
print_r($subjects);

echo "<br><br>Using var_dump():<br>";
var_dump($subjects);

echo "<br><br>Data Types:<br>";
echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($height) . "<br>";
echo gettype($isStudent) . "<br>";
echo gettype($subjects);

?>