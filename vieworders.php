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

if (isset($_GET['cid'])) {
    $idd = $_GET['cid'];

    $delete = mysqli_query($conn, "DELETE FROM customer  WHERE cid = $idd");
}

$sqlll = "SELECT * FROM customer ";

                $result = mysqli_query($conn,$sqlll);

              


?>

<html>
<head><title>VIEW ORDERS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	      a,body{color:white;}
	       
		body{
			background-image: url("lap/bg.jpg");
			}
			h1,h3{padding: 10px 5px;
        	background-color: darkblue;
        	text-align: center;}
        	a{
        		text-decoration:none;
        	}
        	button{
	background-color: green;
	color:white;
}

	</style>
</head>
<body>
	<h1> CONSOLE CONNECTION </h1>
	<h3>LIST OF ALL CUSTOMERS AND ORDERED GADGET</h3>
	<hr>
<table align="center" border="2" bgcolor="darkblue">
	<tr>
		    <th>FIRSTNAME</th>
			<th>LASTNAME</th>
			<th>CUSTOMER PHONE NUMBER</th>
			<th>CITY/LOCATION</th>
			<th>GADGET ID NUMBER</th>
			<th>ACTION</th>
	
	</tr>
	 <?php 
          while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            
            <td><?php echo $row['fname']  ?></td>
            <td><?php echo $row['lname']  ?></td>
            <td>(0/+265)  <?php echo $row['mnumber']  ?></td>
            <td><?php echo $row['city']  ?></td>
            <td><?php echo $row['gid']  ?></td>
             <td><a href='vieworders.php?cid=<?php echo $row['cid'] ?>'>delete</a></td>




        </tr> 

        <?php 
          
}
        ?>
</table>
 <a href="admin_dash.html"><button>GO TO DASHBOARD</button></a>	
</body>
</html>
