<?php
/**
 * Created by PhpStorm.
 * User: tauno.peepson
 * Date: 20.02.2019
 * Time: 15:02
 */
function kasAlgarv($arv){
    $jagaja = 2;
    if($arv == 0 or $arv == 10) {
        $kontroll = true;
    } else {
        while ($arv % $jagaja != 0) $jagaja++;
        if ($arv == $jagaja) {
            $kontroll = true;
        } else {
            $kontroll = false;
        }
    }
    return $kontroll;
}

echo kasAlgarv(7);
echo $kontroll;