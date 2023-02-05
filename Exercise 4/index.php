<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

function word_digit($word)
{
    $item = explode(";",$word);

    $resultat = '';

    foreach ($item as $value) {
        switch (trim($value)){

            case 'zero':
                $resultat .= '0';
                break;
            case 'un':
                $resultat .= '1';
                break;
            case 'deux':
                $resultat .= '2';
                break;    
            case 'trois':
                $resultat .= '3';
                break;    
            case 'quatre':
                $resultat .= '4';
                break;    
            case 'cinq':
                $resultat .= '5';
                break;    
            case 'six':
                $resultat .= '6';
                break;    
            case 'sept':
                $resultat .= '7';
                break;    
            case 'huit':
                $resultat .= '8';
                break;    
            case 'neuf':
                $resultat .= '9';
                break;    
        }
            
    }
    return $word . " = ".$resultat;
}


echo( word_digit("neuf;cinq;trois;un;six;huit"));


?>
</body>
</html>