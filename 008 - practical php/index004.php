<?php
// creating a simple text file

$fh = fopen('testfile.txt', 'w') or die('Failed to create file');

$text = <<<_END
Line 1
Line 2
Line 3
_END;

fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "file 'testfile.txt' written succesffully";
echo "\n";