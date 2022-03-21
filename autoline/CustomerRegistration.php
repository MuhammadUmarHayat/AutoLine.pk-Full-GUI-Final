<?php include_once "header.php" ?>
<?php
if (isset($_POST['done'])) {
    if (!empty($_POST)) {
        if (!empty($_POST['userid']) && !empty($_POST['password'])) {

            //INSERT INTO `users`(`userid`, `name`, `password`, `email`, `mobile`, `address`, `usertype`)
            $userid = $_POST['userid'];
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $usertype = "Customer";

            $q1 = "INSERT INTO `users`(`userid`, `name`, `password`, `email`, `mobile`, `address`, `usertype`) VALUES ('$userid', '$name', '$password', '$email', '$mobile', '$address', '$usertype')";
            $query = mysqli_query($con, $q1);

            echo 'User is registered successfully';
        } else {

            echo "Please enter user name and password";
        }
    } else {
        echo "Please fill the form first";
    }
}
?>

<div class="container-fluid">
    <div class="row align-items-center" style="height:calc(100vh - 59.3px); background-color:antiquewhite;">
        <div class="col-md-6 align-items-center" style=" height:100%;background-image: url('assets/images/P1.jpg'); background-size:cover; background-position:center center;">

        </div>
        <div class="col-md-6 align-items-center">

            <div class="sign-up -page">
                <main class="form-signin text-center ">
                    <img src="assets/images/Asset 17.png" class="img-fluid" style="max-width: 250px;">
                    <div style="height: 50px;"></div>
                    <form method="POST" action="http://localhost/autoline/CustomerRegistration.php">

                        <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputID " name="userid" placeholder="User Id">
                            <label for="floatingInput">Enter User ID</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputName" name="name" placeholder="username">
                            <label for="floatingInput">Enter Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="email@example.com">
                            <label for="floatingInput">Enter Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="tel" class="form-control" id="floatingInput" name="mobile" placeholder="Mobile No">
                            <label for="floatingInput">Enter Mobile Number</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="address" placeholder="Address">
                            <label for="floatingInput">Enter Address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>



                        <button class="w-100 btn btn-lg btn-dark" type="submit" name="done">Sign Up</button>

                    </form>
                </main>
            </div>

        </div>


    </div>
</div>



<?php include_once "footer.php"; ?>