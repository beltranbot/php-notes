<?php

// walking though an associative array using foreach..as

$paper = [
    "copier" => "Copier & Multipurpose",
    "inkjet" => "Inkjet Printer",
    "laser" => "Laser Printer",
    "photo" => "Photographic Paper",
];

foreach ($paper as $key => $value) {
    echo "$key: $value \n";
}