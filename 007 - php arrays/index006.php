<?php

// walking through a numeric array using foreach..as

$paper = [
    "Copier", "Inkjet", "Laser", "Photo"
];

foreach ($paper as $index => $item) {
    echo "$index: $item \n";
}