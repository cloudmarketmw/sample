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


$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];


//inserting in database
$sql="INSERT INTO admin (fname,lname,email,password) VALUES('$f_name','$l_name','$email','$password')";
mysqli_query($conn,$sql);
if(($sql)==1){
	//added successful
	 echo "<script type='text/javascript'>";
	echo"ERROR TRY AGAIN!!!";
	 echo '</script>';
}
else{
	 echo "<script type='text/javascript'>";

                        echo 'alert("NEW ADMIN HAS BEEN ADDED")';

                        echo '</script>';
                    }
                }
                
?>
<html>
<head><title>add admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{background-image: url("lap/bg.jpg");
          color:white;}
        div{padding:60px 80px;
            background: green;
            text-align: center;
            color:white;
            margin:auto;
            width:400px;}
            h2{text-align: center;}
            button{
    background-color: green;
    color:white;
}
    
    </style>
</head>
<body>
        <h2>ADD NEW ADMIN</h2>
        <hr>
    <div>
    <form  method="POST">
        FIRSTNAME:<input type="text" name="fname" id="fname" required="1"><br>
        <br>LASTNAME:<input type="text" name="lname" id="lname" required="1"><br>
        <br>EMAIL:<input type="email" name="email" id="email" required="1"><br>
        <br>PASSWORD:<input type="password" minlength="8" maxlength="15" name="password" id="password" required="1"><br><br>
        <br><input type="submit" value="UPLOAD" name="submit" align="center"><br>
    </form>
    </div>
    <a href="admin_dash.html"><button>GO TO DASHBOARD</button></a>
</body>
</html>