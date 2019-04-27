<?php
$host="localhost";
$user="id7304766_admin";
$password="aoadbms";
$db="id7304766_login";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['id']))
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
<!doctype html>
<head>
	<center>
<title>ADMISSSION FORM</title>
<link rel="stylesheet" type="text/css" href="ad.css"
</head>
<body >
	<div class="form">
		<img src="logo.jpg">
		<h2>APU UNIVERSITY</h2>
		<h1> ADMISSION FORM</h1>
	</div>
		<div class="admission form">
		<form id="admission form" method="POST" action="insert.php">
			<input type="text" name="fname" placeholder="Enter your first name" class="formcontrol" required><br><br>
			<input type="text" name="lname" placeholder="Enter your last name" class="formcontrol"required><br><br>
			<input type="text" name="mname" placeholder="Enter your mother's name"class="formcontrol" required><br><br>
			<input type="text" name="faname" placeholder="Enter your father's name"class="formcontrol" required><br><br>
			<input type="email" name="email" placeholder="Enter your email id"class="formcontrol" required><br><br>
			<input type="password" name="password" placeholder="Create password"class="formcontrol" required><br><br>
			<input type="password" name="1" placeholder="Confirm password"class="formcontrol" required><br><br>
			<p>SELECT YOUR GENDER</p>
			<input type="radio" name="gender" value="male" class="container">MALE
			<input type="radio" name="gender" value="female" class="container">FEMALE<br><br>
			<p>ENTER YOUR QUALIFICATION</p>
			<input type="checkbox" name="qualification"value="SSC"class="container">SSC
			<input type="checkbox" name="qualification"value="HSC"class="container">HSC
			<input type="checkbox" name="qualification"value="DIPLOMA"class="container">DIPLOMA<br><br>
			<p>SELECT YOUR COURSES</p>
			<select name="courses">
			<option value="ENGINEERING" class="container">COMPUTER ENGINEERING</option>
			<option value="ENGINEERING" class="container">ELECTRONICS ENGINEERING</option>
			<option value="ENGINEERING"class="container">MECHANICAL ENGINEERING</option>
			<option value="ENGINEERING"class="container">CICIL ENGINEERING</option>
			<option value="ENGINEERING"class="container">I.T ENGINEERING</option>
			<option value="PHARMACY"class="container">B.PHARM</option>
			<option value="PHARMACY" class="container">B.PHARM(PHARMACEUTICS)</option>
			<option value="PHARMACY"class="container">B.PHARM(HONS)</option>
			<option value="ARTS"class="container">B.A.</option>
			<option value="ARTS"class="container">B.B.A.</option>
			<option value="ARTS"class="container">B.M.S</option>
			<option value="ARTS"class="container">B.M.M.</option>
			<option value="ARTS"class="container">B.J.</option>
			<option value="ARTS"class="container">B.A.HOTEL MANAGEMENT</option>
			<option value="MEDICAL"class="container">M.B.B.S.</option>
			<option value="MEDICAL"class="container">B.D.S.</option>
			<option value="MEDICAL"class="container">B.H.M.S.</option>
			<option value="MEDICAL"class="container">D.H.M.S.</option>
			<option value="MEDICAL"class="container">B.A.M.S</option>
			</select>
			
			
			<p>ENTER DATE</p>
			<input type="date" name="date" placeholder="DATE OF BIRTH"class="formcontrol"><br><br>
			<input type="tel" name="tel" placeholder="ENTER YOUR MOBILE NO."class="formcontrol"><br><br>
			<textarea name="address" placeholder="ENTER YOUR ADDRESS" rows="5"class="formcontrol"></textarea><br><br>
			<input type="submit" name="submit" value="SUBMIT" class="formcontrol submit"><br>
			<input type="reset" name="submit" value="RESET" class="formcontrol submit"><br>
	</div>
</body>
</center>
</html>
