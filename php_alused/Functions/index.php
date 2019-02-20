<?php


function paarsuseKontroll ($arv){
     if ($arv % 2 == 0) {
         echo $arv . ' on paaris! <br>';
     } else {
          echo $arv.' on paaritu!<br>';
         }
}

// Kutsume esile funktsiooni

for ($arv = 0; $arv <= 10; $arv++) {
    paarsuseKontroll($arv);
}
