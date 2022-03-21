	<?php include 'header.php'; ?>
	<?php

	$customerID = "";
	$amount = 0;
	$customerID = $_SESSION["userid"];
	//echo "<h3> Welcome : ".$customerID."</h3>";


	$result = mysqli_query($con, 'SELECT SUM(`TotalPrice`) AS value_sum FROM cart');
	$row = mysqli_fetch_assoc($result);
	$sum = $row['value_sum'];
	$amount = $sum;
	//echo "<br> <h2>Total Amount : ".$sum."</h2>";

	if (isset($_POST['done'])) {
		if (!empty($_POST)) {

			// echo "$fname Refsnes.<br>";
			try {
				//empty the cart when order is places


				$cusID = $customerID;

				$status = "paid";
				$bankname = $_POST['bankname'];
				$accountNumber = $_POST['accountNumber'];

				$method = "";

				if (isset($_POST['methods'])) {
					$method = $_POST['methods'];

					//save order////////////////

					$con = mysqli_connect('localhost', 'root');
					mysqli_select_db($con, 'autotestdb');

					$result = $con->query("SELECT * FROM `cart` WHERE customerID='$customerID'");
					if ($result->num_rows > 0) {
						$orderid = rand(111, 999);
						while ($row = $result->fetch_assoc()) {
							//`cartID`, `customerID`, `pid`, `unitPrice`, `Quantity`, `TotalPrice`

							echo $row['cartID'] . "-" . $row['customerID'] . "-" . $row['productid'] . "-" . $row['unitPrice'] . "-" . $row['Quantity'] . "-" . $row['TotalPrice'] . "<br>";

							$cusId = $row['customerID'];

							$productid = $row['productid'];
							$price = $row['unitPrice'];
							$quantity = $row['Quantity'];
							$status = "paid";
							$total = $row['TotalPrice'];
							$date1 = date("Y/m/d");

							$q1 = "INSERT INTO `orders`(`cusId`, `productid`, `price`, `quantity`, `date`, `status`, `total`, `orderid`) VALUES ('$cusId', '$productid', '$price','$quantity', '$date1', '$status', '$total','$orderid')";
							$query = mysqli_query($con, $q1);


							$result1 = $con->query("SELECT * FROM `products` WHERE productid='$productid'");
							if ($result1->num_rows > 0) {

								while ($row1 = $result1->fetch_assoc()) {
									$title = $row1['title'];
									$productid12 = $row1['productid'];
									$quantity = -$quantity;
									$status = "sold";
									//$q12="INSERT INTO `products`(`title`, `quantity`,`status`) VALUES('$title','$quantity','$status')";
									//$query12 = mysqli_query($con,$q12);	


								}
							}
						} //end loop






					} else {


						echo "No orders are found!";
					}







					$q2 = "DELETE FROM `cart`";
					$query = mysqli_query($con, $q2);
				} else {


					echo "please select payment method first";
				}


				$query = "";
				$date1 = date("Y/m/d");
				if ($method == "cod") {
					echo "cod";


					echo $q1 = "INSERT INTO `payments`( `cusID`, `method`, `amount`,`date`, `status`) VALUES ('$cusID', '$method`, '$amount','$date1', '$status')";
					echo " result" . $query = mysqli_query($con, $q1);
					//getData($customerID) ;
					header('Location:http://localhost/autoline/customer/ThankYou.php');
					echo 'Thank you for payment!';


					/////////////save order////////////////
				} else if ($method == "online") {
					echo " <br> Online Bankig <br>";
					$q1 = "INSERT INTO `payments`( `cusID`, `method`, `amount`,`date`, `status`,`accountNumber`,`bankName`) VALUES ('$cusID', '$method', '$amount','$date1', '$status','$accountNumber','$bankname')";
					$query = mysqli_query($con, $q1);
					////////////////////////////////Save order////////////////////////

					//getData($customerID) ;
					echo 'Thank you for payment!';
					header('Location:http://localhost/autoline/customer/ThankYou.php');
				}
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		} else {



			echo "Please fill the form first";
		}
	}




	?>


	<div class="container">
		<div class="row text-center" style="padding:50px;">


			<h1>Customer Payments</h1>
			<div style="height: 50px;"></div>
			<div class="col-md-12">

				<form method="POST" class="form-control" action="CustomerPayments.php">


					<table class="table table-striped text-right">
						<tr>
							<td>
								Select payement method
							</td>
							<td>
								<input type="radio" class="form-check-input" name="methods" <?php if (isset($methods) && $methods == "cod") echo "checked"; ?> value="cod">Cash on Delivery
								<input type="radio" class="form-check-input" name="methods" <?php if (isset($methods) && $methods == "online") echo "checked"; ?> value="online">Online Banking

							</td>
						</tr>


						<tr>
							<td> Enter Bank Name(for online banking):</td>
							<td> <input type="text" class="form-control" name="bankname"></td>
						</tr>

						<tr>
							<td> Enter Account Number (for online banking):</td>
							<td> <input type="text" class="form-control" name="accountNumber"></td>
						</tr>




						<tr>
							<td>payment amount:</td>
							<td> <?php echo $amount; ?></td>
						</tr>

						<tr>

							<td colspan="2"> <button type="submit" class="btn btn-dark btn-lg" style="width:100%" name="done">Submit</button></td>
						</tr>



					</table>
				</form>
			</div>
		</div>

	</div>
	
<!-- Footer -->
<footer class="bg-dark text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-6 mb-md-0">
                    <h2>About AutoLine.Pk</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                        distinctio earum repellat quaerat voluptatibus placeat nam,
                        commodi optio pariatur est quia magnam eum harum corrupti dicta,
                        aliquam sequi voluptate quas.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook"></i></a>

            <!-- Twitter -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        </section>

    </div>
    <!-- Grid container -->
            <!-- Section: Social media -->
            
        <!-- Section: Social media -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="http://localhost/autoline/customer/">Autoline.pk
        </a>
    </div>
    <!-- Copyright -->

</footer>