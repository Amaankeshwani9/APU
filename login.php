<?php
$host="localhost";
$user="id7304766_admin";
$password="aoadbms";
$db="id7304766_login";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from users where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)!=1){
     
        echo " You Have Entered Incorrect Username or Password";
    }
      
            $_SESSION['username'] = $uname; // Initializing Session
            header("location:index1.html"); // Redirecting To Other Page
            mysql_close($connection); // Closing Connection  
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

    <div class="login-box">
      <img src="logo.jpg" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      <form method="POST" action="#">
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="username">
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password">
        <input type="submit" value="Log In">
        <a href="ADM/ADDform.php">New Applicant?</a><br>
      </form>
    </div>
  </body>
</html>