<?php
class DB {
    public mysqli $mysql;

    public function __construct() {
        $this->mysql = new mysqli("db", "shoesshop", "98tyO!uqwFtklE]a", "shoesshop");
    }
}