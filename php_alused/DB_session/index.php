<?php

session_start();

require_once 'db/db_conf.php';
require_once 'db/db_fnc.php';
require_once 'Lib/fnc.php';

if(!isset(($_SESSION)['user'])){
    echo htmlContent('HTMLs/vorm.html');
    }   else  {
    echo htmlContent('HTMLs/button.html');

}




//$connectIKT = dbConnect(HOST, USER, PASS, DB);
//$sql = 'SELECT * FROM user';
//$sqlResult = dataQuery($connectIKT, $sql);
//echo '<pre>';
//print_r($sqlResult);
