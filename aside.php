<section>

<h2>Categories</h2>
	<nav class="secondary-menu">
		<ul>
			<?php 

			$brandsql = "SELECT * FROM brands";
			$brand_row = mysqli_query($con, $brandsql );

			while ($brand = mysqli_fetch_assoc($brand_row)) { 
				
			?>
				<li><a href="<?php echo $brand["brand_name"] ?>"><?php echo $brand["brand_name"] ?></a></li>				
			<?php } ?>
		</ul>
	</nav>

<h2>Brands</h2>
	<nav class="secondary-menu">
		<ul>
			<?php 

			$catsql = "SELECT * FROM categories";
			$cat_row = mysqli_query($con, $catsql );

			while ($cat = mysqli_fetch_assoc($cat_row)) { 

			?>
				<li><a href="<?php echo $cat["cat_name"] ?>"><?php echo $cat["cat_name"] ?></a></li>				
			<?php } ?>
			
			
		</ul>
	</nav>

	
</section>