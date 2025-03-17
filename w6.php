<?php
function sumDig($number) {
    $digits = str_split((string)$number);
    
    return array_sum($digits);
}
print sumDig(12348);
