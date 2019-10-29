<?php
function maximum($a, $b) {
   if ($a >= $b){
        return $a;
    }
    else return $b;
}

$výsledek = maximum(304,560);
echo '<br>';
echo  $výsledek;
maximum(7.2,7.1);
echo '<br>';
maximum(23,23);
echo '<br>';
maximum(253,'x');

