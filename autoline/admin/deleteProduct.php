<?php include '../config.php'; 
 //`dresstype`, `category`, `price`
// Get image data from database 
$pid= $_GET['id'];
$statusMsg ="";

$insert = $con->query("Delete from `products` where `productid`='$pid'"); 
             if($insert){ 
               
                 $statusMsg = "Product is deleted successfully."; 
            }else{ 
                $statusMsg = "Failed, please try again."; 
            }  
	



?>

<html>
<head></head>
<title> Delete Product</title>
<body>
<h1>Delete Product</h1>
<a href="index.php">Home</a></td><td><a href="../logout.php"> Logout!</a>
<h3>
<?php echo $statusMsg ?>

</h3>
<br>
</body>
</html>
   