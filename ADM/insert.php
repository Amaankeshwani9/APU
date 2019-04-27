<?php
$host="localhost";
$user="id7304766_admin";
$password="aoadbms";
$db="id7304766_login";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['fname']))
{
    
    $uname=$_POST['fname'];
    $eid=$_POST['email'];
    $pass=$_POST['password'];
    
    $sql="insert into users(username,email,password) values('$uname','$eid','$pass')";
    
    if(mysqli_query($con,$sql))
    {
    echo "Data submitted";
     }
}
?>
<html>
    <body>
       <br> <a href="../login.php">Login Here Now..</a><br>
        <a href="ADDform.php">Another Application</a>
    </body>
</html>