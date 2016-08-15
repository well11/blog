<?php 
if (isset($_POST['insertar_comentario'])) {
	require_once 'conexion.php';
	$nick = mysqli_real_escape_string($con, $_POST['nick']);
	$comentario = mysqli_real_escape_string($con, $_POST['comentario']);
	$fecha_co = mysqli_real_escape_string($con, $_POST['fecha']);

	if ($nick && $comentario && $fecha_co) {
		$sql = "INSERT INTO comentarios VALUES ('', '{$_GET['id']}', '$nick' , '$comentario', '$fecha_co')";
		mysqli_query($con, $sql);

		
		mysqli_close($con);
		
	}else{
		echo "Debes rellenarlos Todos";
	}


}


 ?>