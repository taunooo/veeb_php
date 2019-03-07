<?php
// formi sisu
function vorm(){
    return '
    <form method="get" action="'.$_SERVER['PHP_SELF'].'">
                <h3>Sorteeri</h3>

                    <div>
                        <label>Kõrge hind ennem</label>
                    </div>

                    </div>

                <div>
                    <button type="submit" name="korgemHind" onclick=
                    "usort($raamatud.txt, \'vordleHinda\');
                    tabel(filtreeriHinnaJargi($raamatud.txt, 0, 100));">
                    Kõrge enne</button>
                </div>
            </form>
    ';
}

$raamatud = array(
    array(
        'nimi' => 'Õpilase kosmose entsüklopeedia',
        'autor' => 'Varrak',
        'keel' => 'eesti',
        'lk' => 257,
        'hind' => 16.99
    ),
    array(
        'nimi' => 'Hirmus Henry ja jalgpallihull',
        'autor' => 'Francesca Simon',
        'keel' => 'eesti',
        'lk' => 120,
        'hind' => 5.99
    ),
    array(
        'nimi' => 'Aarded',
        'autor' => 'Marje Mandsalu',
        'keel' => 'eesti',
        'lk' => 64,
        'hind' => 12.99
    )
);
function tabeliPais($andmed){
    echo '<thead>';
    echo '<tr>';
    foreach ($andmed as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
}

function tabeliRida($andmed){
    echo '<tr>';
    foreach ($andmed as $elemendiNimetus => $elemendiVaartus){
        echo '<td>'.$elemendiVaartus.'</td>';
    }
    echo '</tr>';
}

function tabel($andmed){
    echo '<table border="1">';
    tabeliPais(array_keys($andmed[0]));
    echo '<tbody>';
    foreach ($andmed as $element){
        tabeliRida($element);
    }
    echo '</tbody>';
    echo '</table>';
}

function vordleHinda($raamat1, $raamat2){
    if($raamat1['hind'] == $raamat2['hind']){
        return 0;
    } else if($raamat1['hind'] > $raamat2['hind']){
        return -1;
    } else {
        return 1;
    }
}

function filtreeriHinnaJargi($andmed, $algHind, $loppHind){
    $filreerimiseTulemus = array();
    foreach ($andmed as $element){
        if($element['hind'] >= $algHind and $element['hind'] <= $loppHind){
            $filreerimiseTulemus[] = $element;
        }
    }
    return $filreerimiseTulemus;

}


//usort($raamatud.txt, 'vordleHinda');
//tabel(filtreeriHinnaJargi($raamatud.txt, 0, 100));

echo vorm();

