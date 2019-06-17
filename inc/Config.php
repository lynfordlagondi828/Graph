<?php
class Config{

    private $conn;

    function __construct()
    {
        
    }

    function connect(){
        $this->conn = new PDO("mysql:host=localhost;dbname=api_db","root","");
        return $this->conn;
    }
}