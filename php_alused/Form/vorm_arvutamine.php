<?php
$nimi = $_GET['nimi'];
$parool = $_GET['parool'];

foreach ($_GET AS $nimetus => $vaartus){
    echo $nimetus.' => '.$vaartus.'<br>';
}
$silindriRuumala = (3.14 * $raadius * $raadius * $korgus);
echo 'Silindri ruumala on '.$silRuumala.'<br>';

$koonuseRuumala = (3.14 * $raadius * $raadius * $korgus * 0.3);
echo 'Koonuse ruumala on '.$kooRuumala.'<br>';

$keraRuumala = (1.3 * 3.14 * $raadius * $raadius * $raadius);
echo 'Kera ruumala on '.$keraRuumala.'<br>';