<?php
    if(isset($_POST['submit'])) {
        $number = $_POST['number'];
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial = $factorial * $i;
        }
        echo "The factorial of $number is: $factorial";
    }
    ?>