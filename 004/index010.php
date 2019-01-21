<?php
// implicit and explicit casting

$a = 56;
$b = 12;
$c = $a / $b; // implicit casting

$d = (int) $c; // explicit casting

echo $c;
echo "\n";
echo $d;
echo "\n";
