<?php
function prost($number) {
    if ($number <= 1) {
        return false;
    }
    if ($number == 2 || $number == 3) {
        return true;
    }
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}
$num = 29;
if (prost($num)) {
    print "$num - простое число.";
} else {
    print "$num - составное число.";
}
