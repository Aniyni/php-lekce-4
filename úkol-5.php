<?php

function minimum ($a, $b) {
    if (!is_numeric($a) || !is_numeric($b) ){
            return false;
        }
        elseif ($a <= $b){
        return $a;
    }
    return $b;
}

//echo minimum(56,12.3);
$vysledek = minimum(56,'xy');
if ($vysledek == false) {
    echo 'Chyba';
}