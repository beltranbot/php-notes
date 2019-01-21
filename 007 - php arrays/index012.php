<?php

$arr = [
    [1, 2],
    [3, 4]
];

print_r($arr);
echo "is_array--------\n";
echo 'is_array($arr)' . is_array($arr) ? 'is array' : 'is not array';
echo "\n";

echo "count-----------\n";
echo 'count($arr): ' . count($arr);
echo "\n";
echo 'count($arr, 1): ' . count($arr, 1);
echo "\n";

$numbers_arr = [3, 5, 2, 4, 1];
$str =  "alphabet";
$str_array = str_split($str);


echo "sort-----------\n";
sort($numbers_arr); // $numbers is sorted
echo 'sort($numbers_arr, SORT_NUMERIC):' . "\n";
print_r($numbers_arr);
sort($str_array); // $str_array is now sorted
echo 'sort($str_array, SORT_STRING): '. "\n";
print_r($str_array);

echo "rsort-----------\n";
rsort($numbers_arr); // $numbers is sorted in reverse order
echo 'rsort($numbers_arr, SORT_NUMERIC):' . "\n";
print_r($numbers_arr);
rsort($str_array); // $str_array is now sorted in reverse order
echo 'rsort($str_array, SORT_STRING): '. "\n";
print_r($str_array);

$str_random = "random";
$random_arr = str_split($str_random);
echo "shuffle-----------\n";
shuffle($random_arr); // $numbers has been shuffled
echo 'shuffle($random_arr):' . "\n";
print_r($random_arr);

$explode_str = "this is a sentence with seven words";
$exploded_arr = explode(' ', $explode_str); // string is exploded
echo "explode-----------\n";
echo 'explode($exploded_str):' . "\n";
print_r($exploded_arr);