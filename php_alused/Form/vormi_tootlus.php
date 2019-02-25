<?php
$nimi = $_GET['nimi'];
$parool = $_GET['parool'];

foreach ($_GET as $nimetus) {
    if (strlen($nimetus) == 0){
        header('Location: index.html');
    }
}

//if (strlen($nimi) == 0 or strlen($parool) == 0) {
//    header('Location: index.html');
//}

echo 'Tere,sinu nimi on '.$nimi;
echo '<br>';

echo 'Sinu parool on '.$parool;
echo '<br>';
echo '<br>';

echo "<form action=\"http://peepsontauno.ikt.khk.ee/veeb_php/php_alused/Form/index.html\">";
echo '<input type="submit" name="Tagasi" value="Tagasi"><br>';