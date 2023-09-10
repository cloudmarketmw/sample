<?php
$dbhost = "127.0.0.1:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "black-Core";

//connect to database
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
//check connection
if(!$conn){die("connection failed");}

if(isset($_POST['submit']) && isset($_FILES["photo"])){
    //echo "<pre>";
   // print_r($_FILES["prisoner-image"]);
    //echo"</pre>";
     $img_name = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    $img_name = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

$g_name=$_POST['g_name'];
$g_price=$_POST['price'];

 $img_ex = pathinfo($img_name , PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);

    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
    $path =  "photos/".$new_img_name;
    move_uploaded_file($tmp_name , $path);
    #echo "$new_img_name";

//inserting in database
$sql="INSERT INTO gadget (g_picture,g_name,g_price) VALUES('$new_img_name','$g_name','$g_price')";
mysqli_query($conn,$sql);
if(($sql)==1){
	//added successful
	 echo "<script type='text/javascript'>";
	echo"YOU HAVE ADDED NEW GADGET";
	 echo '</script>';
}
else{
	 echo "<script type='text/javascript'>";

                        echo 'alert("YOU HAVE ADDED NEW GADGET")';

                        echo '</script>';
                    }
          }         
?>
<html>
<head><title>add gadgets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{background-image: url("lap/bg.jpg");}
        div{padding:60px 80px;
            background-color:darkblue;
            text-align: center;
            color:white;
            margin:auto;
            width:400px;}
            h2{text-align: center;
                color:white;}
                button{
    background-color: green;
    color:white;
}

    
    </style>
</head>
<body>
        <h2>ADD GADGETS ON STOCK</h2>
        <hr>
    <div>
    <form action="#" method="POST" enctype="multipart/form-data">
        UPLOAD GADGET PHOTO:<input type="file" name="photo" id="photo" required="1"><br>
        <br>NAME OF GADGET:<textarea rows="4" cols="20"name="g_name" id="g_name" placeholder="name of gadget and description" required="1"></textarea><br>
        <br>PRICE OF GADGET:<input type="number" min="1" name="price" id="price" required="1"><br><br>
        <br><input type="submit" value="UPLOAD" name="submit" align="center"><br>
    </form>
    </div>
     <a href="admin_dash.html"><button>GO TO DASHBOARD</button></a>
</body>
</html>