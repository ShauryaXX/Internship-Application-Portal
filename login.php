<html>
<head>
  <title>SELECTO</title>
  <style>
    h1 {
      font-family: "Times New Roman", Times, serif;
    }

    .image {
      background-image: url("download1.jpg");
      < !background-repeat: no-repeat;>
	  position: relative;
      float: left;
      width: 40%;
      height: 100%;
      background-size: 100%;
	  padding: 12px 20px;
    }
    img{
	border-radius:"10px";
	}
    .login {
      background-color:#FFFF33;
      position: relative;
      float: right;
      width:718px;
      height: 100%;
      padding: 12px 20px;
    }
    .form{
	  align	:center;
	  }
    input[type=text],
    input[type=password] {
      width: 500px;
      align: center;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
	  background-color:lightgrey;
    }

    input[type=submit] {
      width: 400px;
      align: center;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      box-shadow: 0 9px #999;
    }
    img{border-radius:50%;}
  </style>
</head>
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydata";
if(isset($_POST["submit"])){   
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysql_select_db($dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
    $query=mysql_query($conn,"SELECT * FROM signup WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
     echo "hello worls";
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: profile.html");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?> 
<script>  
function validateform(){  
var name=document.myform.username.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script> 
<body>
  <div class="image">
    <img src="logo.jpg" height="80px" width="80px" ><br>
    <h1 text-align="center">Online Internship Platform
      <br> Getting internship made easy</h1>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h2 align="bottom">Trusted by the best companies in the world</h2>
  </div>
  <div class="login">
    <h1>Sign in</h1>
    <h4>Enter your details below</h4>
	<div class="form">
    <form action="" method="POST" name="myform" onsubmit="return validateform()">
      <input type="text" placeholder="Username" name="username" required>
      <br>
      <input type="password" placeholder="Enter Password" name="password" required>
      <br>
      <input type="submit"  value="Login">
      <br>
      <p>
        <input type="checkbox" checked="checked" name="remember"> Remember me</p>
    </form>
    <span>
      <a href="password reset.html"> Forgot password?</a>|Not Registered Yet?
      <a href="signup.html">Sign Up</a>
    </span>
	</div>
  </div>
</body> 
</html>