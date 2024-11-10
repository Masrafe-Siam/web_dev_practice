<?php

class DatabaseConnection {
    public function __construct() {
        echo "Database connection established.";
    }

    public function __destruct() {
        echo "Database connection closed.";
    }
}

$db = new DatabaseConnection();

