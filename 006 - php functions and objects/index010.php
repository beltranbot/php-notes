<?php

// definifing a property implicitly

$object1 = new User();
$object1->name = "alice";

echo $object1->name . "\n";


class User {}