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
<div class="container">

    <form method="post" action="vlozit.php">
        <div class="form-group">
            <label for="exampleFormControlInput1">Jméno</label>
            <input type="text" name="jmeno" class="form-control" id="exampleFormControlInput1" placeholder="jméno">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Vzkaz</label>
            <textarea  class="form-control" id="exampleFormControlTextarea1" rows="3" name="vzkaz"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Odeslat</button>
    </form>
<br>


    <?php
/*
    if (file_exists('prispevky.txt')){
        $handle = fopen('prispevky.txt','r');
        echo fread($handle,1000);
    }
    else echo "Žádné příspěvky";
*/

    if (file_exists('prispevky.txt')){
        $handle = fopen('prispevky.txt','r');
        $prispevky = fread($handle,4000);
        $oddelovac = '<hr>';
        $cteni = seradPrispevky($prispevky, $oddelovac);

        fclose($handle);
        echo $cteni;
    }
    else echo "Žádné příspěvky";


    function seradPrispevky($prispevky, $oddelovac){

            $rozdeleni = explode("$oddelovac", $prispevky);
            $otoceni = array_reverse($rozdeleni);
            $spojene_prispevky = implode( $otoceni, "<hr>");

            return $spojene_prispevky;
    }
    ?>



</div>
</body>
</html>
