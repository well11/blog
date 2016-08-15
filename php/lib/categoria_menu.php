<?php
			
				$sql = "SELECT * FROM categorias ORDER BY categoria_id DESC";
				$query = mysqli_query($con, $sql);
				if (mysqli_num_rows($query) > 0) {
					while ($row = mysqli_fetch_assoc($query)) {
						$categoria_id = $row['categoria_id'];
					?>
			<li>
			<a href='web.php?id=<?php echo $row['categoria_id']; ?>'><?php echo $row['categoria']; ?></a>
			</li>
						
					
				
				
				<?php
				}
			}
		
				 ?>
 