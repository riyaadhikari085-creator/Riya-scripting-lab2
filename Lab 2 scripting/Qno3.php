<?php

function convertTime($minutes)
{
    $seconds = $minutes * 60;
    echo $minutes . " minutes = " . $seconds . " seconds";
}

convertTime(5);

?>