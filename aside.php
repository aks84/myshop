<section>

<h2>Categories</h2>
	<nav class="secondary-menu">
		<ul>
			<?php 

			$brandsql = "SELECT * FROM brands";
			$brand_row = mysqli_query($con, $brandsql );

			while ($brand = mysqli_fetch_assoc($brand_row)) { 

				$bname = $brand["brand_name"];

				echo "<li> <a href='$bname'>$bname</a></li>";
				
			} ?>
		</ul>
	</nav>

<h2>Brands</h2>
	<nav class="secondary-menu">
		<ul>
			<?php 

			$catsql = "SELECT * FROM categories";
			$cat_row = mysqli_query($con, $catsql );

			while ($cat = mysqli_fetch_assoc($cat_row)) { 

				$cname = $cat["cat_name"];

				echo "<li> <a href='$cname'>$cname</a></li>";

		 } ?>
			
			
		</ul>
	</nav>

	<a href="admin-area/new-product.php"> Admin Area</a>
</section>