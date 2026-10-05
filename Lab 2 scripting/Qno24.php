<?php

$students = [
    ["Ram", 78, 82, 75, 80, 85],
    ["Sita", 85, 79, 88, 90, 82],
    ["Hari", 65, 70, 68, 72, 75],
    ["Gita", 90, 85, 92, 88, 95]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Mark Sheet</title>
</head>

<body>

<h2>Student Mark Sheet</h2>

<table border="1" cellpadding="8">

<tr>
    <th>Name</th>
    <th>English</th>
    <th>Math</th>
    <th>Science</th>
    <th>Computer</th>
    <th>Nepali</th>
</tr>

<?php

foreach ($students as $student) {

    echo "<tr>";

    foreach ($student as $mark) {
        echo "<td>" . $mark . "</td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>