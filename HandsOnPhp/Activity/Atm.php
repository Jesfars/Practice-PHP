<!-- implementation of atm -->

<?php

class ATM {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function checkBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return "Deposit of $amount successful. New balance: " . $this->balance;
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return "Withdrawal of $amount successful. New balance: " . $this->balance;
        } else {
            return "Insufficient funds";
        }
    }
}

// Example usage:
$atm = new ATM(1000);
echo "Initial Balance: " . $atm->checkBalance() . "<br>";
echo $atm->deposit(500) . "<br>";
echo $atm->withdraw(300) . "<br>";
echo "Final Balance: " . $atm->checkBalance()."<br>";

?>