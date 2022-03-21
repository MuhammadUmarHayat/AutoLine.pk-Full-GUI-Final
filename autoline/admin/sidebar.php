<?php include_once "../config.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
     
body {
	min-height: 100vh;
	min-height: -webkit-fill-available;
  }
  
  html {
	height: -webkit-fill-available;
  }
  
  main {
	display: flex;
	flex-wrap: nowrap;
	height: 100vh;
	height: -webkit-fill-available;
	max-height: 100vh;
	overflow-x: auto;

  }
  
  .b-example-divider {
	flex-shrink: 0;
	width: 1.5rem;
	height: 100vh;
	background-color: rgba(0, 0, 0, .1);
	border: solid rgba(0, 0, 0, .15);
	border-width: 1px 0;
	box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }
  
  .bi {
	vertical-align: -.125em;
	pointer-events: none;
	fill: currentColor;
  }
  
  .dropdown-toggle { outline: 0; }
  
  .nav-flush .nav-link {
	border-radius: 0;
  }
  
  .btn-toggle {
	display: inline-flex;
	align-items: center;
	padding: .25rem .5rem;
	font-weight: 600;
	color: rgba(0, 0, 0, .65);
	background-color: transparent;
	border: 0;
  }
  .btn-toggle:hover,
  .btn-toggle:focus {
	color: rgba(0, 0, 0, .85);
	background-color: #d2f4ea;
  }
  
  .btn-toggle::before {
	width: 1.25em;
	line-height: 0;
	content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
	transition: transform .35s ease;
	transform-origin: .5em 50%;
  }
  
  .btn-toggle[aria-expanded="true"] {
	color: rgba(0, 0, 0, .85);
  }
  .btn-toggle[aria-expanded="true"]::before {
	transform: rotate(90deg);
  }
  
  .btn-toggle-nav a {
	display: inline-flex;
	padding: .1875rem .5rem;
	margin-top: .125rem;
	margin-left: 1.25rem;
	text-decoration: none;
  }
  .btn-toggle-nav a:hover,
  .btn-toggle-nav a:focus {
	background-color: #d2f4ea;
  }
  
  .scrollarea {
	overflow-y: auto;
  }
  
  .fw-semibold { font-weight: 600; }
  .lh-tight { line-height: 1.25; }
  

  .dashboard-main-data .col-md-6 {
	padding: 20px;
  }
  .dashboard-main-data{
	  margin-top: 50px;
  }
  .dashboard-single{
	  min-height: 200px;
	  padding: 20px;
  }
    </style>
    <title>Auto Line Admin</title>
</head>

<body>

<main>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="http://localhost/autoline/admin/index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="../assets/images/Asset 17.png" alt="logo" width="200px" >
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link link-dark" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="categoryManagement.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Category Mangement
        </a>
      </li>
      <li>
        <a href="addProducts.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Add Product 
        </a>
      </li>
      <li>
        <a href="viewProducts.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          View Products
        </a>
      </li>

      <li>
        <a href="ViewOrders.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          View All Orders 
        </a>
      </li>
      
      <li>
        <a href="viewFeedBacks.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          View Feedback
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="../assets/images/Asset 17.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Admin</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">

        <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
      </ul>
    </div>
  </div>
  <div class="b-example-divider"></div>
  



