<?php

session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';

$con = mysqli_connect($host, $user, $pass, $db);

if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "insert into user (username, password, name, email, address, contact_number) values ('$username', '$password', '$name', '$email', '$address', '$phone')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "registration created successfully";
        header("Location: registration.php");
        exit(0);
    }
    else
    {       
        $_SESSION['message'] = "Registation not created";
        header("Location: registration.php");
        exit(0);
    }   
}
?>  


<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="login-reg.css">
</head>
<body>

<!-- <?php
  include 'message.php';
?> -->

<div class="reg">
  <h1>Register</h1> 
    <form method="post">
      <input type="text" name="name" placeholder="Name" required="required" />
      <input type="email" name="email" placeholder="E-mali" required="required" />
      <input type="tel" name="phone" placeholder="Contact Number" required="required" />
      <input type="text" name="address" placeholder="Address" required="required" />

      <input type="text" name="username" placeholder="User Name" required="required" />
      <input type="password" name="password" placeholder="Password" required="required" />
      
      <button type="submit" class="btn btn-primary btn-block btn-large" name="register">Submit</button>
      <h5>Already a registered user? <a href="login.php">click here to Login</a></h5>
    </form>
</div>

</body>

</html>