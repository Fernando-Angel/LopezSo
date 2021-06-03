<?php

include "connect.php";

try 
{
    $consultaSql = "SELECT nombre,apellidopat,apellidomat,usuario,contrasena FROM usuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    //$result = $consulta->fetch(PDO::FETCH_ASSOC);
    
    $dsn = "sqlsrv:Server=localhost;Database=lopezso";
    $conn = new PDO($dsn, "sa", "1234Fernando");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($conn->query($consultaSql) as $result)
    {
        print"<h2>PDO::FETCH_ASSOC</h2>";
        //print "<br>";
        //print_r($result);
        var_dump($result);
        print "<br>";
        printf("<b>Nombre       = </b> %s <br>",$result['nombre']);
        printf("<b>ApePaterno   = </b> %s <br>",$result['apellidopat']);
        printf("<b>ApeMaterno   = </b> %s <br>",$result['apellidomat']);
        printf("<b>Usuario      = </b> %s <br>",$result['usuario']);
        printf("<b>Contrasena   = </b> %s <br>",$result['contrasena']);        
        print "<br><br><br>";
    }
    
    $consulta->closeCursor();

} catch (PDOException $e) 
{
    echo "Error con respecto a la consulta a la base de datos ";
    echo $e->getMessage();
    exit();
}
?>