<?php

function factorial($number) {
    if ($number < 2) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

$number = 5;
$result = factorial($number);

echo "The factorial of {$number} is {$result}.\n";
