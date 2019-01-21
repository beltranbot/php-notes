<?php

// movefile.php

if (!rename('testfile2.txt', 'testfile2.new')) {
    echo "could not rename file";
} else {
    echo "file successfully renamed to 'testfile2.new";
}

echo "\n";