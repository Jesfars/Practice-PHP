<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $num = $_POST['number'];

    $num_word = array();
    $num_word[0] = 'zero';
    $num_word[1] = 'one';
    $num_word[2] = 'two';
    $num_word[3] = 'three';
    $num_word[4] = 'four';
    $num_word[5] = 'five';
    $num_word[6] = 'six';
    $num_word[7] = 'seven';
    $num_word[8] = 'eight';
    $num_word[9] = 'nine';

    $words = '';
    foreach(str_split($num) as $digit) {
        $words .= $num_word[$digit] . ' ';
    }


    echo " The word format of " . $num . "= " . trim($words);
}
?>
