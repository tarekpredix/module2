<?php

function printEvenNumbersFor() {
    for ($i = 2; $i <= 20; $i += 2) {
        echo $i . " ";
    }
}

echo "Using for loop: ";
printEvenNumbersFor();
echo "<br>";


function printEvenNumbersWhile() {
    $i = 2;
    while ($i <= 20) {
        echo $i . " ";
        $i += 2;
    }
}

echo "Using while loop: ";
printEvenNumbersWhile();
echo "<br>";


function printEvenNumbersDoWhile() {
    $i = 2;
    do {
        echo $i . " ";
        $i += 2;
    } while ($i <= 20);
}

echo "Using do-while loop: ";
printEvenNumbersDoWhile();
?>
