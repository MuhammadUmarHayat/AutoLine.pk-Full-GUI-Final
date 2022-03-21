<?php include '../config.php'; 
 //`dresstype`, `category`, `price`
// Get image data from database 
if(isset($_POST["submit"]))
{
//productid,category, subCategory,quantity,title,price
	 $pid= $_GET['id'];
	
	$subCategory= $_POST['subCategory'];
		$category= $_POST['category'];
        $title=$_POST['title'];
        $quantity=$_POST['quantity'];
        $price=$_POST['price'];

         
		
	
	$insert = $con->query("UPDATE `products` SET `title`='$title',`category`='$category', `subCategory`='$subCategory',`quantity`='$quantity',`price`='$price' where `productid`='$pid'"); 
             if($insert){ 
                $status = 'success'; 
                echo $statusMsg = "Product is updates successfully."; 
            }else{ 
               echo $statusMsg = "Failed, please try again."; 
            }  
	
	
	
	
}
$pid= $_GET['id'];

$result = $con->query("SELECT * FROM products where productid='$pid'"); 
if($result->num_rows > 0)
{
    //productid,category, subCategory,quantity,title,price
	while($row = $result->fetch_assoc())
	{
	$pid=	$row['productid'];

$title= $row['title'];
$quantity= $row['quantity'];
		$category= $row['category'];
        $subCategory= $row['subCategory'];
		 $price=$row['price'];
}
}




?>
<html>
<head></head>
<title> Edit Product</title>
<body>

<h1>
Edit Product
</h1>
<br>
<form action="editProduct.php?id=<?php echo $pid ?>" method="post">
<table>
<tr><td>
<a href="index.php">Home</a></td><td><a href="../logout.php"> Logout!</a>
</td></tr>

<tr><td>Product ID</td><td><?php echo $pid ?></td></tr>
<tr><td>Title </td><td><input type="Text" name="title" value="<?php echo $title ?>"></td></tr>
<tr><td>Category</td><td><input type="Text" name="category" value="<?php echo $category ?>"></td></tr>
<tr><td>subCategory</td><td><input type="Text" name="subCategory" value="<?php echo $subCategory ?>"></td></tr>

<tr><td>Quantity </td><td><input type="Text" name="quantity" value="<?php echo $quantity ?>"></td></tr>
<tr><td>Price</td><td><input type="Number" name="price" value="<?php echo $price ?>"></td></tr>


<tr><td></td><td><input type="submit" name="submit" value="Save Changes"></td>
</tr>

</table>
</form>
</body>
</html>
   