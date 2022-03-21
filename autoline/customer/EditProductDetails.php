<?php include_once 'header.php';
//`dresstype`, `category`, `price`
// Get image data from database 
//$unitPrice=0;
// $TotalPrice=0;

if (isset($_POST["submit"])) {
	//// $Quantity $unitPrice $TotalPrice
	$pid = $_GET['id'];

	$Quantity = $_POST['Quantity'];
	$price = $_POST['unitPrice'];
	$total = $Quantity * $price;
	echo "  Total Price " . $total;
	echo "<br>";

	$insert = $con->query("UPDATE `cart` SET `Quantity`='$Quantity',`TotalPrice`='$total' where `productid`='$pid'");
	if ($insert) {
		$status = 'success';
		echo $statusMsg = "Record is updates successfully.";
	} else {
		echo $statusMsg = "Failed, please try again.";
	}
}
$pid = $_GET['id'];

$result = $con->query("SELECT * FROM cart where productid='$pid'");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {

		$dressid =	$row['productid'];
		$Quantity = $row['Quantity'];
		$TotalPrice = $row['TotalPrice'];
		$unitPrice = $row['unitPrice'];
		/// $Quantity $unitPrice $TotalPrice
	}
}




?>

<div class="container">

	<div class="row text-center " style="padding: 50px;">

		<h1>
			Edit Cart
		</h1>
		<div style="height: 50px;"> </div>
		<form action="EditProductDetails.php?id=<?php echo $dressid ?>" method="post" class="form-control">

			<table class="table">
		
				<tr>
					<td>Dress ID</td>
					<td><?php echo $pid ?></td>
				</tr>
				<tr>
					<td>Quantity </td>
					<td><input type="Text" class="form-control" name="Quantity" value="<?php echo $Quantity ?>"></td>
				</tr>
				<tr>
					<td>Unit Price</td>
					<td><input type="Number" class="form-control"  name="unitPrice" value="<?php echo $unitPrice ?>"></td>
				</tr>
				<tr>
					<td>Total Price</td>
					<td><?php echo $TotalPrice ?></td>
				</tr>


				<tr >
				
					<td colspan="2" ><input type="submit" class="btn btn-dark btn-block btn-lg" style="width: 100%;" name="submit" value="Save Changes"></td>
				</tr>

			</table>
		</form>
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