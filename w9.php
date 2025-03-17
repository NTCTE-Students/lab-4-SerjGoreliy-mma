<?php
function celToFahr($celsius) {
    return $celsius * 1.8 + 32;
}
$celsius = 25;
$fahrenheit = celToFahr($celsius);
echo "$celsius°C = $fahrenheit°F";
?>