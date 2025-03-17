<?php
function Palinddrom($string){
    $palindString = strtolower(str_replace(" ","", $string));
    return $palindString === strrev($palindString);
}
print Palinddrom("Squad") ? "Палиндром" : "Не палиндром";
print Palinddrom("Anna") ?"Палиндром":"Не палиндром";