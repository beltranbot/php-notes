<?php

// copying a file

copy('testfile.txt', 'testfile2.txt') or die("could not copy file");

echo "file successfully copied to 'testfile2'";
echo "\n";
