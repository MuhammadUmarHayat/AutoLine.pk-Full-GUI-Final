<?php include_once "header.php";?>
 <?php include_once "productgrid.php"?>
  <!-------------------------------------------------------- slider start------------------------------------------------------------------>
  <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item">
			<img src="assets/images/banner1.jpg" alt="banner-1" width="100%">

			<div class="container">
				<div class="carousel-caption text-start">
					<h1>NEW CAR COLLECTION.</h1>
					<br>
			
				</div>
			</div>
		</div>
		<div class="carousel-item ">
			<img src="assets/images/car 1.png" alt="banner-1" width="100%">


			<div class="container">
				<div class="carousel-caption text-start">
					<h1>NEW CAR COLLECTION</h1>
					<br>
				
				</div>
			</div>
		</div>
		
		<div class="carousel-item active">
			<img src="assets/images/banP2.png" alt="banner-1" width="100%">


			<div class="container">
				<div class="carousel-caption text-start">
					<h1>NEW CAR COLLECTION</h1>
					<br>
				
				</div>
			</div>
		</div>

	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>
 <!-------------------------------------------------------- slider end------------------------------------------------------------------>


 <div class="container products-page-grid">
	<div class="row">
		<h2 class="text-center">CAR PARTS</h2>
	</div>
	<div class="row" style="padding-top: 30px;"> 

		<!-------------------------------------------------------- search start ------------------------------------------------------------------>
		<div class="col-md-3">
			<form class="" method="POST" action="index.php">
				<div class="row " style="padding:50px 20px; background-color:LightGray; ">
					<h3 style="margin-bottom:20px">Product Search</h3>
					<div class="col-md-12" style="margin-bottom:20px">
						<label for="category" style="margin-bottom:10px"> Category</label>
						<select name="category" class="form-control">
							<option disabled selected>-- Select Category--</option>
							<?php
							//mysqli_query($con,$q1);
							include "../config.php";  // Using database connection file here
							$records = mysqli_query($con, "SELECT DISTINCT `category` FROM `category`");  // Use select query here 

							while ($data = mysqli_fetch_array($records)) {
								echo "<option value='" . $data['category'] . "'>" . $data['category'] . "</option>";  // displaying data in option menu
							}
							?>
						</select>
					</div>
					<div class="col-md-12" style="margin-bottom:20px">
						<label for="subCategory" style="margin-bottom:10px"> Sub Category</label>
						<select id="subCategory" class="form-control" name="subCategory">

							<option disabled selected>-- Select sub Category--</option>
							<?php
							//mysqli_query($con,$q1);
							include "../config.php";  // Using database connection file here
							$records = mysqli_query($con, "SELECT  DISTINCT `subcategory` FROM `category`");  // Use select query here 

							while ($data = mysqli_fetch_array($records)) {
								echo "<option value='" . $data['subcategory'] . "'>" . $data['subcategory'] . "</option>";  // displaying data in option menu
							}
							?>
						</select>
					</div>
					<div class="col-md-12" style="margin-bottom:20px">
						<label for="title" style="margin-bottom:10px">Product Name</label>
						<input class="form-control" type="text" name="title">
					</div>

					<div class="col-md-12 d-grid" style="margin-bottom:20px"> <button type="submit" name="btnSearch" class="btn btn-dark col"> Search </button></div>


					<div class="col-md-12 d-grid"> <button type="submit" name="btnviewAll" class="btn btn-primary col"> View All</button></div>



				</div>

			</form>
		</div>
		<!-------------------------------------------------------- search end------------------------------------------------------------------>

		<div class="col-md-9">

			<?php
			display_car_grid(); ?>
		</div>
	</div>


</div>

<!-- Footer -->
<footer class="bg-dark text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-6 mb-md-0">
                    <h2>About AutoLine.Pk</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                        distinctio earum repellat quaerat voluptatibus placeat nam,
                        commodi optio pariatur est quia magnam eum harum corrupti dicta,
                        aliquam sequi voluptate quas.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook"></i></a>

            <!-- Twitter -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        </section>

    </div>
    <!-- Grid container -->
            <!-- Section: Social media -->
            
        <!-- Section: Social media -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        ?? 2020 Copyright:
        <a class="text-white" href="http://localhost/autoline/">Autoline.pk
        </a>
    </div>
    <!-- Copyright -->

</footer>

<?php include_once "footer.php"; ?>