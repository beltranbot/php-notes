<?php

$fp = fopen("text.txt", 'wb');

$output = "";
for ($j = 0; $j < 100; ++$j) {
    $output .= "data" . $j . "\n";
    // if (!$written) {
    //     break;
    // }
}

$written = fwrite($fp, $output);

fclose($fp);
