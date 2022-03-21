<?php include_once '../config.php';?>
<?php

 $customerID =  $_SESSION['userid'];

 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoline</title>
    <link rel="stylesheet" href="http://localhost/autoline/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/autoline/assets/css/style.css">
    <script src="https://kit.fontawesome.com/086adf587f.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light wed-main-nav ">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/autoline/customer/index.php"><img src="http://localhost/autoline/assets/images/Asset 17.png" alt="logo" width="200px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto navbar-content-center mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/autoline/customer/index.php">Home</a>
        </li>
	
		<li class="nav-item">
          <a class="nav-link" href="http://localhost/autoline/customer/checkout.php">View Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/autoline/customer/displayorder.php">Display Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/autoline/customer/feedback.php">Send Feedback</a>
        </li>
       

      </ul>
      
        <a class="btn btn-outline-success" href="../index.php" >Logout <?php  echo  $customerID; ?></a>
      </form>
    </div>
  </div>
</nav>