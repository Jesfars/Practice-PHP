<?php
    $num1 = 10;
    $num2 = 20;

    echo "Initial Values:<br>";
    echo "num1 = $num1, num2 = $num2<br>";

   
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    echo "Swapped Values:<br>";
    echo "num1 = $num1, num2 = $num2<br>";
    ?>
