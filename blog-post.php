<?php include('php/conexion.php'); ?>
<?php 
	$sql = "SELECT * FROM articulos WHERE id_articulo='{$_GET['id']}'  ORDER BY id_articulo DESC";
	$resultado = mysqli_query($con, $sql);

	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_assoc($resultado)) {
			 $articulo = $row['titulo'];
			 $contenido = $row['contenido'];
			 $author = $row['author'];
			 $fecha = $row['fecha'];
			 
		} //End While
	}




?>
<!DOCTYPE html >
<html lang="en">
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8"/>
  <meta name="description" content="Dedicados Al Desarrollo web, Android, Diseño y mas"/>
  <meta name="keywords" content="responsive, creative, html/css, theme" />
  <meta name="author" content="Paraguana CODE"/>

  <!-- Site Title-->
  <title>PCODE</title>

  <!-- Mobile Specific Metas-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>


	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/light-blue.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	<link rel="stylesheet" href="css/loaders.css">
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		================================================== -->
		<header>
			<div class="logo-box logo">
				<h1><a href="">PCODE</a></h1>
                <p>Diseño y Desarrollo</p>
			</div>
			
			<a class="elemadded responsive-link" href="#">Menu</a>

			<div class="menu-box">
				<ul class="menu">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i><span>Inicio</span>
						</a>
					</li>
					<li>
						<a  href="desing.html">
							<i class="fa-picture-o fa"></i><span>Ilustraciones</span>
						</a>
					</li>
					<li>
						<a class="active" href="web.php"><i class="fa fa-bolt"></i><span>Desarrollo Web</span></a>
						
					</li>
					
					<li>
						<a  href="contact.html"><i class="fa fa-phone"></i><span>Contacto</span></a>
					</li>

					<li>
						<a  href="about.html">
							<i class="fa fa-magic"></i><span>Nosotros</span>
						</a>
					</li>
				</ul>				
			</div>
			<hr class="style14">
			<div class="comment-list" >
	            <img src="https://s-media-cache-ak0.pinimg.com/564x/00/fd/7d/00fd7db068658d02d0f3576150f3bfbf.jpg" class="img-responsive" alt="">
	            <h5><a href="#" style="color:#F5F7FA;"><?php echo $author; ?> </a> 7 june </h5>
	            <p style="color:#E6E9ED;">
	                Apacionado por las tortas
	            </p>
	            <div class="text-left" style="color:#E6E9ED;">
		        	<i class="fa-1x fa fa-facebook-square" aria-hidden="true"></i>
		        	<i class="fa-1x fa fa-twitter" aria-hidden="true"></i>
		        	<i class="fa-1x fa fa-google-plus" aria-hidden="true"></i>
		        </div>
	        </div><!--comment list-->
			

			<!-- Social icon -->
			<div class="social-box">
				<ul class="social-icons">
					<li><a href="#" class="facebook" ><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="twitter" ><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="google" ><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" class="linkedin" ><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" class="pinterest" ><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#" class="youtube" ><i class="fa fa-youtube"></i></a></li>
				</ul>
				<p class="copyright">&#169; 2016 PCOD, All Rights Reserved</p>
			</div>


		</header>
		<!-- End Header -->



		<!-- content 
		================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="blog-page">
					<!-- Filter -->
					<div class="filter-box">
						<ul class="filter list-inline text-center">
							
							<li><a href="#" data-filter=".illustration"><?php echo $articulo; ?></a></li>
						</ul>
					</div>
					
					<div class="container">
	                    <div class="row">
			                <div class="col-md-12">
			                   
			                    <div class="row">

			                    	<!--Blog-post -->
			                        <div class="col-sm-12 m-b-lg blog-post" style="padding-top:15px;"">
			                            <img src="images/blog-post.jpg" class="img-responsive">
			                            <div class="blog-desc post-det">
			                                <h3><?php echo $articulo; ?></h3>
			                                <div class="post-date"><span><?php echo $fecha; ?></span></div>
				                                <?php echo "<p>". $contenido ."</p>"; ?>
			                                <div class="left">	
						<?php 
					$sql_cate =" SELECT * FROM categorias WHERE categoria_id='{$_GET['id']}' ORDER BY categoria DESC ";
						$resultado_cate = mysqli_query($con, $sql_cate);

						if (mysqli_num_rows($resultado_cate) >0) {
							while ($row_cate = mysqli_fetch_assoc($resultado_cate)) {
							?>
								<h2><?php  echo $row_cate['categoria']; ?></h2>
						<?php
							}
						}

						 ?>
			                                </div>
			                            </div><!--blog-desc-->
			                        </div>

			                    </div><!--.row-->
								<?php 
								$sql = "SELECT * FROM articulos WHERE id_articulo='{$_GET['id']}' ";
								$resultado = mysqli_query($con, $sql);
								if (mysqli_num_rows($resultado) > 0) {
									while ($row = mysqli_fetch_assoc($resultado)) {
										$aver = $row['id_articulo'];
								?>

								<?php
								}
								}

								 ?>
								 
			                    <div class="row">
			                        <div class="col-md-12 comments-back">
			                        	<div class="text-center">
											<?php 
											 $sql = "SELECT count(*) as total FROM comentarios WHERE id_articulo = '{$_GET['id']}'" ;

											foreach ($con->query($sql) as $row) {
											$num = $row['total'];
											}
											 
											 
											 if ($row > 0) {
											 	echo "<br>";
											 	echo "<h3 class='title'> ". $num ." Comentarios Recientes</h3>";
											 	echo "<span class='ubtitle'> Comentarios</span>";
											 	
											 }else {
											 	echo "<h3 class='title'>Ningun Comentario Encontrado</h3>";
											 }
											  ?>
				                        
											
											<div class="devider"></div>
										</div>

										<?php 

										$sql = "SELECT * FROM comentarios WHERE id_articulo = '{$_GET['id']}' ORDER BY fecha";
										$resultado = mysqli_query($con, $sql);
										if (mysqli_num_rows($resultado) > 0 ) {
											while ($row = mysqli_fetch_assoc($resultado)) {
											?>
											<div class="comment-list">
			                                <img src="upload/user.png" class="img-responsive" alt="">
			                                <h5><a href="#"><?php echo $row['nick']; ?></a> <?php echo $row['fecha']; ?> | </h5>
			                                <p><?php echo $row['comentario']; ?></p>
			                                <h6>id Del Comentario <?php echo $row['id_coment']; ?></h6>
			                                <hr>
			                            	</div><!--comment list-->	
											<?php
											}
										}


										 ?>
			                            
			                            
			                        </div>
			                    </div>

			                    <div class="row">
			                        <div class="col-md-12">
			                        	<div class="leave-comm">
				                        	<div class="text-center">
					                        	<h3 class="title">Deja Un Comentario</h3>
												<span class="subtitle">Type your Comment below and click to send comment</span>
												<div class="devider"></div>
											</div>
											<?php include('php/comentarios.php'); ?>
											<form action="blog-post.php?id=<?php echo $aver; ?>" method="POST">
											<div class="row">
			                                    <div class="col-sm-6">
			                                        <input type="text" class="form-control" placeholder="Nombre" name="nick">
			                                    </div>
			                                    <div class="col-sm-6">
			                                        <input type="text" class="form-control" placeholder="Fecha" value="<?php date_default_timezone_set("Europe/Madrid"); echo date("Y-m-dH:i:s"); ?>" name="fecha">
			                                    </div>
			                                    <div class="col-sm-12">
			                                        <textarea class="form-control" name="comentario" placeholder="Escriba aqui su comentario" rows="6"></textarea>
			                                    </div>
			                                    <div class="col-sm-12 text-right">
			                                        <input type="submit" name="insertar_comentario" class="btn btn-custom btn-lg" value="Enviar Comentario">
			                                    </div>
			                                </div>
			                                </form>
			                                
										</div>
									</div>
								</div>

			                </div>
			            </div><!--filter row-->
			        </div>
			    </div>
			</div>
		</div>
		<!-- End content -->

	</div>
	<!-- End Container -->

	<!-- Preloader -->
	<div class="preloader">
		<div class="loader"><div class="loader-inner line-scale"><div></div><div></div><div></div><div></div><div></div></div></div>
	</div>


	<!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/SmoothScroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


</body>
</html>