<?php
if ($_POST) {
    $num = $_POST["number"];

    for ($i = 1; $i <= 10; $i++) {
        echo "<p >$num X $i = " . $num * $i . "</p>";
    }
}
?>