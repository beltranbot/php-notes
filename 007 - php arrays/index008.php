<?php

// walking through an associative array using each and list

$paper = array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper"
);

while (list($item, $description) = each($paper)) {
    echo "$item: $description \n";
}

// $each = each($paper);

// print_r($each);

// echo "\n";