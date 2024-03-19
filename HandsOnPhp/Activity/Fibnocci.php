<?php
    $f1 = 0;
    $f2 = 1;
    $n = 30;
    echo $f1;
    echo "\n";
    echo $f2;
    echo"\n";
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo $f3 ."\n";
}
?>