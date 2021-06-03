<?php
$hostname='localhost';
$database='lopezso';
$username='sa';
$password='1234Fernando';

try 
{
    $con = new PDO("sqlsrv:Server=$hostname;Database=$database",$username,$password);
} catch (PDOException $e) 
{
    echo "Error de conexion a la base de datos ";
    echo $e->getMessage();
    exit();
}
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>