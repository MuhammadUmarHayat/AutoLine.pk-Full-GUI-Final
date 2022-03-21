<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoline.pk</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/086adf587f.js" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light wed-main-nav ">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/autoline"><img src="http://localhost/autoline/assets/images/Asset 17.png" alt="logo" width="200px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto navbar-content-center mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/autoline/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/autoline/car.php">Car</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="http://localhost/autoline/motorbike.php">Motor Bike</a>
        </li>
	
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://localhost/autoline/login.php">Login</a></li>
            <li><a class="dropdown-item" href="http://localhost/autoline/CustomerRegistration.php">Sign Up</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="http://localhost/autoline/AdminRegistrationForm.php">Sign Up as Admin</a></li>
          </ul>
        </li>

      </ul>

    </div>
  </div>
</nav>