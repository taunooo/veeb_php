<?php
//mitmemõõtmelised massiivid
$riigid = array(
    'Eesti'=>array(
        'pealinn'=>'Tallinn',
        'rahvaarv'=>1340000),

    'Austria'=>array(
        'pealinn'=>'Viin',
        'rahvaarv'=>8356700),

    'Belgia'=>array(
        'pealinn'=>'Brüssel',
        'rahvaarv'=>10827500)
);

//echo $riigid['Eesti']['pealinn'];


?>

<!DOCTYPE html>
<html lang="et">
<table  border="1">
    <tbody>
    <tr>
        <td>Riik</td>
        <td>Pealinn</td>
        <td>Rahvaarv</td>
    </tr>
    <tr>
        <td>Eesti</td>
        <td>Tallinn</td>
        <td>1340000</td>
    </tr>
    <tr>
        <td>Austria</td>
        <td>Viin</td>
        <td>8356700</td>
    </tr>
    <tr>
        <td>Belgia</td>
        <td>Br&uuml;ssel</td>
        <td>10827500</td>
    </tr>
    </tbody>
</table>
</html>