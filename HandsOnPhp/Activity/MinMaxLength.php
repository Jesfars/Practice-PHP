<?php
    $my_array = array("abcd","abc","de","hjjj","g","wer");
    $new_array = array_map('strlen', $my_array);

    echo "The shortest array length is " . min($new_array) . "<br>"; // Inserting a line break using the <br> tag
    echo "The longest array length is " . max($new_array) . ".";
    ?>