<?php 
    $con = mysqli_connect("localhost", "root","","lopezso") or die ("Error!"); 
?>

<!DOCTYPE html> 
<meta charset="UTF-8">

<html>
<head>    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altas, Bajas y Consultas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../elementos/Elementos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <form method="POST" action="Formulario.php">
    <br><a class="retorno" href="Bienvenido.php"><-----Regresar<br><br></a>
	<label>Nombre:<br></label>
	<input autocomplete="off"type="text" class="ingreso1"  name="nombre" placeholder = "Escriba su nombre"><br />
	<label>Usuario:<br> </label>
	<input autocomplete="off"type="text" class="ingreso"  name="usuario" placeholder = "Escriba su contraseña"><br />
	<label>Descripcion:<br></label>
	<input autocomplete="off"type="text" name="descripcion" placeholder = "Escriba su email"><br /><br>
	<input type="submit" name="insert"  value ="INSERTAR DATOS">

 	</form>


<br/>
<br> </br>
<center><table width="500" border="2" style="background-color: #F9F9F9; ">
	<tr align="center">		
		<th>Editar</th>
		<th>Borrar</th>
		<th>Id</th>
		<th>Nombre</th>
		<th>Usuario</th>
		<th>Descripcion</th>
	</tr></center>
<?php
$consulta = "SELECT * FROM cliente	";
$ejecutar = mysqli_query($con, $consulta);
$i = 0;
while ( $fila = mysqli_fetch_array($ejecutar)) {
	$id = $fila['id_usuario'];
	$nombre = $fila['nombre'];
	$usuario = $fila['usuario'];
	$descripcion = $fila['descripcion'];
?>
<tr align="center">
<td><span class="glyphicon glyphicon-pencil"><a href="Formulario.php?editar=<?php echo $id; ?>">Editar</a></span></td>
<td><span class="glyphicon glyphicon-search"><a href="#" onclick="preguntar(<?php echo $fila['id_usuario']?>)">Borrar</a></span></td>
<td><?php echo $id; ?></td>
<td><?php echo $nombre; ?></td>
<td><?php echo $usuario; ?></td>
<td><?php echo $descripcion; ?></td>

</tr>
<?php } ?>
</table>

<script type="text/javascript">
function preguntar(id)
{
	var confirmar = confirm('¿Estás seguro de borrar este registro?');
	if(confirmar)
	{ window.location.href = "Formulario.php?borrar="+id; }			
	
	function insertar()
	{
		if(alert('El cliente se ha registrado correctamente'))
		{ window.location.href = "Formulario.php?="; }			
	}		
}
</script>

<?php
	if(isset($_POST["insert"])){
		include("editar.php");
	}
?>

<?php
if(isset($_GET['editar'])){
	include("editar.php");
}
?>

<?php
if(isset($_GET['borrar'])){
	include("editar.php");
}
?>
</body>
</html>
