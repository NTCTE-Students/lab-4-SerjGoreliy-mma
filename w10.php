<?php
function remDubl($arr) {
    return array_unique($arr);
}
print_r(implode(" ", remDubl([1, 1, 2, 3, 4, 2, 5, 6, 7, 8, 9, 10])));