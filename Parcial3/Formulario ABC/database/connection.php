<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD','');
    define('DB_NAME','lopezso');

    try {
        $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    } catch (mysqli_sql_exception $e) 
    {
        echo "ERROR EN LA CONEXION CON LA BASE DE DATOS: ";
        echo $e->getMessage();
        exit();
    }
    



/*$hostname='localhost';
$database='lopezso';
$username='sa';
$password='1234Fernando';

$serverN = "FALS";
$connectionInfo = array( "Database"=>"lopezso", "UID"=>"sa", "PWD"=>"1234Fernando");
try 
{
    //$con = new PDO("sqlsrv:Server=$hostname;Database=$database",$username,$password);
    $con = sqlsrv_Connect($serverN, $connectionInfo);
    if ($con === false)
    {
        die("ERROR AL MOMENTO DE CONECTAR" . sqlsrv_Connect_error());
    }else
    {
        //echo 'Conectado a la base de datos';
    }
} 
catch (PDOException $e) 
{
    echo "ERROR EN LA CONEXION CON LA BASE DE DATOS: ";
    echo $e->getMessage();
    exit();
}
//$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
*/
?>