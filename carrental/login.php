<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$username = $_POST['uname'];
$password = $_POST['pass'];

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database = "carrental";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("sorry connection is failed:".mysqli_connect_error());
    }
    else{
        
    $sql = "INSERT INTO `userlogin` (`username`, `password`) VALUES  ( '$username', '$password')";
    
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "successful login";
    }
    else {
        echo "your record was not submitted successfully because ofthis error ---> ".mysqli_error($conn);

    }
      
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
	<body background="png">
	<link rel="stylesheet" a href="login.css">
		</body>
<body>
	<div class="container">
	<img src="audi.png"/>
		<form action="login.php" method="post">
			Username: <input type="text" name="uname" placeholder="Username"/><br/>
			password: <input type="password" name="pass" placeholder="password"/><br/><br/>
			<input type="submit" value="LOGIN" onclick="alert('Login Successfully')"/>
			<a href="register.php" style="color:rgb(17, 6, 15)">Register</a> 
		</form>
	</div>>
	<div class="th_line">
		<p>BETTER CARE</p>
		<P>WITH</P>
		<P>BEST</P>
		<P><span>PRICES</span></P>
	</div>
</body>
</html>