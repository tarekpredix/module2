<?php

function printFibonacci($count) {
    $fibonacci = [0, 1];
    
    if ($count >= 1) {
        echo $fibonacci[0] . " ";
    }
    if ($count >= 2) {
        echo $fibonacci[1] . " ";
    }

    for ($i = 2; $i < $count; $i++) {
        $next = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        echo $next . " ";
        $fibonacci[] = $next;
    }
}

printFibonacci(15);
