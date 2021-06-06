<?php

//server name host name database base name sab mysql serve pe mile jaayega wahi yaha pe add karna hn aur kuch nhi
//direct html file ko idhar ddirect kar sakte hn like form action="abc.php" kar ye sidha isse page pe aa jaayega udhar cher char karne 
//ka koi jarurat nhi hn

error_reporting(0);
$servername="sql311.epizy.com";
$username= "epiz_28807165";
$password= "UmbwyuGOaFj";
$dbname ="epiz_28807165_visitor";


$connn=mysqli_connect($servername,$username,$password,$dbname);

if($connn){
//echo "connection is successfull";
}
else{
 //echo "connection not found!!".mysqli_connect_error();

}

//for linking the connection to the data base!!

$fn=$_GET['first'];
$ln=$_GET['last'];
$em=$_GET['myemail'];
$ph=$_GET['phone'];
$review=$_GET['review'];

$query="INSERT INTO inputdata VALUES('$fn','$ln','$em','$ph','$review')";

$input= mysqli_query($connn,$query);
if($input){
   // echo "your response is successfully saved";
}
else{
   // "failed to save data";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submition</title>
    <link rel="stylesheet" type="text/css" href="submit.css">
</head>
<body>

     <h1 > Your response is successfull submitted!!<br>
     Thanks For Contacting Me !! </h1>
     <img src="thank.jpg" alt="thankyou"><br><br><br>

     <a href="index.html">Go to Main Page</a>
    
</body>
</html>