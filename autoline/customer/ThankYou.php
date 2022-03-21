<?php include_once "header.php"; ?>
<script>
    function doPrint() {
        var prtContent = document.getElementById('div1');
        prtContent.border = 0; //set no border here
        var WinPrint = window.open('', '', 'left=100,top=100,width=1000,height=1000,toolbar=0,scrollbars=1,status=0,resizable=1');
        WinPrint.document.write(prtContent.outerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>

<div class="container" style="max-width: 500px;">
    <div class="row">

        <main class="customer-panel-main">
            <div class="container">
                <?php
                $customerID = "";

                $customerID = $_SESSION["userid"];
                echo "<h3> Thank you For Shoping Here </h3>";

                if (isset($_POST['done'])) {

                    header('Location:http://localhost/autoline/customer/feedback.php');
                }


                ?>


                <?php
                //"SELECT * FROM orders where cusId='$customerID' ORDER BY date DESC LIMIT 1"
                $result = $con->query("SELECT * FROM orders where cusId='$customerID' ORDER BY date DESC LIMIT 1");








                ?>

                <form method="POST" action="ThankYou.php">
                    <div id="div1">

                        <h2>Your Receipet</h2>
                        <?php
                        $grandTotal = 0;
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                        ?>


                                <?php echo "<br> Customer ID: " . $row['cusId']; ?> <br /> <?php echo " Product No:" . $row['productid']; ?> <br /> <?php echo "Price: " . $row['price']; ?> <br /> <?php echo "Quantity: " . $row['quantity']; ?> <br /> <?php echo "Total: " . $row['total']; ?> <br /> <?php echo " Order No: " . $row['orderid']; ?>
                                <?php $grandTotal = $row['total']; ?>

                        <?php
                            }
                        }
                        //  $result = mysqli_query($con, 'SELECT SUM(`total`) AS value_sum FROM orders ORDER BY date DESC LIMIT 1');
                        //  $row = mysqli_fetch_assoc($result);
                        // $sum = $row['value_sum'];
                        echo "<br> <h2>Total Amount : " . $grandTotal . "</h2>";

                        ?>




                    </div>
                    <button type="submit" class="btn btn-dark" name="print" onclick="doPrint()">Print Receipet</button>

                    <button type="submit" class="btn btn-dark" name="done">Send Feedback /Suggestions</button>

                </form>


        </main>

    </div>



</div>


</body>

</html>