
<?php
$vrienden = [];
echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$amount = readLine("> ");
if (is_numeric($amount)) {
    for ($i = 0; $i < $amount; $i++) {
        echo "Wat is jou naam?" . PHP_EOL;
        $naam = readLine("> ");
        echo "Hoeveel dromen ga je opgeven?" . PHP_EOL;
        $aantal = readLine("> ");
        for ($x = 0; $x < $aantal; $x++) {
            echo "Wat is jou droom?" . PHP_EOL;
            $vrienden[$naam][$x] = readLine("> ");
        }
    }
    foreach ($vrienden as $innerArray) {
        $naam = array_search($innerArray, $vrienden);
        foreach($innerArray as $droom) {
            echo $naam . " heeft dit als droom: " . $droom . PHP_EOL;
        }
    }
} else {
    echo "Voer een nummer in!" . PHP_EOL;
    exit();
};
?>