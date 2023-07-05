<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links/style.php' ?>
    <?php include 'links/links.php' ?>
</head>

<body>

    <?php
    include 'dbconn.php';

    if (isset($_POST['submit'])) {
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        // it is used for incrept your password using BLOFISH HASSHING algo
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailQuery = "SELECT * FROM registration WHERE email='$email'"; //create query
        $query = mysqli_query($conn, $emailQuery); // execute

        $emailCount = mysqli_num_rows($query);

        if ($emailCount > 0) {
            echo "you are already login";
        } else {
            if ($password === $cpassword) {

                $insertQuery = "INSERT INTO registration(username, email, mobile, password , cpassword) VALUES ('$user' , '$email' , '$mobile' , '$pass' , '$cpass')";
                $iQuery = mysqli_query($conn, $insertQuery);
                if ($conn) {
                 ?>
                    <script>
                        alert('inserted Successfull..')
                    </script>
                <?php
                } else {
                 ?>
                    <script>
                        alert('failed to insert..')
                    </script>
                <?php
                }
            } else {
                echo "password not match try again";
            }
        }
    }

    ?>


    <div class="container">
        <div class="card bg-light">
            <article class="card-body mx-auto">
                <h4 class="card-big text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>
                <p>
                    <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> Login via Twitter</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Login via facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <!-- form start //................................-->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user fa-lg"></i> </span>
                        </div>
                        <input name="username" class="form-control" placeholder="User name" required type="text">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend ">
                            <span class="input-group-text"> <i class="fa fa-envelope fa-lg"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" required type="email">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone fa-lg"></i> </span>
                        </div>
                        <input name="mobile" class="form-control" placeholder="Phone number" required type="text">
                    </div>

                    <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock fa-lg"></i> </span>
                        </div>
                        <input class="form-control" name="password" placeholder="Create password" required type="password">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock fa-lg"></i> </span>
                        </div>
                        <input class="form-control input-lg" name="cpassword" placeholder="Repeat password" required type="password">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account </button>
                    </div>
                    <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
                </form>
        </div>
</body>

</html>