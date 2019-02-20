<?php

$porsad = array
(
    $pepaPig = array(
        'Peppa',
        'naine',
        4,
        1.04
    ),
    $georgePig = array(
        'George',
        'mees',
        2,
        0.5
    ),

);



/*    var_dump($pepaPig);
    echo '<pre>';
    print_r($pepaPig);
    echo '</pre>';*/

echo $porsad[0].'<br>';
echo $porsad[1].'<br>';
echo $porsad[2].'<br>';
echo $porsad[3].'<br>';

echo '<hr>';

for($i = 0;$i < count($pepaPig); $i++)
    echo $pepaPig[$i].'<br>';

echo '<hr>';

foreach ($porsad as $porsas) {
    foreach ($porsas as $element)
        echo $element.'<br>';}



