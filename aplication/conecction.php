<?php
/**
 * Created by PhpStorm.
 * User: ECR
 * Date: 26/04/2018
 * Time: 12:14 PM
 */
$link= mysql_connect('localhost','root','') or die('Error de conexion');

 mysql_select_db('dbphpmysql') or die('Error al seleccionar la bd');

 return $link;

