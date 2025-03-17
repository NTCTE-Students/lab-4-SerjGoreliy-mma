<?php
function isEven($number) {
    if ($number % 2== 0) {
        return "{$number} - chetnoe chislo";
    } else {
        return "{$number} - nechetnoe chislo";
    }
}
$result = isEven(4);
print($result);