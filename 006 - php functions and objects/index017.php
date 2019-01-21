<?php

// calling the parent constructor

$object = new Tiger();

echo "Tigers have...\n";
echo "Fur:" . $object->fur . "\n";
echo "Stripes:" . $object->stripes . "\n";

class WildCat {
    public $fur; // wildcats have fur

    function __construct() {
        $this->fur = "TRUE";
    }   
}


class Tiger extends Wildcat {

    public $stripes; // tigers have stripes

    function __construct() {
        parent::__construct(); // call parent constructor first

        $this->stripes = "TRUE";
    }
}