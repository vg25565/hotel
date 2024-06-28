<?php
require 'config.php';



if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($conn, "SELECT id, password FROM hotel WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPasswordHash = $row["password"];
        
        // Verify the hashed password
        if (password_verify($password, $storedPasswordHash)) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: Hotel.php");
            exit();
        } else {
            echo "<script>alert('Wrong password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }
    
    mysqli_stmt_close($stmt); 
    mysqli_close($conn);
}

?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>login </title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<section class="packages" id="packages">
        <h1 class="heading">
            <span>L</span>
            <span>O</span>
            <span>G</span>
            <span>I</span>
            <span>N</span>
           
    
        </h1>
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
      <form action="" method="POST" autocomplete="off">
        <!-- <div class="user-details">  -->
            
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label" id="lab">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label" id="lab">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="Password" name="password"required>
                </div>
              </div>
            
         <!-- </div>  -->
        <div class="button">
          <input type="submit" value="Login" name="submit">
        </div>
      </form>
      <a href="signup.php.php">Create an Account</a>
    </div>
  </div>
  


</body>
</html>