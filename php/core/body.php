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
						<a class="active" href="web.html"><i class="fa fa-bolt"></i><span>Desarrollo Web</span></a>					
					</li>					
					<li>
						<a  href="contact.html"><i class="fa fa-phone"></i><span>Contacto</span></a>
					</li>
					<li>
						<a  href="about.html">
							<i class="fa fa-magic"></i><span>Nosotros</span>
						</a>
					</li>
					<?php include('php/lib/user.php'); ?>
				</ul>				
			</div>
			<!-- Social icon -->
			<div class="social-box">
				<ul class="social-icons">
					<li><a href="#" class="facebook" ><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="twitter" ><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="google" ><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" class="linkedin" ><i class="fa fa-linkedin"></i></a></li>				
					<li><a href="#" class="youtube" ><i class="fa fa-youtube"></i></a></li>
					<li><a href="php/admin.php"><i class="fa fa-2x fa-sign-in" aria-hidden="true"></i></a></li>
				</ul>
				<p class="copyright">&#169; 2016 PCOD, All Rights Reserved</p>
				
				
			</div>
		</header>
		<!-- End Header -->