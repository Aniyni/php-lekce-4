<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domácí úkol</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>

<?php
if (!empty($_POST ['jmeno']) && !empty($_POST ['vzkaz'])) {
    $jmeno = $_POST ['jmeno'];
    $vzkaz = $_POST['vzkaz'];
    $file = 'alt_prispevky.txt';
    $content = "<hr color=\"light blue\" align=\"left\"><strong>$jmeno </strong><br>";
    $content2 = "$vzkaz <br> \n";
    $oldContent = file_get_contents($file);
    file_put_contents($file, $content . $content2 .  $oldContent);

  //  fwrite ($handle, "<hr color=\"light blue\" align=\"left\"><strong>$jmeno </strong><br>", '1000');
   // fwrite ($handle, "$vzkaz <br> \n", '1000');
   // fclose($handle);
    echo 'Vzkaz úspěšně odeslán'.'<br>'.'<a href="alt_navstevni_kniha.php">Zadat další vzkaz</a></p>';
}

else echo 'Vzkaz se nepodařilo odeslat'.'<br>'.'<a href="alt_navstevni_kniha.php">Zadat vzkaz znovu</a></p>';

?>

</body>
</html>
