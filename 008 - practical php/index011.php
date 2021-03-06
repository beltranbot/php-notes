<?php

// updating a file with file locking

$fh = fopen("testfile.txt", "r+") or die("failed to open file");

$text = fgets($fh);

if (flock($fh, LOCK_EX)) {
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "$text") or die("Could not write to file");
    flock($fh, LOCK_UN);
}

fclose($fh);
echo "file 'testfile.txt'  succesfully updated";

echo "\n";