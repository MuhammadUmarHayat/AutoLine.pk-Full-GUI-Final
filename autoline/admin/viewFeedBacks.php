<?php include_once "sidebar.php"; ?>
<div class="container">
    <div class="row dashboard-main-data">
        <h1 class="text-center" style="margin-bottom: 50px;">Customer FeedBack</h1>



        <?php
        $result = $con->query("SELECT * FROM feedback");
        if ($result->num_rows > 0) { ?>
            <table class="table">
                <tr>
                    <th>Customer Name</th>
                    <th>Date</th>
                    <th>Customer Message</th>
                </tr>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>

                        <td><?php echo $row['customerID']; ?> </td>
                        <td><?php echo $row['date1']; ?></td>
                        <td><?php echo $row['Message']; ?></td>

                    </tr>
            <?php
                }
            }

            ?>
            </table>
    </div>
</div>


<?php include_once "footer.php"; ?>