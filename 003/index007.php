<?php

$temp = "The date is ";
echo longdate($temp, time());

function longdate($temp, $timestamp) {
    return $temp .date("l F jS Y", $timestamp);
}

echo "\n";