<?php include_once "header.php";


if (isset($_POST['order'])) {
    header('Location:http://localhost/autoline/customer/CustomerPayments.php');
}
?>
<main class="customer-panel-main">


    <div class="container">
        <h1 class="text-center " style="margin-bottom:50px;"> Shoping Cart</h1>



        <form method="POST" action="checkout.php">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>customerID</th>
                    <th>Product Number</th>
                    <th>unitPrice</th>
                    <th>Quantity</th>
                    <th>TotalPrice</th>
                    <th> </th>
                    <th> </th>
                </tr>
                <?php
                // Get image data from database 
                $result = $con->query("SELECT * FROM `cart` WHERE customerID='$customerID'");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        //`cartID`, `customerID`, ``, `unitPrice`, `Quantity`, `TotalPrice`

                      //  echo "<tr><td>" . $row['cartID'] . "</td><td>" . $row['customerID'] . "</td><td>" . $row['productid'] . "</td><td>" . $row['unitPrice'] . "</td><td>" . $row['Quantity'] . "</td><td>" . $row['TotalPrice'] . "</td> <td> "." <a href='viewProductDetails.php?id='" . $row["productid"] .''.">Edit Cart</a> "." <a href='DeleteProductDetails.php?id='" . $row["productid"].">Delete From Cart</a></td> </tr>";
                   //  $pid= $row["productid"];
                    
                  // echo "<form name='f2' method='GET'> <tr><td>" . $row['cartID'] . "</td><td>" . $row['customerID'] . "</td><td>" . $row['productid'] . "</td><td>" . $row['unitPrice'] ."</td><td>" . $row['Quantity'] . "</td><td>" . $row['TotalPrice'] . "</td> <td> "."<a  href='viewProductDetails.php?id='echo ". $pid ."'> Modify Cart</a> ". "</td> <td> "."<a  href='DeleteProductDetails.php?id='echo". $pid."'> Delete  Cart</a>  </td></tr> </form>";
                        
                            
                  echo  "<tr> <td> ".$row['cartID'] ."</td>";
                  echo  "<td>  ".$row['customerID'] ."</td>";
                  echo  "<td> ".$row['productid'] ."</td>";
                  echo  "<td> ".$row['unitPrice'] ."</td>";
                  echo  "<td> ".$row['Quantity'] ."</td>";//$row['TotalPrice'] 
                  echo  "<td> ".$row['TotalPrice'] ."</td>";
                  echo    " <td> ". '<a href="EditProductDetails.php?id=' . $row['productid'] . '"> Modify Cart</a>'."</td>";
                  echo    " <td> ". '<a href="DeleteProductDetails.php?id=' . $row['productid'] . '">Delete From Cart</a>'."</td>";
                        
                    
                    }
                } 
                else 
                {


                    echo "No orders are found!";
                }
                ?>
            </table>


            <div class="container">
              
                <?php
                //////////////////////////
                $result = mysqli_query($con, 'SELECT SUM(`TotalPrice`) AS value_sum FROM cart');
                $row = mysqli_fetch_assoc($result);
                $sum = $row['value_sum'];
                echo "<br> <h2>Total Amount : " . $sum . "</h2>";
                ?>
                <br>
                <button type="submit" name="order" class="btn btn-dark">Place Order</button>
        </form>
    </div>
    </div>
</main>


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
        <a class="text-white" href="http://localhost/autoline/">Autoline.pk
        </a>
    </div>
    <!-- Copyright -->

</footer>