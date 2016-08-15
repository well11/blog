<?php 
					session_start(); 
					if (isset($_SESSION['usuario'])) {
						echo "<li><a href='php/admin.php'><i class='fa fa-paper-plane' aria-hidden='true'></i>Publicar Contenido</a></li>";
						echo "<li>
						<a  href='#'><i class='fa fa-sign-out'></i><span>". $_SESSION['usuario'] ."</span></a></li>";
						echo "<li>
						<a  href='php/logout.php' id='logout-btn'><i class='fa fa-sign-out'></i><span>Logout</span></a></li>";
					}else{
					echo "<li>
						<a  href='php/admin-login.php'><i class='fa fa-sign-in'></i><span>Iniciar Session</span></a></li>";
				}

					?>

			
					