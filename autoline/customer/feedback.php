<?php include_once "header.php"; ?>
<main class="customer-panel-main">
	<div class="container">
		<h1 class="text-center"> Please Enter Your Feedback Here</h1>
<?php

if (isset($_POST['done'])) {
	if (!empty($_POST)) {
		if (!empty($_POST['Message'])) {
			////INSERT INTO `feedback`(`id`, `customerID`, `Message`, `date1`) 
			////VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')


			$Message = $_POST['Message'];


			$d1 = date('Y-m-d');
			$q1 = "INSERT INTO `feedback`(`customerID`, `Message`, `date1`)  VALUES ('$customerID','$Message','$d1')";
			$query = mysqli_query($con, $q1);


			echo 'Thank you for your feed back';
		} else {

			echo "Please enter user name and password";
		}
	} else {



		echo "Please fill the form first";
	}
}



?>


	<form method="POST" action="feedback.php">
	

	
			
			<textarea class="form-control" type="text" name="Message" rows="10"></textarea>
		<br>
				<button type="submit" class="btn btn-dark" name="done">Save Feed Back</button>
			



	</form>

</div>
</main>

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
        © 2020 Copyright:
        <a class="text-white" href="http://localhost/autoline/customer/">Autoline.pk
        </a>
    </div>
    <!-- Copyright -->

</footer>