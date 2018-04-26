<?php
/**
 * Created by PhpStorm.
 * User: ECR
 * Date: 26/04/2018
 * Time: 01:23 PM
 */

$link = require_once 'conecction.php';

try {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM entity WHERE id= '" . $id . "' ";
    $result = mysql_query($sql) or die('Error de find');

    $row = mysql_fetch_row($result) or die('error');
    $dat = [
        'id' => $row[0],
        'name' => $row[1],
        'dni' => $row[2],
    ];

    echo json_encode([
        'status' => true,
        'data' => $dat
    ]);

} catch (Exception $e) {
    echo json_encode([
        'status' => false
    ]);
}

