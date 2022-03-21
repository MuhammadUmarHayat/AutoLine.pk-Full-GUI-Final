<?php include 'sidebar.php';
//`product`, `category`, `price`
// Get image data from database 
$result = $con->query("SELECT * FROM products");


?>
<div class="container">
	<div class="row dashboard-main-data">
		<h1 class="text-center" style="margin-bottom: 50px;"> All Products</h1>


		<?php if ($result->num_rows > 0) { ?>
			<?php while ($row = $result->fetch_assoc()) { ?>

				<div class="col-md-4 ">
					<div class="text-center single-product">
						<img class="product-grid-image img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="Product Image">
						<div class="product-details">
							<h3 class="product-grid-auto-name"><?php echo $row['title'] ?></h3>
							<div class="description row">
								<p class="product-grid-auto-category col-md-6">Category: <?php echo $row['category'] ?></p>
								<p class="product-grid-auto-price col-md-6"> RS: <?php echo $row['price'] ?></p>
								<?php
								echo '<a href="editProduct.php?id=' . $row['productid'] . '">Edit Details</a>';
echo '<a href="deleteProduct.php?id=' . $row['productid'] . '">Delete Details</a>';
?>

							</div>
						</div>
					</div>
				</div>





			<?php

				//echo '<a href="tech.php?id=' . $row['shopid'] . '">Show Technicians</a>';

			} ?>
	</div>
<?php } else { ?>
	<p class="status error">Image(s) not found...</p>
<?php } ?>



</div>
</div>
<?php include_once "footer.php"; ?>