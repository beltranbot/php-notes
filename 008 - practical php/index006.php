<?php

// reading a file with fread

$fh = fopen('testfile.txt', 'r') or die("file does not exist or you lack permission to open it");

$text = fread($fh, 3); // request only 3 characters from the file
fclose($fh);
echo $text . "\n";