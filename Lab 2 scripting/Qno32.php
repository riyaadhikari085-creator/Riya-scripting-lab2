<!DOCTYPE html>
<html>
<head>
    <title>Mark Sheet</title>
</head>
<body>

<h2>Student Mark Sheet</h2>

<form method="post">

    Student Name:
    <input type="text" name="name" required>
    <br><br>

    English:
    <input type="number" name="english" min="0" max="100" required>
    <br><br>

    Math:
    <input type="number" name="math" min="0" max="100" required>
    <br><br>

    Science:
    <input type="number" name="science" min="0" max="100" required>
    <br><br>

    Computer:
    <input type="number" name="computer" min="0" max="100" required>
    <br><br>

    <input type="submit" name="submit" value="Generate Mark Sheet">

</form>

<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $english = $_POST['english'];
    $math = $_POST['math'];
    $science = $_POST['science'];
    $computer = $_POST['computer'];

    $total = $english + $math + $science + $computer;
    $percentage = $total / 4;

    echo "<h3>Mark Sheet</h3>";

    echo "Name: $name <br>";
    echo "English: $english <br>";
    echo "Math: $math <br>";
    echo "Science: $science <br>";
    echo "Computer: $computer <br>";
    echo "Total Marks: $total <br>";
    echo "Percentage: $percentage%";

}

?>

</body>
</html>