<?php

// deleting a file

if (!unlink('testfile2.new')) {
    echo "chould not delete file";
} else {
    echo "file 'testfile2.new' succesffully deleted";
}

echo "\n";