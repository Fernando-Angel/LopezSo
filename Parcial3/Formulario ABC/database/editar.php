<?php
//INSERTAR=======================================================================================
	if(isset($_POST["insert"])){
		$nombre  = $_POST["nombre"];
		$usuario = $_POST["usuario"];
		$descripcion = $_POST["descripcion"];
		
		if($nombre != "" && $usuario != "" && $descripcion != "")
		{
			$insertar = "INSERT INTO cliente (nombre, usuario, descripcion) VALUES ('$nombre','$usuario', '$descripcion')";
			$ejecutar = mysqli_query($con, $insertar);

			$nombre  = "";
			$usuario = "";
			$descripcion = "";
		}
		if ($ejecutar){
			echo "<h3>Insertado Correctamente</h3>";
		}
		header("location: Formulario.php");
	}
?>

<?php
//MODIFICAR=======================================================================================
if(isset($_GET['editar'])){
	$editar_id = $_GET['editar'];
	$con = mysqli_connect("localhost", "root","","lopezso") or die ("Error!"); 
	$consulta = "SELECT * FROM cliente WHERE id_usuario = $editar_id;" ;
	$ejecutar = mysqli_query($con, $consulta);

	while ( $fila = mysqli_fetch_array($ejecutar)) {
		$id = $fila['id_usuario'];
		$nombre = $fila['nombre'];
		$usuario = $fila['usuario'];
		$descripcion = $fila['descripcion'];	
	?>
	<?php }
}
?>
<br />
<form method="POST" action="">
<input autocomplete="off" type="text" name="txtnombre" value="<?php echo $nombre; ?>"><br/>
<input autocomplete="off" type="text" name="txtusuario" value="<?php echo $usuario; ?>"><br/>
<input autocomplete="off" type="text" name="txtdescripcion" value="<?php echo $descripcion; ?>"><br/>
<input type="submiT" name="actualizar" value="ACTUALIZAR DATOS">
</form>

<?php

if (isset($_POST['actualizar'])){
	$nombre1  = $_POST["txtnombre"];
	$usuario1 = $_POST["txtusuario"];
	$descripcion1 = $_POST["txtdescripcion"];

$actualizar = "UPDATE cliente SET nombre='$nombre1', usuario='$usuario1', descripcion='$descripcion1' WHERE id_usuario = $editar_id;" ;
$ejecutar = mysqli_query($con, $actualizar);
	header("location: Formulario.php");
}
?>

<?php
//BORRAR=========================================================================================
if(isset($_GET['borrar'])){
	$borrar_id = $_GET['borrar'];
	$borrar = "DELETE FROM cliente WHERE id_usuario = $borrar_id;";
	$ejecutar = mysqli_query($con, $borrar);
	
	header("location: Formulario.php");
}
?>


<script type="text/javascript">
		function confirmar(id)
		{
			if(alert('El cliente se ha actualizado correctamente'))
			{
				window.location.href = "Formulario.php?="+id;
			}			
		}
</script>