<?php

printf("There are %d items in your basket", 3);

echo "\n";

printf(
    "My name is %s. I'm %d years old, which is %X in hexadecimal",
    'Simon', 33, 33
);

echo "\n";

// precision setting

printf(
    "The result is : $%.2f",
    (123.42/12)
);

echo "\n";


// Pad to 15 spaces
printf("The result is $%15f\n", 123.42 / 12);
// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);

