<!-- implementation of calculator -->


<?php

class Calculator {
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        if ($num2 == 0) {
            return "Cannot divide by zero";
        } else {
            return $num1 / $num2;
        }
    }
}

// Example usage:
$calculator = new Calculator();
echo "Addition: " . $calculator->add(5, 3) . "<br>";
echo "Subtraction: " . $calculator->subtract(5, 3) . "<br>";
echo "Multiplication: " . $calculator->multiply(5, 3) . "<br>";
echo "Division: " . $calculator->divide(10, 2) . "<br>";
echo "Division by zero: " . $calculator->divide(10,0)."<br>";

?>