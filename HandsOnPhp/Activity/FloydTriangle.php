<?php


$r = 10;
$n = 1;

echo "-----This is Floyd's triangle number pattern-----\n\n";
for ($i = 1; $i <= $r; $i++) {
    echo "\t";
    for ($j = 1; $j <= $i; ++$j) {
        echo $n . " ";
        ++$n;
    }
    echo"\n";
}

?>