<?php
    header('Content-Type: application/json');

    require_once 'inc/Functions.php';
    $database = new Functions();

    $result = $database->get_all_salary();

    $data = array();

    foreach($result as $row){

        $data[] = $row;
    }

    echo json_encode($data);
?>