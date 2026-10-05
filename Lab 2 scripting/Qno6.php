<?php

function calculateAgeInDays($birthYear)
{
    $currentYear = date("Y");
    $age = $currentYear - $birthYear;
    $days = $age * 365;

    return $days;
}

$birthYear = 2005;

echo "Age in days = " . calculateAgeInDays($birthYear);

?>