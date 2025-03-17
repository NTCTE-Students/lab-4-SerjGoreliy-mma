<?php
function getStrLen($string) {
    $length = 0;
    for ($i = 0; isset($string[$i]); $i++) {
        $length++;
    }
    return $length;
}
$string = "Hello, world!";
echo getStrLen($string);
?>