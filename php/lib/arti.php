<?php
									if (isset($_GET['id'])) {
										$sql = "SELECT * FROM articulos WHERE categoria_id='{$_GET['id']}' ORDER BY id_articulo DESC";
									}

									else{
										$sql = "SELECT * FROM articulos ORDER BY id_articulo DESC";	
									}
									
									$resultado = mysqli_query($con, $sql);

									if (mysqli_num_rows($resultado) > 0) {
										while ($row = mysqli_fetch_array($resultado)) {
									?>
				    
			                        <div class=" col-md-4 m-b-lg">
			                            <a href="blog-post.php?id=<?php echo $row['id_articulo']; ?>" class="img-wrapper">
			                                <img src="upload/image1.png" alt="blog" class="img-responsive">
			                                <div class="img-overlay">
			                                    <p class="more">Ver Mas</p>
			                                </div>
			                            </a><!--image-wrapper end-->
			                            <div class="blog-desc">
			                                <h3><a href="blog-post.html"><?php echo $row['titulo']; ?></a></h3>
			                                <div class="post-date">
			                                <a class="left css-tag" href="categorias.php?id=<?php echo $row['categoria_id']; ?>" ><?php echo $row['categoria']; ?></a>
			                                <span><?php echo $row['fecha']; ?></span></div>
			                                <p>
			                                    <?php echo $row['contenido']; ?>
			                                </p>
			                                <p class="text-right">
			                                <a href="blog-post.php?id=<?php echo $row['id_articulo']; ?>" title="publicar">Comentar</a>
			                                <a href="blog-post.php" class="btn btn-custom">Leer Mas</a>
			                                </p>
			                            </div><!--blog-desc-->
			                        </div>
			                        <?php
										 } 
										}else {
											echo "<h1>Ohhh Rayos 0 articulos encontrado</h1>";
										}
			                         ?>		