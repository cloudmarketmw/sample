<?php
$dbhost = "127.0.0.1:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "black-Core";

//connect to database
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
//check connection
if(!$conn){die("connection failed");}
else{
if(isset($_POST['submit'])){


$cpassword=$_POST['cpassword'];
$npassword=$_POST['npassword'];
$email=$_POST['email'];

$sql1="SELECT * FROM admin WHERE email='$email' && password='$cpassword'";

$result=$conn->query($sql1);
//inserting in database
if($result->num_rows>0){
$sql="UPDATE admin SET password='$npassword' WHERE email='$email'&& password='$cpassword'";
mysqli_query($conn,$sql);
if(($sql)==1){
                    
   }
   //added successful
   echo "<script type='text/javascript'>";

                        echo 'alert("NEW PASSWORD HAS BEEN UPDATED!!!")';

                        echo '</script>';                           
}
else
                {
                  echo "<script type='text/javascript'>";

                        echo 'alert("WRONG PASSWORD OR EMAIL,PLEASE TRY AGAIN!!!")';

                        echo '</script>'; 
            }
}
  }              
?>
<html>
<head><title>CHANGE PASSWORD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{background-image: url("lap/bg.jpg");}
        div{padding:60px 80px;
            background: green;
            text-align: center;
            color:white;
            margin:auto;
            width:400px;}
            h1{text-align: center;
                color:white;}
        button{
    background-color: green;
    color:white;
}
    
    </style>
</head>
<body>
        <h1>CHANGE PASSWORD</h1>
        <hr>
    <div>
    <form  method="POST">
       
             CURRENT PASSWORD:<input type="password" minlength="8" maxlength="15" name="cpassword" id="cpassword" required="1">
        <br> NEW PASSWORD    :<input type="password" minlength="8" maxlength="15" name="npassword" id="npassword" required="1">
        <br> YOUR EMAIL      :<input type="email" name="email" id="email" required="1"><br><br><br>
        <br><input type="submit" value="CHANGE" name="submit" align="center"><br>
    </form>
    </div>
    <a href="admin_dash.html"><button>GO TO DASHBOARD</button></a>
</body>
</html>