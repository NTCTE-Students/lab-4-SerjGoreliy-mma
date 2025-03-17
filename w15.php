<?php
function vtoroeChislo($array) {
    rsort($array);
    return $array[1];
}
$numbers = [1, 2, 3, 4, 5, 6];
$secondLargest = vtoroeChislo($numbers);
print "Второе по величине число: $secondLargest";
