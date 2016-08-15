<?php 


							if (isset($_GET['id'])) {
								$sql = "SELECT * FROM categorias WHERE categoria_id='{$_GET['id']}'";
								$resultado = mysqli_query($con, $sql);

								if (mysqli_num_rows($resultado) > 0) {
								while ($row = mysqli_fetch_assoc($resultado)) {
							
							
									?>
									
									<li><a href="#" data-filter=".web-design"><?php echo $row['categoria']; ?></a></li>
									<?php
								}
							}
						}
						

 ?>
