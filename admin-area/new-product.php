<?php include '../includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>MyShop - Admin Area - Add Product </title>
</head>
<body>

	<form method="POST" action="new-prodcut.php" enctype="multipart/form-data">

		<table width="700" align="center">
			<tr>
				<td><h2>Add New Product</h2></td>
			</tr>

			<tr>
				<td><label>Product Title:</label></td>
				<td><input type="text" name="p_title" /></td>
			</tr>

			<tr>
			<td><label>Product Category:</label></td>
			<td>
					<select name="p_cats">
					<option>Select a Category</option>

					<?php 

			$catsql = "SELECT * FROM categories";
			$cat_row = mysqli_query($con, $catsql );

			while ($cat = mysqli_fetch_assoc($cat_row)) { 

				$cname = $cat["cat_name"];
				$cid = $cat["cat_id"];

				echo "<option value='$cid'>$cname</option>";
				
			} ?>

				</select>
			</td>
			</tr>
			<tr>
				<td><label>Product Brand:</label></td>
				<td>
					
					<select name="p_brand">
					<option>Select a Brand</option>

					<?php 

			$brandsql = "SELECT * FROM brands";
			$brand_row = mysqli_query($con, $brandsql );

			while ($brand = mysqli_fetch_assoc($brand_row)) { 

				$bname = $brand["brand_name"];
				$bid = $brand["brand_id"];

				echo "<option value='$bid'>$bname</option>";
				
			} ?>

				</select>

				</td>
			</tr>
			<tr>
				<td><label>Product Image 1:</label></td>
				<td><input type="file" name="p_img1" /></td>
			</tr>
			<tr>
				<td><label>Product Image 2:</label></td>
				<td><input type="file" name="p_img2" /></td>
			</tr>
			<tr>
				<td><label>Product Image 3:</label></td>
				<td><input type="file" name="p_img3" /></td>
			</tr>
			<tr>
				<td><label>Product Description:</label></td>
				<td><textarea name="p_desc"></textarea></td>
			</tr>
			<tr>
				<td><label>Product Keywords:</label></td>
				<td><input type="text" name="p_keywords" /></td>
			</tr>

			<tr>
				<td>Product Available:</td>
				<td > 
					<select name='p_status'>
						<option>Choose Yes/No</option>
						<option value="0">No</option>
						<option value="1">Yes</option>

					</select>

				</td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" /></td>
			</tr>
			
		</table>
		
	</form>

</body>
</html>