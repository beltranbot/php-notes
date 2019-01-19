<?php

// using the compact function

$fname = "Doctor";
$sname = "who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";

$contact = compact(
    'fname',
    'sname',
    'planet',
    'system',
    'constellation'
);

print_r($contact);