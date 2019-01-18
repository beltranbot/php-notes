<?php
// variables scopes

$temp = "The date is ";

echo longdate(time());

function longdate($timestamp) {
    $date = date('l F jS Y', $timestamp);

    return $temp . $date;
}

echo "\n";

// this code does not compile since the $temp variable within longdate is never defined