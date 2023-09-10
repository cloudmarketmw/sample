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

if (isset($_GET['id'])) {
    $idd = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM gadget  WHERE id = $idd");
}

$sqlll = "SELECT * FROM gadget ";

                $result = mysqli_query($conn,$sqlll);

              


?>

<html>
<head><title>delete</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	      a,body{color:white;}
	       
		body{
			background-image: url("lap/bg.jpg");
			}
			h1,h3{
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
	<h3>DELETE SOLD GADGETS</h3>
	<hr>
<table align="center" border="1" bgcolor="darkblue">
	<tr>
		
			<th>GADGET ID</th>
		    <th>GADGET PICTURE</th>
		    <th>GADGET NAME</th>
		    <th>GADGET PRICE</th>
		    <th>ACTION</th>
		
	</tr>
	 <?php 
          while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><?php echo $row['id']  ?></td>
             <td><img src="photos/<?php echo $row['g_picture']  ?>" style="width: 100%;height:70px;" alt=""> </td>
            <td><?php echo $row['g_name']  ?></td>
            <td><?php echo $row['g_price']  ?></td>
             <td><a href='deletesold.php?id=<?php echo $row['id'] ?>'>delete</a></td>

        </tr> 

        <?php 
          
}
        ?>
</table>
 <a href="admin_dash.html"><button>GO TO DASHBOARD</button></a>	
</body>
</html>
