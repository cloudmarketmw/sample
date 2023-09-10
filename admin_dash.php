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

//if(!$_SESSION['idd']){
//    header ("Location: Login.php");
 //   die;
//}

/*$id =  $_SESSION['idd'];

$sql = "SELECT * FROM admin WHERE id ='".$id ."'";

$result = mysqli_query($conn,$sql);

$user = $result->fetch_assoc();

$fname = $user["fname"];
$lname = $user["lname"];*/


?>

<html>
<head><title>admin dashborld</title>
	 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	     body{color:green;
	     	background-image:url("lap/bg.jpg");}
	     	a{text-decoration:none;
        	color:white;}
		div li {padding:60px 70px;
           display: inline;
           background-color: green;
           color:white; }
           
        	h1{padding:5px 10px;
        		background-color: darkblue;
        		text-align: center;
        		color:white;}
        		h3{padding: 0;}
        	div p{padding:20px 30px;}
        	#dash{padding:10px 20px;
           display: inline;
           background-color:green;
           color:white;
           
        	}
        	footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
button{
	background-color: green;
	color:white;
}
	</style>

</head>
<body>
       
	<h1> CONSOLE CONNECTION,WELCOME ADMIN,</h1>

	<div>
		<li id="dash"><a href="home.html">HOME</a></li>
	</div>
	<hr>
	<table>
		<tr>
			<td width="25%"><uo>
				<br>
				<li><a href="add_gadget.php"><button>ADD GADGETS ON STOCKS</button></a></li><br>
				<li><a href="add-admin.php"><button>ADD ADMIN</button></a></li><br>
				<li><a href="changepassword.php"><button>CHANGE YOUR PASSWORD</button></a></li><br>
				<li><a href="removeadmin.php"><button>REMOVE ADMIN</button></li><br>
			</uo></td><br><br>
			<td>
			<div><uo>
				<li><a href="vieworders.php">VIEW ORDERED GADGETS</a></li>
				<li><a href="viewAdmins.php">VIEW ALL ADMINS</a></li>
				<li><a href="deletesold.php">DELETE SOLD GADGETS</a></li>
			</uo></div>
			
		</td>
		</tr>
		
	</table>
	
</body>
</html>