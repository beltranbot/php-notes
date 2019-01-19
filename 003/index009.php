<?php
$val = 5;
static $int1 = 0; // Allowed
static $int2 = (1 + 2 + 3 + 4) /2 ; // Allowed (will produce a Parse error)
static $int3 = sqrt(144); // Disallowed
static $int3 = $val; // Disallowed

echo $int1;
echo "\n";
echo $int2;
echo "\n";
// echo $int3;
echo "\n";