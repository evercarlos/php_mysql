<?php
/**
 * Created by PhpStorm.
 * User: ECR
 * Date: 26/04/2018
 * Time: 01:42 PM
 */

$link = require_once 'conecction.php';

try {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM entity WHERE id='" . $id . "' ";
    $result = mysql_query($sql) or die('Error al eliminar');

    echo json_encode([
        'status' => true
    ]);
} catch (Exception $e) {
    echo json_encoce([
        'status' => false
    ]);
}