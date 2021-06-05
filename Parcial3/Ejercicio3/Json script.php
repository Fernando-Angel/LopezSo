<?php

//creacion del string
$string = '{"id":10,"Nombre":"Fernando ALS","Profesion":"Estudiante",
          "Conocimiento":["html","css","javascript"], "Idiomas":["Espanol 100%","Ingles 40%","Frances 5%"]}';
//Conversion de Json a variable php.
$info = json_decode($string, true);
//Modificacion del contenido.
$info ['Areas'] = array("Programación","Diseño Web");
//Visualizacion de la infromacion modificada.
var_dump($info);
//Convertir nueamente la información a Json.
$newJsonString = json_encode($info);
//Creacion de un archivo Json con la informacion anteriormente escrita.
file_put_contents('jsonFile.json', $newJsonString);

?>