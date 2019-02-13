<?php
/**
 * Created by PhpStorm.
 * User: tauno.peepson
 * Date: 13.02.2019
 * Time: 13:51
 */

//Ülesanne 1 Tauno Peepson 13.02
$enimi = "Tauno";
$pnimi = "Peepson";
$vanus = 19;
$sugu = "mees";

$nimi = $enimi.' '.$pnimi;
echo "$nimi $vanus $sugu";
echo '<br>';



if ($sugu == 'mees')
    echo '<p style="color:blue;">';
else
    echo '<p style="color:red;">';
//var_dump($nimi); Muutjua sisu. (string(13) "Tauno Peepson")
?>




