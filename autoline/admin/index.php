<?php include_once "sidebar.php"; ?>

<div class="container">

        <div class="row dashboard-main-data">
                <div class="col-md-6">
                        <div style="background-color:Orange;" class="dashboard-single">
                                <?php
                                $result = mysqli_query($con, "select count(*)As Total_Customer from users  WHERE usertype='customer'");
                                $row = mysqli_fetch_assoc($result);
                                $cus = $row['Total_Customer'];
                                echo "<br> <h2>Total Customers : " . $cus . "</h2>";
                                ?>

                        </div>
                </div>
                <div class="col-md-6">
                        <div style="background-color:SlateBlue; " class="dashboard-single">
                                <?php
                                $result1 = mysqli_query($con, "SELECT count(productid)As Total_Income FROM products ");
                                $row1 = mysqli_fetch_assoc($result1);
                                $product = $row1['Total_Income'];
                                echo "<br> <h2>Total Products : " . $product . "</h2>";

                                ?>
                        </div>
                </div>
                <div class="col-md-6">
                        <div style="background-color:Tomato;  " class="dashboard-single">
                                <?php
                                $result = mysqli_query($con, "SELECT sum(amount)As Total_Income FROM `payments`");
                                $row = mysqli_fetch_assoc($result);
                                $income = $row['Total_Income'];
                                echo "<br> <h2>Total Income : " . $income . "</h2>";

                                ?>
                        </div>
                </div>
                <div class="col-md-6">
                        <div style="background-color:Green;" class="dashboard-single">
                                <?php
                                $result = mysqli_query($con, "SELECT count(*) As Total_feedbacks FROM `feedback`");
                                $row = mysqli_fetch_assoc($result);
                                $Total_feedbacks = $row['Total_feedbacks'];
                                echo "<br> <h2>Total feedbacks : " . $Total_feedbacks . "</h2>";

                                ?>
                        </div>
                </div>
        </div>



</div>
<?php include_once "footer.php"; ?>