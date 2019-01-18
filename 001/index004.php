<?php

function longdate($timestamp) {
    return date("l F jS Y", $timestamp);
}

$time = time();
$longdate = longdate($time);

echo $longdate;
echo "\n";

$longdate2 = longdate($time - 17 * 24 * 60 * 60);
echo $longdate2;
echo "\n";