<?php

// inheriting and extending a class

$object = new Subscriber;
$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "fred@bloggs.com";
$object->display();

class User {

    public $name, $password;

    function save_user() {
        echo "save user code goes here \n";
    }
}

class Subscriber extends User {
    public $phone, $email;

    function display() {
        echo "name: " . $this->name . "\n";
        echo "pass: " . $this->password . "\n";
        echo "phone: " . $this->phone . "\n";
        echo "Email: " . $this->email . "\n";
    }
}