<?php
$handle = @fopen('soubor.txt', 'a');

if ($handle === false) {
    echo "Soubor se nepodařilo otevřít!";
} else {
 fwrite($handle, "Ahoj Andul ;) <br>\n" );
    fclose($handle);
}

$handle = @fopen('soubor.txt', 'r');

if ($handle === false) {
    echo "Soubor se nepodařilo otevřít!";
} else {
    while (($line = fgetc($handle, 1000)) != false);
    echo $line;
    echo "<br>";
    fclose($handle);
}