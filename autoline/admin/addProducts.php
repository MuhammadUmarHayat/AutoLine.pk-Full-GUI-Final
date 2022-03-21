<?php include_once 'sidebar.php'; ?>
<div class="container">
    <div class="row dashboard-main-data">

        <?php
        // If file upload form is submitted 

        $status = $statusMsg = '';
        if (isset($_POST["submit"])) {
            $status = 'error';
            if (!empty($_FILES["image"]["name"])) {
                // Get file info 
                $fileName = basename($_FILES["image"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                // Allow certain file formats 
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    $image = $_FILES['image']['tmp_name'];
                    $imgContent = addslashes(file_get_contents($image));
                    // INSERT INTO `products`(`image`, `uploaded`, `subCategory`, `category`, `price`, `title`)
                    // VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
                    $title = $_POST['title'];
                    $subcategory = $_POST['subcategory'];
                    $category = $_POST['category'];
                    $price = $_POST['price'];

                    $quantity = $_POST['quantity'];
                    $status = "ok";

                    $insert = $con->query("INSERT INTO `products`(`image`, `uploaded`, `subCategory`, `category`, `price`, `title`, `quantity`,`status`) VALUES ('$imgContent', NOW(),'$subcategory','$category','$price','$title','$quantity','$status')");
                    if ($insert) {
                        $status = 'success';
                        $statusMsg = "Product is added successfully.";
                    } else {
                        $statusMsg = "File upload failed, please try again.";
                    }
                } else {
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                }
            } else {
                $statusMsg = 'Please select an image file to upload.';
            }
        }

        // Display status message 
        echo $statusMsg;
        ?>

        <h1 class="text-center" style="margin-bottom: 50px;">Add Products</h1>
        <form action="addProducts.php" method="post" enctype="multipart/form-data">

            <table class="table">

                <tr>
                    <td>Select category: </td>
                    <td>
                        <select name="category" class="form-control">
                            <option disabled selected >-- Select Category--</option>
                            <?php
                            //mysqli_query($con,$q1);
                            include "../config.php";  // Using database connection file here
                            $records = mysqli_query($con, "SELECT DISTINCT `category` FROM `category`");  // Use select query here 

                            while ($data = mysqli_fetch_array($records)) {
                                echo "<option value='" . $data['category'] . "'>" . $data['category'] . "</option>";  // displaying data in option menu
                            }
                            ?>
                        </select>




                    </td>
                </tr>
                <tr>
                    <td>Select Sub category:</td>
                    <td>
                        <select name="subcategory" class="form-control">
                            <option disabled selected>-- Select Sub Category--</option>
                            <?php
                            //mysqli_query($con,$q1);
                            include "../config.php";  // Using database connection file here
                            $records = mysqli_query($con, "SELECT DISTINCT `subcategory` FROM `category`");  // Use select query here 

                            while ($data = mysqli_fetch_array($records)) {
                                echo "<option value='" . $data['subcategory'] . "'>" . $data['subcategory'] . "</option>";  // displaying data in option menu
                            }
                            ?>
                        </select>


                    </td>
                </tr>

                <tr>
                    <td>Enter Product name:</td>
                    <td><input type="text" name="title" class="form-control"></td>
                </tr>
                <tr>
                    <td>Enter price:</td>
                    <td><input type="Number" name="price" class="form-control"></td>
                </tr>
                <tr>
                    <td>Enter Quantity:</td>
                    <td><input type="Number" name="quantity" class="form-control"></td>
                </tr>

                <tr>
                    <td><label>Select Image File:</label></td>
                    <td><input type="file" name="image" class="form-control"></td>
                </tr>



                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" class="btn btn-dark" value="Add Product"></td>
                </tr>


       
            </table>
        </form>
    <?php include_once "footer.php";?>