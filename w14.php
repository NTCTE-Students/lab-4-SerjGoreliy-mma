<?php
function forDat($date) {

    $datetime = new DateTime($date);
    
    return $datetime->format('d/m/Y');
}
$input_date = "2025-03-17";
$output_date = forDat($input_date);
print $output_date; 
