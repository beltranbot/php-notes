<?php

// returning global variables

$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3;
echo "\n";
fix_names();
echo $a1 . " " . $a2 . " " . $a3;

function fix_names() {
    global $a1;
    $a1 = ucfirst(strtolower($a1));
    global $a2;
    $a2 = ucfirst(strtolower($a2));
    global $a3;
    $a3 = ucfirst(strtolower($a3));
}

echo "\n";