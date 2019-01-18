<?php

// static variables

function test() {
    static $count = 0;
    echo $count;
    $count++;
}

test();
echo "\n";
test();
echo "\n";
test();
echo "\n";