<?php


$dbhost = "127.0.0.1:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "black-Core";
session_start();
//connect to database
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
//check connection
if(!$conn){die("connection failed");}
if(isset($_POST['submit'])){
$email=$_POST['email_input'];
$password=$_POST['password_input'];
//check for user in database
$sql="SELECT * FROM admin  WHERE email='$email' AND password='$password' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
	//login successful
	$row=mysqli_fetch_assoc($result);

                      $_SESSION['idd'];
                      header("Location: admin_dash.html");

                      die; 
}
else{
	 echo "<script type='text/javascript'>";

                        echo 'alert("Wrong Password or email !!!!")';

                        echo '</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
       .box{
       text-align:center;
       color:white;
       }
       div li{padding:10px 20px;
           display: inline;
           background-color: green;
           color:white; }
     form{
      margin:auto;
      padding:50px 40px;
      border: 3px solid black;
      width:400px;
      background-color:darkblue;
     }
     a{
        	text-decoration:none;
        	color:white;
        	}
        	h2{
        		text-align: center;
        		background-color: green;
        		padding:5px 10px;
        		color:white;
        	}
        	body{background-image: url("lap/foni.jpg");
        	color:darkblue;}
    </style>

</head>
<body>
	<h1 align="center">WELCOME TO CONSOLE CONNECTION </h1>
	<h2>LOGIN AS ADMIN ONLY</h2>
	<div>
		<li><a href="home.html">HOME</a></li>
		<li>ABOUT US</li>
		<li>CONTACTS</li>
	</div>
<div class="box">
<form action="#" method="POST">
    
    <div>
        USERNAME:<br>
        <input type="text" id="email_input" name="email_input" required><br><br>
        PASSWORD:<br>
        <input type="password" id="password_input" name="password_input"required><br>
    </div><br><br>
    <div>
        <input type="submit" value="LOGIN" name="submit">
    </div>

</form>
    </div>
</body>
</html>

