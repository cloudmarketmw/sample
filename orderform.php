<?php
$dbhost = "127.0.0.1:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "black-Core";

//connect to database
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
//check connection
if(!$conn){die("connection failed");}

if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mnumber=$_POST['mnumber'];
$city=$_POST['city'];
$gid=$_POST['gid'];
  
 $sql1="SELECT * FROM gadget WHERE id='$gid'";

$result1=$conn->query($sql1);
//inserting in database
if($result1->num_rows>0){
//inserting in database
$sql="INSERT INTO customer (gid,fname,lname,mnumber,city) VALUES('$gid','$fname','$lname','$mnumber','$city')";
mysqli_query($conn,$sql);
if(($sql)==1){}
	//added successful
	// echo "<script type='text/javascript'>";
	//echo"YOU HAVE ADDED NEW GADGET";
	// echo '</script>';

else{
	 echo "<script type='text/javascript'>";

                        echo 'alert("YOU HAVE ORDERED SUCCESSFULL!! ADMIN WILL COMMUNICATE WITH YOU VIA PHONE CALL OR WHATSAP")';

                        echo '</script>';
                    }

          }
           else{
     echo "<script type='text/javascript'>";

                        echo 'alert("WRONG GADGET ID!! TRY AGAIN")';

                        echo '</script>';
                    }
                
      }
     
       $sqlll = "SELECT * FROM gadget ";

                $result = mysqli_query($conn,$sqlll);                 
?>
<html>
<head><title>press order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{background-image: url("lap/bg.jpg");
color:white;}
        div{padding:20px 0;
            background-color:darkblue;
            text-align: center;
            width: 25%;
            color:white;
            
            }
            h2{text-align: center;
                color:white;}
                button{
    background-color: green;
    color:white;}
   #form{text-align: left;}

    
    </style>
</head>
<body>
        <h2>ORDERING FORM</h2>
        <hr>
    
<p><table align="right" border="1" bgcolor="darkblue">
    <tr>
        
            <th>GADGET ID</th>
            <th>GADGET PICTURE</th>
        
    </tr>
     <?php 
          while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><?php echo $row['id']  ?></td>
             <td><img src="photos/<?php echo $row['g_picture']  ?>" style="width: 100%;height:70px;" alt=""> </td>
            
            

        </tr> 

        <?php 
          
}
        ?>
</table></p>
<p id="form"><div>
    <form action="#" method="POST" enctype="multipart/form-data">
        <p>FILL THE FORM TO PRESS ORDER</p>
        <P>PUT YOUR DETAILS</P>
        <br>FIRSTNAME:<input type="text" name="fname" id="fname" required="1"><br>
        <br>LASTNAME:<input type="text" name="lname" id="lname" required="1"><br>
        <br>MOBILE NUMBER:<input type="number" min="200" name="mnumber" id="mnumber" placeholder="whatsapp number is recomended" required="1"><br>
        <br>LOCATION:<input type="text" name="city" id="city" placeholder="specify city & township" required="1"><br>
        <br>GADGET ID:<input type="number" min="1" name="gid" id="gid" required="1"><br><br>
        <br><input type="submit" value="ORDER" name="submit" align="center"><br>
    </form>
    </div>
</p>
<p align="center">OR</p>
     <a href="available-gadgets.php"><button>GO TO DASHBOARD</button></a>
</body>
</html>