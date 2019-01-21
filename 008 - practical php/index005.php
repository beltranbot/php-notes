<?php

// reading a file with fgets

$fh = fopen("testfile.txt", 'r') or die("file does not exists or you lack permission to open it");

$line = fgets($fh);

fclose($fh);

echo $line;