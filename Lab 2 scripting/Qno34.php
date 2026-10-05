<!DOCTYPE html>
<html>
<body>

<h2>Simple Interest Calculator</h2>

<form method="post">

    Principal:
    <input type="number" name="principal" required>
    <br><br>

    Time:
    <input type="number" name="time" required>
    <br><br>

    Rate:
    <input type="number" name="rate" required>
    <br><br>

    <input type="submit" name="calculate" value="Calculate">

</form>

<?php

if (isset($_POST['calculate'])) {

    $p = $_POST['principal'];
    $t = $_POST['time'];
    $r = $_POST['rate'];

    $si = ($p * $t * $r) / 100;

    echo "Simple Interest = " . $si;
}

?>

</body>
</html>