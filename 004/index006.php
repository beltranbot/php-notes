<?php
// identity operator
$a = "1000";
$b = "+1000";

if ($a != $b) echo "1" . "\n"; // doesn't print
if ($a !== $b) echo "2" . "\n"; // prints
