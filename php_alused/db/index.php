<?php
require_once ('db_conf.php');

function dbConnect ($h, $u, $p, $db) {
    $connect = mysqli_connect($h, $u, $p, $db);
    if ($connect == false) {
        echo 'Probleem andmebaasi ühendamisega!';
        exit;
    }
    return $connect;
}

function query($connection, $sql) {
    $result = mysqli_query($connection, $sql);
    if($result == false) {
        echo 'Probleem päringuga: <b>'.$sql.'</b><br>';
        echo mysqli_error().'<br>';
        echo mysqli_errno().'<br>';
    }
    return $result;
}

function dataQuery($conn,$sql) {
    $data = array();
    $result = query($conn, $sql);
    if($result != false) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $data[] = $row;
        }




        }


}

$connectIKT = dbConnect(HOST,USER, PASS, DB);
$sql = 'SELECT NOW()';
$sqlResult = query($connectIKT,$sql);
echo '<pre>';
print_r($sqlResult);
