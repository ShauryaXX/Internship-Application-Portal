<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydata";
if(isset($_POST['submit']))
{
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "insert into signup values ('','".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["repassword"]."','".$_POST["date"]."')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
mysqli_close($conn);
}
?>
<html>
<head>
	<title>SELECTO</title>
	<style>
		h1 {
			font-family: Comic sans MS;
		}

		.sign {
			background-color: lightblue;
			height: 80px;
		}

		.form {
			background-color: yellow;
			height: 100%-50px;
			;
		}

		h1 {
			align: center;
		}

		input[type=text],
		input[type=password],
		input[type=email],
		input[type=date] {
			width: 500px;
			align: center;
			padding: 12px 20px;
			margin: 8px 15px;
			box-sizing: border-box;
			background-color: lightgrey;
		}

		input[type=submit] {
			width: 200px;
			align: center;
			padding: 12px 20px;
			margin: 8px 15px;
			background-color: #00FF33;
		}
	</style>
</head> 
<body>
	<div class="sign">
		<h1>
			Sign Up
		</h1>
	</div>
	<div class="form" >
		<form action="" method="post" name="myform" onsubmit="return validateform()">
			<input type="text" placeholder="Username" name="name" required>
			<br>
			<input type="email" placeholder="EmailID" name="email" required>
			<br>
			<input type="password" placeholder="Password" name="password" required>
			<br>
			<input type="password" placeholder="Re-Type Password" name="repassword" required>
			<br>
			<input type="date" name="date">
			<p>Gender:</p>
			<p>
				<input type="radio" name="gender" value="male" checked>Male</p>
			<p>
				<input type="radio" name="gender" value="female">Female</p>
			<input type="submit" name="submit" value="Sign up">
		</form>
	</div>
	<script src="./validation.js"></script>

</body>

</html>