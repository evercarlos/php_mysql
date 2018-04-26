<?php
/**
 * Created by PhpStorm.
 * User: ECR
 * Date: 26/04/2018
 * Time: 12:21 PM
 */

$link = require_once "conecction.php";

try {
    $sql = "SELECT * FROM entity";
    $result = mysql_query($sql) or die("Error de seleccion");
    while ($row = mysql_fetch_array($result)) {
        $dat[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'dni' => $row['dni']
        ];
    }
    echo json_encode([
        'status' => true,
        'data' => $dat
    ]);
} catch (Exception $e) {
    echo "error de conextion";
}