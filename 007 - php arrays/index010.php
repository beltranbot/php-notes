<?php

// creating a multidimensional associative array

$products = [
    'paper' => [
        "copier" => "Copier & Multipurpose",
        "inkjet" => "Inkjet Printer",
        "laser" => "Laser Printer",
        "photo" => "Photographic Paper",
    ],
    'pens' => [
        'ball' => "Ball Point",
        'hilite' => "Highliters",
        'marker' => "Markers",
    ],
    'misc' => [
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips",
    ],
];

foreach ($products as $section => $items) {
    foreach ($items as $key => $value) {
        echo "$section: $key $value\n";
    }
}