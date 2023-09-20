<?php

$fibonacci = [0, 1];
$count = 2;

while ($count < 10) {
    $next = $fibonacci[$count - 1] + $fibonacci[$count - 2];
    
    if ($next > 100) {
        break;
    }

    $fibonacci[] = $next;
    $count++;
}

foreach ($fibonacci as $number) {
    echo $number . " ";
}
