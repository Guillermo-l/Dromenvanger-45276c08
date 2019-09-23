<?php

$vrienden = [];
echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$aantal = readline("> ");

if(is_numeric($aantal)){
    for ($i = 0; $i < $aantal; $i++){
        echo"Wat is jouw naam?" . PHP_EOL;
        $naam = readline("> ");

        echo "Hoeveel dromen ga je opgeven?" . PHP_EOL;
        $aantaldromen = readline("> ");

        for($j = 0; $j < $aantaldromen; $j++){
            echo "Wat is jouw droom?" . PHP_EOL;
            $vrienden[$naam][$j] = readline("> ");
        }
    }    
    foreach($vrienden as $arrayInArray){
        $naam = array_search ($arrayInArray, $vrienden);
        foreach($arrayInArray as $droom){
         echo $naam . " heeft dit als droom: " . $droom . PHP_EOL;
        }
    }
} else {
    echo "'$aantal' is geen getal voer een getal in!" . PHP_EOL;
    exit();
}

?>