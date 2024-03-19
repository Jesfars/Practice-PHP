<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userNumber = $_POST["number"];
        echo "You entered: " . $userNumber;
    }
    ?>