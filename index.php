<?php
if(isset($_POST['user_name'])&&isset($_POST['pw']))
{
   extract($_POST);
   if($_POST['user_name']=="user_name_from_db" && $_POST['pw']=="password_from_db"){
      session_start();
      $_SESSION['user_name'] = $_POST['user_name'];
      $_SESSION['pw'] = $_POST['pw'];
      header('Location: home.php');
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Stone Sculpture Garden Ticketing System<</title>
</head>
<body>
<div class="contaner">
    <div class="sidenav">
         <div class="login-main-text">
         <img src="images/logo.png" class="logo" alt="Logo">
            <!-- <h2>Application<br> Login Page</h2> -->
            <br>
            <h2>Stone Sculpture Garden Ticketing System</h2><br><h3>Admin and Accounting Access</h3>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="user_name" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="pw" required>
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
               </form>
            </div>
         </div>
      </div>
</div>
</body>
</html>