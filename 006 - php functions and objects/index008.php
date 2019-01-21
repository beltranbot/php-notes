<?php

// the $this keyword

$user = new User();

$user->password = "secret";

echo $user->get_password() . "\n";


class User {
    public $name, $password;

    function get_password() {
        return $this->password;
    }
}