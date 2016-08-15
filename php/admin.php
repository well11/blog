<?php 
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('America/Caracas');
session_start();

if (isset($_SESSION['usuario'])) {

	$usuario = ucfirst($_SESSION['usuario']);

 
}else{
	header('Location: admin-login.php');
	die();
}

?>	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PCODE</title>
</head>
<body>
<?php 
	if (isset($_POST['insert_articulo'])) {
	require_once 'conexion.php';

	$titulo = mysqli_real_escape_string($con, $_POST['titulo']);
	$contenido = mysqli_real_escape_string($con, $_POST['contenido']);
	$author = mysqli_real_escape_string($con, $_POST['author']);
	$fecha = mysqli_real_escape_string($con, $_POST['fecha']);
	$categoria_id = mysqli_real_escape_string($con, $_POST['categoria_id']);
	$categoria = mysqli_real_escape_string($con, $_POST['categoria']);

	$sql = "SELECT * FROM articulos WHERE titulo='$titulo'";
	$existencia = mysqli_query($con, $sql);

	if ($existe = mysqli_fetch_object($existencia)) {
		echo "Error Esta Vaina ya existe";

	}else if ($titulo && $contenido && $author && $fecha){
		$sql = "INSERT INTO articulos (titulo, contenido, author, fecha, categoria_id, categoria) VALUES('$titulo', '$contenido', '$author', '$fecha', '$categoria_id', '$categoria')";

		mysqli_query($con, $sql);

		echo "Datos Insertado";

		mysqli_close($con);
	} else echo "Todos son obligatorios";

	}


 ?>

<h1>Panel Administrativo</h1>
<h4>Welcome <?php echo $_SESSION['usuario']; ?></h4>
<form action="admin.php" method="POST">
	<h1>Insertar Post en el Blog</h1>
	Fecha 

	Titulo: <input type="text" name="titulo" >

	Articulo <textarea name="contenido" id="" cols="30" rows="10"></textarea>

	Author <input type="text" name="author">
	<input type="text" name="fecha" value="<?php  echo $fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );?>">

	Categorias <?php  ?>
	<select name="categoria_id" id="">
		<option value="">Select Categorias </option>
		<?php 
		require_once 'conexion.php';
		$sql = "SELECT * FROM categorias";
		$resultado = mysqli_query($con, $sql);

		if (mysqli_num_rows($resultado) > 0) {
			while ($row = mysqli_fetch_assoc($resultado)) {
				$categoria_id = $row['categoria_id'];
				echo "<option value='$categoria_id'>". $row['categoria_id'] ."</option>";
			}
		}

		 ?>

	</select>

	<select name="categoria" id="">
		<option value="">Select Categorias</option>
		<?php 
		require_once 'conexion.php';
		$sql = "SELECT * FROM categorias";
		$resultado = mysqli_query($con, $sql);

		if (mysqli_num_rows($resultado) > 0) {
			while ($row = mysqli_fetch_assoc($resultado)) {
				$categoria = $row['categoria'];
				echo "<option value='$categoria'>". $row['categoria'] ."</option>";
			}
		}

		 ?>

	</select>
	<input type="submit" name="insert_articulo" value="Enviar Datos">
</form>
<h2>Crear Categoria:</h2>
	<?php 
		if (isset($_POST['insert_categoria'])) {
			$insert_categoria_id = mysqli_real_escape_string($con, $_POST['categoria_id']);
			$categoria_insert = mysqli_real_escape_string($con, $_POST['categoria']);

			$sql = "SELECT * FROM categorias WHERE categoria_id='$insert_categoria_id'";
			$sql_n ="SELECT * FROM categorias WHERE categoria ='$categoria_insert'";
			
			$existencia = mysqli_query($con,$sql);
			$existencia_n = mysqli_query($con,$sql_n);

			if ($existe = mysqli_fetch_object($existencia)) {
					echo "ID Existente";
				}else if ($existe = mysqli_fetch_object($existencia_n)){
					echo "Nombre ya existe";
				}else if ($insert_categoria_id && $categoria_insert) {
					$sql = "INSERT INTO categorias (categoria_id, categoria) VALUES ('$insert_categoria_id','$categoria_insert')";
					mysqli_query($con,$sql);
					echo "Success" . $insert_categoria_id . "Insertados y". $categoria_insert . "Success";
					mysqli_close($con);
				}else {
					echo "Rellena Los Campos Plox";
				}
		}
	 ?>
	<form action="admin.php" method="POST">
		<h3>Insertar Nueva Categoria</h3>
		ID Categoria <input type="text" name="categoria_id" >
		Nombre de la nueva categoria <input type="text" name="categoria">
		<input type="submit" name="insert_categoria" value="Enviar">
	

	</form>
	<?php 
	if (isset($_POST['delete_articulo'])) {
		$titulo = mysqli_real_escape_string($con, $_POST['titulo']);

		if ($titulo) {
			$existe = mysqli_query($con, "SELECT * FROM articulos WHERE titulo='$titulo'") or die ("<h1>Error</h1>");
			if (mysqli_num_rows($existe) !=0) {
				while ($row = mysqli_fetch_assoc($existe)) {
					mysqli_query($con, "DELETE FROM articulos WHERE titulo='$titulo'") or die("<h1>Error Eliminando<h1>");
					echo "Articulo Eliminado";
				
				}
			}else echo "No se pudo hacer nada Campos Vacios";
		}
	}

	 ?>
	<form method="POST" action="admin.php">
			<h2>Eliminar Articulo</h2>
			Titulo: <input type="text" name="titulo">
			<input type="submit" name="delete_articulo" value="Eliminar Articulo">
	</form>
	<?php 
	if (isset($_POST['delete_coment'])) {
		$id_coment = mysqli_real_escape_string($con, $_POST['id_coment']);

		if ($id_coment) {
			$existe = mysqli_query($con, "SELECT * FROM comentarios WHERE id_coment='$id_coment'") or die ("<h1>Error</h1>");
			if (mysqli_num_rows($existe) !=0) {
				while ($row = mysqli_fetch_assoc($existe)) {
					mysqli_query($con, "DELETE FROM comentarios WHERE id_coment='$id_coment'") or die("<h1>Error Eliminando<h1>");
					echo "Articulo Eliminado";
				
				}
			}else echo "No se pudo hacer nada Campos Vacios";
		}
	}

	 ?>


	<h2>Eliminar Comentario</h2>
	<form action="admin.php" method="POST">
		id	<input type="text" name="id_coment">
		<input type="submit" name="delete_coment" value="Eliminar Comentario">

	</form>

	<a href="logout.php">Cerrar la Session</a>
</body>
</html>