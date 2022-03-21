<?php include 'sidebar.php';
//`product`, `category`, `price`
// Get image data from database 
$result = $con->query("SELECT * FROM orders");


?>
<div class="container">
	<div class="row dashboard-main-data">
		<h1 class="text-center" style="margin-bottom: 50px;"> All Orders</h1>


		<?php if ($result->num_rows > 0) { ?>
			<?php while ($row = $result->fetch_assoc()) {
                
            //cusId,productid,price,quantity,total,orderid    
                ?>

				<div class="col-md-4 ">
					<div class="text-center single-product">
						
						<div class="product-details">
							<h3 class="product-grid-auto-name"><?php echo $row['cusId'] ?></h3>
							<div class="description row">
								<p class="product-grid-auto-category col-md-6">Order # : <?php echo $row['orderid'] ?></p>

                                <p class="product-grid-auto-price col-md-6"> Product : <?php echo $row['productid'] ?></p>
                                <p class="product-grid-auto-price col-md-6"> Price : <?php echo $row['price'] ?></p>
                                <p class="product-grid-auto-price col-md-6"> Quanitity: <?php echo $row['quantity'] ?></p>
                                <p class="product-grid-auto-price col-md-6"> Total: <?php echo $row['total'] ?></p>
								
								

							</div>
						</div>
					</div>
				</div>





			<?php

				

			} ?>
	</div>
<?php } else { ?>
	<p class="status error">Image(s) not found...</p>
<?php } ?>



</div>
</div>
<?php include_once "footer.php"; ?>