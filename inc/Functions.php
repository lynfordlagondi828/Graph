<?php
class Functions{

    private $conn;

    function __construct()
    {
        require_once 'inc/Config.php';
        $database = new Config();

        $this->conn = $database->connect();
    }

    public function get_all_salary(){

        $sql = "SELECT * FROM emp";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}