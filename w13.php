<?php
function sredne($numbers) {
    if (empty($numbers)) {
        return null;
    }
    $sum = array_sum($numbers);
    $average = $sum / count($numbers);
    return $average;
}
$array = [1, 2, 3, 4, 5];
$avg = sredne($array);
print "Среднее арифметическое: $avg";
