<?php
if(isset($_POST['submit'])) {
    $number = $_POST['number'];
    $square = $number * $number; // Calculate the square
    echo "The square of $number is: $square";
}
?>
