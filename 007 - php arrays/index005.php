<?php

// adding items to an array using the array keyword

$p1 = array("Copier", "Inkjet", "Laser", "Photo");

echo "p1 element: " . $p1[2] . "\n";

$p2 = array(
    "copier" => "Copier & Multipurpose",
    "inkjet" => "Inkjet Printer",
    "laser" => "Laser Printer",
    "photo" => "Photographic Paper",
);

// $p2 = [
//     "copier" => "Copier & Multipurpose",
//     "inkjet" => "Inkjet Printer",
//     "laser" => "Laser Printer",
//     "photo" => "Photographic Paper",
// ];

echo "p2 element: " . $p2['inkjet'] . "\n";