<?php

// date and time functions

echo time(); // seconds since january 1st 1970
echo "\n";

echo time() + (7 * 24 * 60 * 60); // timestamp next week
echo "\n";

// create timestamp for a given date
// first second of the first minute of the first hour of the first day of the year 2000
echo mktime(0, 0, 0, 1, 1, 2000); // 946684800
echo "\n";

/*
the parameters to pass are, in odrder from left to right:
- the number of the hour (0 - 23)
- the number of the minute (0 - 59)
- the number of seconds (0 - 59)
- the number of the month (1 - 12)
- the number of the day (1 - 31)
- the year (1970 - 2038, or 1901 - 2038 with php5.1.0+ on 32-bit signed systems)
*/

/**/

echo date("l F jS, Y - g:i1", time());
echo "\n";


// checking for the validy of a date

$month = 9; // september (only has 30 days)
$day = 31; // 31st
$year = 2018;

if (checkdate($month, $day, $year)) {
    echo "date is valid";
} else {
    echo "date is invalid";
}

echo "\n";