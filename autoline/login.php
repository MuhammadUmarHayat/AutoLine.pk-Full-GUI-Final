<?php include_once "header.php"; ?>
<?php
$userid = "";
$password = "";
if (isset($_POST['done'])) {
    if (!empty($_POST)) {
        if (!empty($_POST['userid'])) {
            if (!empty($_POST['password'])) {
                //"userType"
                $userid = $_POST['userid'];
                $password = $_POST['password'];

                $qry = "Select * from users where  userid= '$userid' and password='$password'";

                $results = mysqli_query($con, $qry);
                if ($results->num_rows > 0) //username and password is corract
                {
                    $usertype = "";
                    $row = $results->fetch_assoc(); //getting the single row only

                    $usertype = $row['usertype']; //fetching the usertype

                    $_SESSION['userid'] = $userid; //session
                    if ($usertype == "Admin") {
                        session_start();
                        header('Location:http://localhost/autoline/admin/index.php'); // Navigation to admin pannel
                    } else if ($usertype == "Customer") {
                        session_start();
                        header('Location:http://localhost/autoline/customer/index.php'); // Navigation to customer pannel
                    }
                } else {
                    echo "Invalid username or password.";
                }
            } else {
                echo "Password field is empty.";
            }
        } else {
            echo "username field is empty";
        }
    }
}


?>
<div class="container-fluid">
    <div class="row align-items-center" style="height:calc(100vh - 59.3px); background-color:antiquewhite;"> 
        <div class="col-md-6 align-items-center" style=" height:100%;background-image: url('assets/images/banner1.jpg'); background-size:cover; background-position:center center;">

        </div>
        <div class="col-md-6 align-items-center">

            <div class="sign-in-page">
                <main class="form-signin text-center ">
                    <img src="assets/images/Asset 17.png" class="img-fluid" style="max-width: 250px;" >
                    <div style="height: 50px;"></div>
                    <form method="POST" action="http://localhost/autoline/login.php">

                        <h1 class="h3 mb-3 fw-normal">PLEASE SIGN IN</h1>
                        <div style="height: 20px;"></div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="userid" placeholder="username">
                            <label for="floatingInput">Enter Username</label>
                        </div>
                        <div style="height: 10px;"></div>   
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>


                        <button class="w-100 btn btn-lg btn-dark" type="submit" name="done">Sign in</button>

                    </form>
                </main>
            </div>

        </div>


    </div>
</div>
<?php include_once "footer.php"; ?>