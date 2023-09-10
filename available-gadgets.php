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



$sqlll = "SELECT * FROM gadget ";

                $result = mysqli_query($conn,$sqlll);

              


?>

<html>
<head><title>Gadgets</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	      a,div li,body{color:white;}
	       div li{padding:10px 20px;
           display: inline;
           background-color:darkblue;
		}
		body{
			background-image: url("lap/bg.jpg");
			}
			h1,h3{padding: 10px 5px;
        	background-color: darkblue;
        	text-align: center;}
        	a{
        		text-decoration:none;
        	}

	</style>
</head>
<body>
	<h1> CONSOLE CONNECTION </h1>
	<div>
		<li><a href="home.html">HOME</a></li>
		<li>ABOUT US</li>
		<li>CONTACTS</li>
		<li><a href="Login.html">LOGIN</a></li>
	</div>
	<h3>LIST OF ELECTRONIC GADGETS AVAILABLE ON STOCKS</h3>
	<hr>
<table align="center" border="1" bgcolor="darkblue">
	<tr>
			<th>GADGET PICTURE</th>
			<th>GADGET NAME</th>
			<th>GADGET PRICE(MKW)</th>
			<th>ORDER</th>
		
	</tr>
	 <?php 
          while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><img src=" photos/<?php echo $row['g_picture']  ?>" style="width: 100%;height:250px;" alt=""> </td>
            <td><?php echo $row['g_name']  ?></td>
            <td><?php echo $row['g_price']  ?></td>
            <td><a href="orderform.php">PRESS ORDER</a></td>

        </tr> 

        <?php 
          
}
        ?>
</table>	
</body>
</html>
