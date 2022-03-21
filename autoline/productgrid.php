<?php include_once "header.php"; ?>









<?php function display_car_grid(){?>
<?php $product_grid_query = "SELECT * from products where category ='car' " ;
global $conn;
$result = $conn->query($product_grid_query);

if ($result->num_rows > 0) { ?>

    <div class="row">
        <?php
      
        while ($row = $result->fetch_assoc()) {
  
        ?>

                <div class="col-md-4 ">
                    <div class="text-center single-product">
                        <img class="product-grid-image img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="auto Image">
                        <div class="product-details">
                            <h3 class="product-grid-auto-name"><?php echo $row['title'] ?></h3>
                            <div class="description row">
                            <p class="product-grid-auto-category col-md-6">Category: <?php echo $row['category'] ?></p>
                            <p class="product-grid-auto-price col-md-6"> RS: <?php echo $row['price'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>


        <?php
     
        }
    } else { ?>
        <p>
            No records Found
        </p>
    <?php        }



    ?>
    </div>
<?php
}
?>





<?php function display_bike_grid(){?>
<?php $product_grid_query = "SELECT * from products where category ='Bike' " ;
global $conn;
$result = $conn->query($product_grid_query);

if ($result->num_rows > 0) { ?>

    <div class="row">
        <?php
      
        while ($row = $result->fetch_assoc()) {
  
        ?>

                <div class="col-md-4 ">
                    <div class="text-center single-product">
                        <img class="product-grid-image img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="auto Image">
                        <div class="product-details">
                            <h3 class="product-grid-auto-name"><?php echo $row['title'] ?></h3>
                            <div class="description row">
                            <p class="product-grid-auto-category col-md-6">Category: <?php echo $row['category'] ?></p>
                            <p class="product-grid-auto-price col-md-6"> RS: <?php echo $row['price'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>


        <?php
     
        }
    } else { ?>
        <p>
            No records Found
        </p>
    <?php        }



    ?>
    </div>
<?php
}
?>




    <?php include_once "footer.php"; ?>