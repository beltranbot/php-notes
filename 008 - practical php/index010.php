<?php

// updating

$fh = fopen("testfile.txt", "r+") or die("failed to open file");

$text = fgets($fh);

fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die('could ot write to file');

fclose($fh);

echo "file 'testfile.txt' succesfully updated";
echo "\n";