<?php

// defining a class with a static property

$temp = new Test();

echo "Test A: " . Test::$static_property. "\n";
echo "Test B: " . $temp->get_sp() . "\n";
echo "Test C: " . $temp->static_property. " \n"; // this generates an error because $temp doesn't have access to $statis_property

class Test {

    static $static_property = "I'm static";


    function get_sp() {
        return self::$static_property;
    }
}