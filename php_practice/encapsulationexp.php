<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class BankAccount {
    private $balance = 0;

    // Method to deposit amount
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $amount. New balance: $this->balance <br>";
        }
    }

    // Method to withdraw amount
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew $amount. New balance: $this->balance <br>";
        } else {
            echo "Insufficient balance! <br>";
        }
    }

    // Method to check balance
    public function getBalance() {
        return $this->balance;
    }
}

// Creating an object of the BankAccount class
$account = new BankAccount();
$account->deposit(1000);
$account->withdraw(200);
echo "Final balance: " . $account->getBalance();
?>
</body>
</html>