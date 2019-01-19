<?php

// overriding a method and using the parent operator

$object = new Son;
$object->test();
$object->test2();

class Dad {

    function test() {
        echo "[Class Dad] i am you father \n";
    }
}

class Son extends Dad {
    function test() {
        echo "[Class Son] I am luke \n";
    }

    function test2() {
        parent::test();
        // self::test() // if you wish to ensure that your code calls a method from the current class, you can use the self leyword
    }
}