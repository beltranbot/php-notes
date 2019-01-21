<?php

// string padding

$h = 'Rasmus';

printf("[%s]\n", $h); // Standard string output
printf("[%12s]\n", $h); // right justify with spaces to width
printf("[%-12s]\n", $h); // left justify with spaces
printf("[%012s]\n", $h); // zero padding
printf("[%'#012s]\n\n", $h); // use the custom padding character

$d = 'Rasmus lerdorf'; // the original creator of php
printf("[%12.8s]\n", $d); // right justify, cutoff of 8 characters
printf("[%-12.12s]\n", $d); // left justify, cutoff of 12 characters
printf("[%-'@12.10s]\n", $d); // left justify pad '@', cutoff 10 chars