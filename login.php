<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <?php  include 'links/style.php' ?>
    <?php  include 'links/links.php' ?>
</head>
<body>

<?php
include 'dbconn.php';

if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password = $_POST['password'];

    $searchQuery= "SELECT * FROM registration WHERE email='$email'";
    $queryRun = mysqli_query($conn , $searchQuery);

    $emailCount= mysqli_num_rows($queryRun);

    if($emailCount){
       $email_pass= mysqli_fetch_assoc($queryRun);
      $db_pass = $email_pass['password'];

      $_SESSION ['username'] = $email_pass['username'];
      $pass_decode = password_verify($password ,$db_pass);

            if($pass_decode){
            echo "Password Correct login";
                header('Location:home.php');
            }else{
            echo "Invalid Password";
            }

    }else{
        echo "Invalid email";
    }
}

?>

<div class="container fw-2">
<div class="card bg-light">
<article class="card-body mx-auto" >
	<h4 class="card-big text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>  Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
   <!-- form start //................................-->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	 <!-- form-group// -->
     <div class="form-group input-group ">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope fa-lg"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> 

    <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock fa-lg"></i> </span>
		</div>
        <input class="form-control" name="password"  placeholder="Create password" type="password" required>
    </div> 
   
     <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
    </div>
     <!-- form-group// -->      
    <p class="text-center">Not have an account ? <a href="registration.php">Sign Up</a> </p>                                                                 
</form>
</div>
</body>  
</html>

   