<?php include 'header.php'; ?>
<main class="customer-panel-main">

    <div class="container">
        <h1 class="text-center" style="margin-bottom:50px;"> Display Customer Orders</h1>

        <form method="POST" action="checkout.php">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>customerID</th>
                    <th>PArt ID</th>
                    <th>unitPrice</th>
                    <th>Quantity</th>
                    <th>TotalPrice</th>
                </tr>
                <?php
                // Get image data from database 
                $result = $con->query("SELECT * FROM `orders` WHERE cusId='$customerID'");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        //`cartID`, `customerID`, `dressid`, `unitPrice`, `Quantity`, `TotalPrice`

                        echo "<tr><td>" . $row['orderid'] . "</td><td>" . $row['cusId'] . "</td><td>" . $row['productid'] . "</td><td>" . $row['price'] . "</td><td>" . $row['quantity'] . "</td><td>" . $row['total'] . "</td></tr>";
                    }
                } else {


                    echo "No orders are found!";
                }


                //////////////////////////
                $result = mysqli_query($con, 'SELECT SUM(`unitPrice`) AS value_sum FROM cart');
                $row = mysqli_fetch_assoc($result);
                $sum = $row['value_sum'];
                echo "<br> <h2>Total Amount : " . $sum . "</h2>";
                ?>
                <br>

        </form>

    </div>
</main>



<?php include_once "../footer.php"; ?>
