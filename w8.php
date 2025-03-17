<?php
function genRanPass($length) {
    $characters = '0123qwerty';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
}
$password = genRanPass(18);
print $password;
?>