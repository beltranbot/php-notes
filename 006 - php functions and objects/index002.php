<?php



class User {
    public $name, $password;

    function save_user() {
        echo "Save User code goes here\n";
    }
}

$object = new User;
print_r($object);
echo "\n";

$object->name = "Joe";
$object->password = "mypass";
print_r($object);
echo "\n";

$object->save_user();
