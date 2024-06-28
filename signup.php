<?php
require 'config.php'; // database configuration file here

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $mobile_no = $_POST["mobile_no"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // Check if the email already exists in the database 
    $duplicate = mysqli_query($conn, "SELECT * FROM hotel WHERE email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Email has already been taken');</script>";
    } else {
        if ($password === $cpassword) {
            // Hash the password before inserting it into the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO hotel (name, mobile_no, email, password) VALUES ('$name', '$mobile_no', '$email',  '$hashed_password')";
            
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Registration is successful');</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match');</script>";
        }
    }
}


?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Sign-up </title>
    <link rel="stylesheet" href="css/signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Sign-up</div>
    <div class="content">
      <form class="" method="post" action="" autocomplete="off">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" 
           name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="mobile_no" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required aria-describedby="passwordHelpBlock">
            
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="submit">
        </div>
      </form>
      <a href="login.php">Already login click here</a>
    </div>
  </div>

</body>
</html>
