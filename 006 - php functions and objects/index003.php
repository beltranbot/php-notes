<?php

// cloning an object

$object1 = new User();

$object1->name = "alice";
$object2 = $object1;
$object2->name = "amy";

echo "object 1 name = $object1->name \n";
echo "object 2 name = $object2->name \n";


class User {

    public $name;
}

// this doesn't work, 