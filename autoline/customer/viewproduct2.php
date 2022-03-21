<?php include_once 'header.php'; ?>

<?php
if (isset($_POST['checkout'])) {
    header('Location:http://localhost/weddressfinal/customer/checkout.php');
}

$dressid = $_GET['id'];




$_SESSION["dressid1"] = $dressid;
$dressid = $_SESSION["dressid1"];


if (isset($_POST['done'])) //add to cart
{

    $cusId = $customerID;
    $dressid = $_POST['dressid'];

    $result = $con->query("SELECT * FROM dress where dressid= '$dressid'");

    if ($result->num_rows > 0) {


        $row = $result->fetch_assoc();

        $price = $row['price'];

        $qty =    $_POST['qty'];
        $TotalPrice = $price * $qty;


        echo "<br> cusId " . $cusId . " dressid " . $dressid . " price " . $price . " qty " . $qty . " TotalPrice " . $TotalPrice;

        $status = "confirmed";

        $q1 = "INSERT INTO `cart`(`customerID`, `dressid`, `unitPrice`, `Quantity`, `TotalPrice`)VALUES ('$cusId','$dressid','$price','$qty','$TotalPrice')";
        $query = mysqli_query($con, $q1);
        echo "thank you";

        header('Location:http://localhost/weddressfinal/customer/index.php');
    }
}



$result = $con->query("SELECT * FROM dress where dressid= '$dressid'");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();




?>

    <div class="container">

        <form method="POST" action="ViewDress.php">
            <?php

            $unitPrice = $row['price'];
            $dresstype = $row['dresstype'];
            $category = $row['category'];
            $image = $row['image'];
            $dressName = $row['Name'];


            ?>
            <table class="table">
                <tr>
                    <th scope="col">Dress</th>

                    <th scope="col">category</th>
                    <th scope="col">price</th>
                    <th scope="col">Choose Quantity</th>
                </tr>
                <tr>
                    <td> <img class="add-to-cart-product-image img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="Dress Image">
                        <p class="cart-table-product-name">
                            <?php echo $dressName  ?>
                        </p>
                    </td>

                    <td><?php echo $category  ?></td>
                    <td><?php echo $unitPrice  ?></td>
                    <td>
                        <select name="qty" id="qty" class="form-control">
                            <option value="Select">--Select--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" id="dressid" name="dressid" value="<?php echo $row['dressid'] ?>">
                    </td>
                </tr>
                <tr>

                    <td><button type="submit" name="done" class="btn btn-dark">Add to Cart </button></td>


                </tr>

            </table>


        <?php
    }

        ?>


        </form>
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