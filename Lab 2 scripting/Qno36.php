<!DOCTYPE html>
<html>
<head>
    <title>Income Tax Calculator</title>
</head>

<body>

<h2>Annual Income Tax Calculator</h2>

<form method="post">

    Annual Taxable Income:
    <input type="number" name="income" min="0" required>
    <br><br>

    Gender:

    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

    <br><br>

    <input type="submit" name="calculate" value="Calculate Tax">

</form>

<?php

if (isset($_POST['calculate'])) {

    $income = (float) $_POST['income'];
    $gender = $_POST['gender'];

    $remaining = $income;
    $tax = 0;

    /* First NPR 1,000,000 */

    if ($remaining > 0) {

        $amount = min($remaining, 1000000);

        $tax += $amount * 0.01;

        $remaining -= $amount;
    }


    /* Next NPR 500,000 */

    if ($remaining > 0) {

        $amount = min($remaining, 500000);

        $tax += $amount * 0.10;

        $remaining -= $amount;
    }


    /* Next NPR 1,000,000 */

    if ($remaining > 0) {

        $amount = min($remaining, 1000000);

        $tax += $amount * 0.20;

        $remaining -= $amount;
    }


    /* Next NPR 1,500,000 */

    if ($remaining > 0) {

        $amount = min($remaining, 1500000);

        $tax += $amount * 0.27;

        $remaining -= $amount;
    }


    /* Above NPR 4,000,000 */

    if ($remaining > 0) {

        $tax += $remaining * 0.35;
    }


    /* Female taxpayer gets 10% discount */

    $discount = 0;

    if ($gender == "female") {

        $discount = $tax * 0.10;
        $tax = $tax - $discount;
    }


    echo "<h3>Tax Details</h3>";

    echo "Annual Taxable Income: NPR " . number_format($income, 2) . "<br>";

    echo "Tax Calculated: NPR " . number_format($tax, 2) . "<br>";

    echo "Total Tax Payable: NPR " . number_format($tax, 2) . "<br>";

    echo "Net Income After Tax: NPR "
        . number_format($income - $tax, 2);

}

?>

</body>
</html>