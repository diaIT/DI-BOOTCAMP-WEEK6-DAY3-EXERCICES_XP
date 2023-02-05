<?php

function testNombre($nbre){
    $result = $nbre > 30 ? 'Plus grand que 30' : ($nbre > 20 ? 'Plus grand que 20' : ($nbre > 10 ? 'Plus grand que 10' : 'Inferieur à 10'));

    return $result;
}

echo testNombre(21);