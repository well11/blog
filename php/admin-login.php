<?php 
error_reporting(E_ALL & ~E_NOTICE);

session_start(); 
if ($_POST['login']) {
  $admin = 'yolo';
  $pass = '12345';

  $usuario = strip_tags($_POST['usuario']);
  $usuario = strip_tags($usuario);
  $pass_user = strip_tags($_POST['password']);

  if ($usuario == $admin && $pass_user == $pass ) {
  	$_SESSION['usuario'] = $usuario;

  	header('Location: ../web.php');
  }else{
  	echo "Error Credenciales incorrectas";
  }
}

?>


<form action="" method="POST">
<h1>Login:</h1>
	<p>Usuario:</p>
	<input type="text" name="usuario">
	Contraseña
	<input type="password" name="password">
	<input type="submit" name="login" value="login">
</form>