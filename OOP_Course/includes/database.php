<?php 

class Database 
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    private $dbHandler;
    private $error;

    private function connect() {
        $conn = '';
    }
}