<?php
/**
 * Created by PhpStorm.
 * User: ECR
 * Date: 26/04/2018
 * Time: 04:56 PM
 */

$link = require_once 'conecction.php';
try {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $dni = $_REQUEST['dni'];

    if ($id != 0) {
        $sql = "UPDATE entity SET name='" . $name . "', dni='" . $dni . "' WHERE id='" . $id . "'";
    } else {
        $sql = "INSERT INTO entity(name,dni) VALUES('" . $name . "','" . $dni . "')";
    }
    mysql_query($sql) or die('Error al insertar o actualizar');

    echo json_encode([
        'status' => true
    ]);

} catch (Exception $e) {
    echo json_encode([
        'status' => false,
        'message' => $e->getMessage()
    ]);
}