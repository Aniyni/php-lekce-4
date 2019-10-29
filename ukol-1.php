<?php

echo 'Historie přístupů:<br>';
$handle = @fopen('pristupy.txt', 'a');

if ($handle === false) {
    echo "Soubor se nepodařilo otevřít!";
} else {
    fwrite($handle, date('Y-m-d H:i:s')."<br>\n");
    fclose($handle);
}
$handle = @fopen('pristupy.txt', 'r');

if ($handle === false) {
    echo "Soubor se nepodařilo otevřít!";
} else {
    $pristup = fread($handle, 1000);
    echo  $pristup;
    fclose($handle);
}