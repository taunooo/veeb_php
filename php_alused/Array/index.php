<?php
    $pepaPig = array(
        'Peppa',
        'naine',
        4,
        1.04
    );

/*    var_dump($pepaPig);
    echo '<pre>';
    print_r($pepaPig);
    echo '</pre>';*/

echo $pepaPig[0].'<br>';
echo $pepaPig[1].'<br>';
echo $pepaPig[2].'<br>';
echo $pepaPig[3].'<br>';

echo '<hr>';

for($i = 0;$i < count($pepaPig); $i++)
    echo $pepaPig[$i].'<br>';


