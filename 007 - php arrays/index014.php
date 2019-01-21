<?php

$j = 23;
$temp = "hello";
$address = "1 old street";
$age = 61;

print_r(compact(explode(' ', "j temp address age")));